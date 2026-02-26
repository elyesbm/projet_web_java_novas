<?php

namespace App\Service;

use App\Exception\AiApiException;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeminiClientService
{
    private const BLOCKED_VALUES = ['CHANGE_ME', 'your-api-key', 'xxx'];

    public function __construct(
        #[Autowire(service: 'ai.http_client')]
        private HttpClientInterface $httpClient,
        #[Autowire('%env(default::GEMINI_API_KEY)%')]
        private ?string $apiKey = null,
        #[Autowire('%env(default::GEMINI_MODEL)%')]
        private ?string $model = null,
        #[Autowire('%env(default::GEMINI_URL)%')]
        private ?string $url = null,
        #[Autowire('%kernel.debug%')]
        private bool $debug = false,
        private ?LoggerInterface $logger = null
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function generateJson(string $system, string $userPrompt): array
    {
        $apiKey = $this->resolveApiKey();
        if ($apiKey === null) {
            $this->logger?->error('Gemini API key missing or placeholder value detected', [
                'gemini_api_key' => $this->apiKey,
            ]);
            throw new AiApiException('GEMINI_API_KEY manquante ou invalide.', 500);
        }

        $endpoint = $this->resolveEndpoint();
        $prompt = "SYSTEM:\n" . trim($system) . "\n\nUSER:\n" . trim($userPrompt);

        try {
            $response = $this->httpClient->request('POST', $endpoint, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'x-goog-api-key' => $apiKey,
                ],
                'json' => [
                    'contents' => [
                        [
                            'role' => 'user',
                            'parts' => [
                                ['text' => $prompt],
                            ],
                        ],
                    ],
                ],
                'timeout' => 30,
            ]);
        } catch (\Throwable $e) {
            $this->logger?->error('Gemini request failed before response', [
                'endpoint' => $endpoint,
                'message' => $e->getMessage(),
            ]);
            throw new AiApiException('Echec de connexion a Gemini: ' . $e->getMessage(), 503, null, null, $e);
        }

        $status = $response->getStatusCode();
        $rawBody = $response->getContent(false);
        $payload = json_decode($rawBody, true);

        if ($this->debug) {
            $this->logger?->debug('Gemini raw response', [
                'endpoint' => $endpoint,
                'status' => $status,
                'response' => $rawBody,
            ]);
        }

        if ($status >= 400) {
            $message = $this->extractProviderMessage($payload, $status);
            throw new AiApiException($message, $status, is_array($payload) ? $payload : null, $rawBody);
        }

        $text = $this->extractGeneratedText($payload);
        $decoded = $this->decodeJsonSafely($text);

        return $decoded;
    }

    private function resolveApiKey(): ?string
    {
        $value = trim((string) $this->apiKey);
        if ($value === '' || in_array($value, self::BLOCKED_VALUES, true)) {
            return null;
        }

        return $value;
    }

    private function resolveEndpoint(): string
    {
        $model = trim((string) $this->model);
        if ($model === '') {
            $model = 'gemini-2.5-flash';
        }

        $url = trim((string) $this->url);
        if ($url === '') {
            $url = 'https://generativelanguage.googleapis.com/v1beta/models/%GEMINI_MODEL%:generateContent';
        }

        $url = str_replace('%GEMINI_MODEL%', $model, $url);
        return $url;
    }

    /**
     * @param mixed $payload
     */
    private function extractGeneratedText(mixed $payload): string
    {
        if (!is_array($payload)) {
            throw new AiApiException('Reponse Gemini invalide (JSON attendu).', 502, null);
        }

        $parts = $payload['candidates'][0]['content']['parts'] ?? null;
        if (!is_array($parts)) {
            throw new AiApiException('Reponse Gemini invalide (candidates absents).', 502, $payload);
        }

        $texts = [];
        foreach ($parts as $part) {
            if (is_array($part) && isset($part['text']) && is_string($part['text'])) {
                $texts[] = $part['text'];
            }
        }

        $combined = trim(implode("\n", $texts));
        if ($combined === '') {
            throw new AiApiException('Reponse Gemini vide.', 502, $payload);
        }

        return $combined;
    }

    /**
     * @return array<string, mixed>
     */
    private function decodeJsonSafely(string $text): array
    {
        $decoded = json_decode($text, true);
        if (is_array($decoded)) {
            return $decoded;
        }

        if (preg_match('/```(?:json)?\s*(\{.*\})\s*```/is', $text, $matches) === 1) {
            $decoded = json_decode($matches[1], true);
            if (is_array($decoded)) {
                return $decoded;
            }
        }

        if (preg_match('/\{.*\}/s', $text, $matches) === 1) {
            $decoded = json_decode($matches[0], true);
            if (is_array($decoded)) {
                return $decoded;
            }
        }

        throw new AiApiException('Impossible de parser le JSON retourne par Gemini.', 502, null, $text);
    }

    /**
     * @param mixed $payload
     */
    private function extractProviderMessage(mixed $payload, int $status): string
    {
        $message = null;
        if (is_array($payload)) {
            $message = $payload['error']['message'] ?? $payload['message'] ?? null;
        }

        $message = is_string($message) && trim($message) !== '' ? trim($message) : 'Service Gemini indisponible.';
        return sprintf('[HTTP %d] %s', $status, $message);
    }
}

