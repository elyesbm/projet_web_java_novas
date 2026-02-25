<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Génération d'images via l'API Replicate (FLUX Schnell).
 * Gratuit pour un nombre limité d'essais, puis payant à l'usage (~0,003 $/image).
 * Compatible avec les prompts en français et en anglais.
 */
class ReplicateImageService
{
    private const API_URL = 'https://api.replicate.com/v1/predictions';
    private const MODEL = 'black-forest-labs/flux-schnell';

    public function __construct(
        private HttpClientInterface $httpClient,
        private ?string $apiToken = null
    ) {
    }

    /**
     * Génère des images à partir d'un prompt texte.
     *
     * @param string $prompt       Description de l'image à générer (FR ou EN)
     * @param int    $sampleCount  Nombre d'images (1-4)
     * @return array<array{base64: string}> Tableau d'images en base64
     * @throws \RuntimeException En cas d'erreur API ou de token manquant
     */
    public function generateImages(string $prompt, int $sampleCount = 1): array
    {
        if (empty(trim($this->apiToken ?? ''))) {
            throw new \RuntimeException('REPLICATE_API_TOKEN n\'est pas configurée. Créez un token sur replicate.com/account/api-tokens');
        }

        $payload = [
            'version' => self::MODEL,
            'input' => [
                'prompt' => trim($prompt),
                'num_outputs' => min(max($sampleCount, 1), 4),
                'num_inference_steps' => 4,
                'output_format' => 'png',
            ],
        ];

        try {
            $response = $this->httpClient->request('POST', self::API_URL, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiToken,
                    'Content-Type' => 'application/json',
                    'Prefer' => 'wait=60',
                ],
                'json' => $payload,
                'timeout' => 90,
            ]);

            $data = $response->toArray();
        } catch (\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e) {
            $msg = $this->extractErrorMessage($e);
            throw new \RuntimeException('API Replicate: ' . $msg, 0, $e);
        } catch (TransportExceptionInterface $e) {
            throw new \RuntimeException('Erreur de connexion à l\'API Replicate: ' . $e->getMessage(), 0, $e);
        } catch (\Exception $e) {
            throw new \RuntimeException('Erreur API Replicate: ' . $e->getMessage(), 0, $e);
        }

        if (($data['status'] ?? '') !== 'succeeded') {
            $error = $data['error'] ?? $data['detail'] ?? 'La prédiction a échoué.';
            throw new \RuntimeException('API Replicate: ' . (is_string($error) ? $error : json_encode($error)));
        }

        return $this->fetchImagesFromOutput($data['output'] ?? []);
    }

    private function extractErrorMessage(\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e): string
    {
        try {
            $body = $e->getResponse()->toArray(false);
            return $body['detail'] ?? $body['message'] ?? $body['error'] ?? $e->getMessage();
        } catch (\Throwable) {
            return $e->getMessage();
        }
    }

    /**
     * Convertit la sortie Replicate (URL ou tableau d'URLs) en images base64.
     */
    private function fetchImagesFromOutput(mixed $output): array
    {
        $images = [];
        $urls = [];

        if (is_string($output)) {
            $urls = [$output];
        } elseif (is_array($output)) {
            foreach ($output as $item) {
                if (is_string($item) && str_starts_with($item, 'http')) {
                    $urls[] = $item;
                } elseif (is_array($item) && isset($item['url']) && is_string($item['url'])) {
                    $urls[] = $item['url'];
                }
            }
        }

        foreach ($urls as $url) {
            try {
                $opts = ['timeout' => 30];
                if ($this->apiToken && str_contains($url, 'replicate.delivery')) {
                    $opts['headers'] = ['Authorization' => 'Bearer ' . $this->apiToken];
                }
                $resp = $this->httpClient->request('GET', $url, $opts);
                $bytes = $resp->getContent();
                if ($bytes !== '') {
                    $images[] = ['base64' => base64_encode($bytes)];
                }
            } catch (\Throwable) {
                // ignorer les URLs invalides
            }
        }

        return $images;
    }
}
