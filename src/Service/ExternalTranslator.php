<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ExternalTranslator
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private CacheInterface $cache,
        #[Autowire('%env(default:translate_provider:TRANSLATE_PROVIDER)%')]
        private string $provider,
        #[Autowire('%env(default::TRANSLATE_API_EMAIL)%')]
        private ?string $email,
        #[Autowire('%env(default::TRANSLATE_LIBRE_BASE_URL)%')]
        private ?string $libreBaseUrl,
        #[Autowire('%env(default::TRANSLATE_LIBRE_API_KEY)%')]
        private ?string $libreApiKey,
    ) {
    }

    public function translate(string $text, string $target, string $source = 'fr'): string
    {
        $text = trim($text);
        $source = strtolower(trim($source));
        $target = strtolower(trim($target));

        if ($text === '' || $target === '' || $source === '' || $target === $source) {
            return $text;
        }

        $provider = strtolower(trim($this->provider ?: 'mymemory'));
        $cacheKey = 'ext_translate.' . sha1($provider . '|' . $source . '|' . $target . '|' . $text);

        return $this->cache->get($cacheKey, function (ItemInterface $item) use ($provider, $text, $target, $source) {
            $item->expiresAfter(60 * 60 * 24 * 30);

            return match ($provider) {
                'mymemory', 'my-memory', 'mm' => $this->translateWithMyMemory($text, $source, $target),
                'libretranslate', 'libre', 'lt' => $this->translateWithLibreTranslate($text, $source, $target),
                default => throw new \RuntimeException('TRANSLATE_PROVIDER invalide. Utilisez "mymemory" ou "libretranslate".'),
            };
        });
    }

    private function translateWithMyMemory(string $text, string $source, string $target): string
    {
        $query = [
            'q' => $text,
            'langpair' => $source . '|' . $target,
        ];

        $email = trim((string) ($this->email ?? ''));
        if ($email !== '') {
            $query['de'] = $email;
        }

        $response = $this->httpClient->request('GET', 'https://api.mymemory.translated.net/get', [
            'query' => $query,
            'timeout' => 15,
        ]);

        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        $data = json_decode($body, true);

        if (!is_array($data)) {
            throw new \RuntimeException('Réponse de traduction invalide.');
        }
        if ($status >= 400) {
            $message = $data['responseDetails'] ?? 'Erreur API MyMemory.';
            throw new \RuntimeException((string) $message);
        }

        $translated = (string) ($data['responseData']['translatedText'] ?? '');
        if ($translated === '') {
            throw new \RuntimeException('La traduction est vide.');
        }

        return $translated;
    }

    private function translateWithLibreTranslate(string $text, string $source, string $target): string
    {
        $base = trim((string) ($this->libreBaseUrl ?? ''));
        if ($base === '') {
            throw new \RuntimeException('TRANSLATE_LIBRE_BASE_URL manquant. Ajoutez-le dans .env.local.');
        }

        $base = rtrim($base, '/');
        $url = str_ends_with($base, '/translate') ? $base : ($base . '/translate');

        $payload = [
            'q' => $text,
            'source' => $source,
            'target' => $target,
            'format' => 'text',
        ];

        $apiKey = trim((string) ($this->libreApiKey ?? ''));
        if ($apiKey !== '') {
            $payload['api_key'] = $apiKey;
        }

        $response = $this->httpClient->request('POST', $url, [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'json' => $payload,
            'timeout' => 20,
        ]);

        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        $data = json_decode($body, true);

        if (!is_array($data)) {
            throw new \RuntimeException('Réponse de traduction invalide.');
        }
        if ($status >= 400) {
            $message = $data['error'] ?? 'Erreur API LibreTranslate.';
            throw new \RuntimeException((string) $message);
        }

        $translated = (string) ($data['translatedText'] ?? '');
        if ($translated === '') {
            throw new \RuntimeException('La traduction est vide.');
        }

        return $translated;
    }
}
