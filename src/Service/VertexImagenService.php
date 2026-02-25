<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Génération d'images via l'API Vertex AI (Google Cloud) – Imagen.
 * Modèles supportés : imagen-3.0-fast-generate-001, imagen-4.0-fast-generate-001, etc.
 * Authentification : clé API (x-goog-api-key) ou Application Default Credentials.
 */
class VertexImagenService
{
    private const MODEL = 'imagen-3.0-fast-generate-001';

    public function __construct(
        private HttpClientInterface $httpClient,
        private string $projectId,
        private string $location,
        private ?string $apiKey = null
    ) {
    }

    /**
     * Génère des images à partir d'un prompt texte.
     *
     * @param string $prompt       Description de l'image (FR ou EN ; langue auto-détectée si "auto")
     * @param int    $sampleCount  Nombre d'images (1–4)
     * @return array<array{base64: string}> Tableau d'images en base64
     * @throws \RuntimeException En cas d'erreur API ou de configuration manquante
     */
    public function generateImages(string $prompt, int $sampleCount = 1): array
    {
        $promptTrimmed = trim($prompt);
        if ($promptTrimmed === '') {
            throw new \RuntimeException('Le prompt ne peut pas être vide.');
        }
        if (empty(trim($this->projectId)) || empty(trim($this->location))) {
            throw new \RuntimeException('VERTEX_AI_PROJECT_ID et VERTEX_AI_LOCATION doivent être configurés.');
        }
        if (empty(trim($this->apiKey ?? ''))) {
            throw new \RuntimeException('VERTEX_AI_API_KEY n\'est pas configurée. Créez une clé API dans Google Cloud (Identifiants) et restreignez-la à Vertex AI API.');
        }

        $url = sprintf(
            'https://%s-aiplatform.googleapis.com/v1/projects/%s/locations/%s/publishers/google/models/%s:predict',
            $this->location,
            $this->projectId,
            $this->location,
            self::MODEL
        );

        $payload = [
            'instances' => [
                ['prompt' => $promptTrimmed],
            ],
            'parameters' => [
                'sampleCount' => min(max($sampleCount, 1), 4),
                'languageCode' => 'auto', // FR ou EN auto-détecté
            ],
        ];

        $headers = ['Content-Type' => 'application/json'];
        if (!empty(trim($this->apiKey ?? ''))) {
            $headers['x-goog-api-key'] = $this->apiKey;
        }

        try {
            $response = $this->httpClient->request('POST', $url, [
                'headers' => $headers,
                'json' => $payload,
                'timeout' => 90,
            ]);

            $data = $response->toArray();
        } catch (\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e) {
            $msg = $this->extractErrorMessage($e);
            throw new \RuntimeException('API Vertex AI (Imagen): ' . $msg, 0, $e);
        } catch (TransportExceptionInterface $e) {
            throw new \RuntimeException('Erreur de connexion à Vertex AI: ' . $e->getMessage(), 0, $e);
        } catch (\Exception $e) {
            throw new \RuntimeException('Erreur Vertex AI Imagen: ' . $e->getMessage(), 0, $e);
        }

        return $this->extractImagesFromResponse($data);
    }

    private function extractErrorMessage(\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e): string
    {
        try {
            $body = $e->getResponse()->toArray(false);
            return $body['error']['message'] ?? $body['error']['status'] ?? $e->getMessage();
        } catch (\Throwable) {
            return $e->getMessage();
        }
    }

    /**
     * Extrait les images base64 de la réponse Vertex AI.
     */
    private function extractImagesFromResponse(array $data): array
    {
        $images = [];
        $predictions = $data['predictions'] ?? [];

        foreach ($predictions as $prediction) {
            $bytes = $prediction['bytesBase64Encoded']
                ?? $prediction['bytes_base64_encoded']
                ?? null;
            if ($bytes) {
                $images[] = ['base64' => $bytes];
            }
        }

        return $images;
    }
}
