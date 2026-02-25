<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Service pour la génération d'images via l'API Google Imagen (Gemini).
 * Modèle: imagen-4.0-generate-001
 */
class ImagenService
{
    private const API_URL = 'https://generativelanguage.googleapis.com/v1beta/models/imagen-4.0-generate-001:predict';

    public function __construct(
        private HttpClientInterface $httpClient,
        private ?string $apiKey = null
    ) {
    }

    /**
     * Génère des images à partir d'un prompt texte.
     *
     * @param string $prompt        Description de l'image à générer
     * @param int    $sampleCount   Nombre d'images (1-4)
     * @return array<array{base64: string}> Tableau d'images en base64
     * @throws \RuntimeException En cas d'erreur API ou de clé manquante
     */
    public function generateImages(string $prompt, int $sampleCount = 1): array
    {
        if (empty(trim($this->apiKey ?? ''))) {
            throw new \RuntimeException('GEMINI_API_KEY n\'est pas configurée.');
        }

        $promptTrimmed = trim($prompt);
        $payload = [
            'instances' => [
                ['prompt' => $promptTrimmed],
            ],
            'parameters' => [
                'sampleCount' => min(max($sampleCount, 1), 4),
            ],
        ];

        $url = self::API_URL . '?key=' . urlencode($this->apiKey);
        try {
            $response = $this->httpClient->request('POST', $url, [
                'headers' => ['Content-Type' => 'application/json'],
                'json' => $payload,
            ]);

            $data = $response->toArray();
        } catch (\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e) {
            $msg = $e->getMessage();
            try {
                $body = $e->getResponse()->toArray(false);
                $msg = $body['error']['message'] ?? $body['error']['status'] ?? $msg;
            } catch (\Throwable) {
                // ignorer
            }
            throw new \RuntimeException('API Imagen: ' . $msg . ' (utilisez des prompts en anglais)', 0, $e);
        } catch (TransportExceptionInterface $e) {
            throw new \RuntimeException('Erreur de connexion à l\'API Imagen: ' . $e->getMessage(), 0, $e);
        } catch (\Exception $e) {
            throw new \RuntimeException('Erreur API Imagen: ' . $e->getMessage(), 0, $e);
        }

        return $this->extractImagesFromResponse($data);
    }

    /**
     * Extrait les images base64 de la réponse API.
     * Formats possibles: bytesBase64Encoded direct ou StructValue.Fields["bytesBase64Encoded"].stringValue
     */
    private function extractImagesFromResponse(array $data): array
    {
        $images = [];
        $predictions = $data['predictions'] ?? [];

        foreach ($predictions as $prediction) {
            $bytes = $prediction['bytesBase64Encoded']
                ?? $prediction['bytes_base64_encoded']
                ?? $prediction['structValue']['fields']['bytesBase64Encoded']['stringValue']
                ?? $prediction['structValue']['fields']['bytesBase64Encoded']['bytesValue']
                ?? null;
            if ($bytes) {
                $images[] = ['base64' => $bytes];
            }
        }

        return $images;
    }
}
