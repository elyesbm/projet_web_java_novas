<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PublicationTranslationService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private string $apiUrl,
        private string $apiKey = ''
    ) {
    }

    /**
     * @return array{title: string, content: string}
     */
    public function translatePublication(string $title, string $content, string $targetLanguage): array
    {
        return [
            'title' => $this->translateText($title, $targetLanguage),
            'content' => $this->translateText($content, $targetLanguage),
        ];
    }

    private function translateText(string $text, string $targetLanguage): string
    {
        if (trim($text) === '') {
            return $text;
        }

        $apiUrl = trim($this->apiUrl);
        if ($apiUrl === '') {
            throw new \RuntimeException('Translation API URL is not configured.');
        }

        $payload = [
            'q' => $text,
            'source' => 'auto',
            'target' => $targetLanguage,
            'format' => 'text',
        ];

        $apiKey = trim($this->apiKey);
        if ($apiKey !== '') {
            $payload['api_key'] = $apiKey;
        }

        try {
            $response = $this->httpClient->request('POST', $apiUrl, [
                'json' => $payload,
                'headers' => ['Accept' => 'application/json'],
                'timeout' => 20,
            ]);
            $data = $response->toArray(false);
        } catch (TransportExceptionInterface|\Throwable $e) {
            throw new \RuntimeException('Translation API request failed.', 0, $e);
        }

        $translated = $data['translatedText'] ?? null;
        if (!is_string($translated) || trim($translated) === '') {
            throw new \RuntimeException('Invalid translation response.');
        }

        return $translated;
    }
}

