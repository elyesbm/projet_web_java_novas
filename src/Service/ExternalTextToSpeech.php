<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ExternalTextToSpeech
{
    public function __construct(
        private HttpClientInterface $httpClient,
        #[Autowire('%env(default:tts_provider:TTS_PROVIDER)%')]
        private string $provider,
        #[Autowire('%env(default::GOOGLE_TTS_API_KEY)%')]
        private ?string $googleApiKey,
        #[Autowire('%env(default::VOICERSS_API_KEY)%')]
        private ?string $voiceRssApiKey,
        #[Autowire('%env(default:voicerss_verify_ssl:VOICERSS_VERIFY_SSL)%')]
        private string $voiceRssVerifySsl,
        #[Autowire('%env(default:voicerss_cafile:VOICERSS_CAFILE)%')]
        private ?string $voiceRssCafile,
    ) {
    }

    public function getProviderKey(): string
    {
        return strtolower(trim($this->provider ?: 'voicerss'));
    }

    public function synthesizeMp3(string $text, string $lang = 'fr'): string
    {
        $text = $this->normalizeText($text);
        if ($text === '') {
            throw new \RuntimeException('Texte vide.');
        }

        $provider = $this->getProviderKey();

        return match ($provider) {
            'google', 'gcp', 'google-cloud' => $this->synthesizeWithGoogle($text, $lang),
            'voicerss', 'voice-rss', 'vr' => $this->synthesizeWithVoiceRss($text, $lang),
            default => throw new \RuntimeException('TTS_PROVIDER invalide. Utilisez "voicerss" ou "google".'),
        };
    }

    private function synthesizeWithGoogle(string $text, string $lang): string
    {
        $apiKey = trim((string) ($this->googleApiKey ?: $this->readEnv('GOOGLE_TTS_API_KEY')));
        if ($apiKey === '') {
            throw new \RuntimeException('GOOGLE_TTS_API_KEY manquant. Ajoutez-le dans .env.local.');
        }

        $len = function_exists('mb_strlen') ? mb_strlen($text) : strlen($text);
        if ($len > 800) {
            throw new \RuntimeException('Texte trop long (max 800 caractères).');
        }

        $languageCode = $this->mapLangToGoogleLanguageCode($lang);

        try {
            $response = $this->httpClient->request('POST', 'https://texttospeech.googleapis.com/v1/text:synthesize', [
                'query' => [
                    'key' => $apiKey,
                ],
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'json' => [
                    'input' => [
                        'text' => $text,
                    ],
                    'voice' => [
                        'languageCode' => $languageCode,
                        'ssmlGender' => 'NEUTRAL',
                    ],
                    'audioConfig' => [
                        'audioEncoding' => 'MP3',
                    ],
                ],
                'timeout' => 20,
            ]);

            $status = $response->getStatusCode();
            $body = $response->getContent(false);
            $data = json_decode($body, true);
        } catch (TransportExceptionInterface) {
            throw new \RuntimeException('Erreur réseau/SSL lors de la connexion au service Google TTS.');
        }

        if (!is_array($data)) {
            throw new \RuntimeException('Réponse TTS invalide.');
        }
        if ($status >= 400) {
            $message = $data['error']['message'] ?? 'Erreur API Google Text-to-Speech.';
            throw new \RuntimeException((string) $message);
        }

        $audioContent = (string) ($data['audioContent'] ?? '');
        $audio = base64_decode($audioContent, true);
        if ($audio === false || $audio === '') {
            throw new \RuntimeException('Audio TTS vide.');
        }

        return $audio;
    }

    private function synthesizeWithVoiceRss(string $text, string $lang): string
    {
        $apiKey = trim((string) ($this->voiceRssApiKey ?: $this->readEnv('VOICERSS_API_KEY')));
        if ($apiKey === '') {
            throw new \RuntimeException('VOICERSS_API_KEY manquant. Ajoutez-le dans .env.local.');
        }

        $len = function_exists('mb_strlen') ? mb_strlen($text) : strlen($text);
        if ($len > 800) {
            throw new \RuntimeException('Texte trop long (max 800 caractères).');
        }

        $hl = $this->mapLangToVoiceRssHl($lang);
        $verifySsl = $this->toBool($this->voiceRssVerifySsl, true);
        $cafile = trim((string) ($this->voiceRssCafile ?? ''));

        $options = [
            'query' => [
                'key' => $apiKey,
                'src' => $text,
                'hl' => $hl,
                'c' => 'mp3',
                'f' => '44khz_16bit_stereo',
            ],
            'timeout' => 20,
            'verify_peer' => $verifySsl,
            'verify_host' => $verifySsl,
        ];
        if ($cafile !== '') {
            $options['cafile'] = $cafile;
        }

        try {
            $response = $this->httpClient->request('GET', 'https://api.voicerss.org/', $options);
            $status = $response->getStatusCode();
            $body = $response->getContent(false);
        } catch (TransportExceptionInterface) {
            throw new \RuntimeException('Erreur réseau/SSL lors de la connexion au service VoiceRSS.');
        }

        if ($status >= 400) {
            throw new \RuntimeException('Erreur API VoiceRSS.');
        }

        $trimmed = ltrim($body);
        if (str_starts_with($trimmed, 'ERROR')) {
            throw new \RuntimeException(trim($trimmed));
        }

        if ($body === '') {
            throw new \RuntimeException('Audio TTS vide.');
        }

        return $body;
    }

    private function toBool(string $value, bool $default): bool
    {
        $trimmed = strtolower(trim($value));
        if ($trimmed === '') {
            return $default;
        }
        $parsed = filter_var($trimmed, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE);

        return $parsed ?? $default;
    }

    private function normalizeText(string $text): string
    {
        $text = trim($text);
        $text = preg_replace('/\\s+/u', ' ', $text);

        return trim((string) $text);
    }

    private function readEnv(string $name): string
    {
        $value = $_ENV[$name] ?? $_SERVER[$name] ?? getenv($name);
        if (!is_string($value)) {
            return '';
        }

        return trim($value);
    }

    private function mapLangToGoogleLanguageCode(string $lang): string
    {
        $lang = strtolower(trim($lang));

        return match ($lang) {
            'fr' => 'fr-FR',
            'en' => 'en-US',
            'ar' => 'ar-XA',
            'es' => 'es-ES',
            'de' => 'de-DE',
            default => 'fr-FR',
        };
    }

    private function mapLangToVoiceRssHl(string $lang): string
    {
        $lang = strtolower(trim($lang));

        return match ($lang) {
            'fr' => 'fr-fr',
            'en' => 'en-us',
            'ar' => 'ar-sa',
            'es' => 'es-es',
            'de' => 'de-de',
            default => 'fr-fr',
        };
    }
}
