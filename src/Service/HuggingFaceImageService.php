<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Génération d'images à partir de texte via l'API Hugging Face Inference Providers (text-to-image).
 * Modèle par défaut : ByteDance/SDXL-Lightning (Replicate).
 * - Si HF_IMAGE_SCRIPT est configuré : utilise le script Python (InferenceClient), plus fiable.
 * - Sinon : appel HTTP vers router.huggingface.co (ou HF_IMAGE_BASE_URL).
 */
class HuggingFaceImageService
{
    private const DEFAULT_BASE_URL = 'https://router.huggingface.co';
    private const DEFAULT_MODEL = 'ByteDance/SDXL-Lightning';

    public function __construct(
        private HttpClientInterface $httpClient,
        private ?string $hfToken = null,
        private ?string $model = null,
        private ?string $baseUrl = null,
        private ?string $scriptPath = null,
        private string $projectDir = '',
        private ?string $provider = null
    ) {
    }

    /**
     * Génère des images à partir d'un prompt texte.
     *
     * @param string $prompt      Description de l'image (prompt)
     * @param int    $sampleCount Nombre d'images (1 par défaut ; l'API HF en renvoie souvent une seule par appel)
     * @return array<array{base64: string}>
     */
    public function generateImages(string $prompt, int $sampleCount = 1): array
    {
        $token = trim($this->hfToken ?? '');
        if ($token === '') {
            throw new \RuntimeException(
                'HF_TOKEN n\'est pas configuré. Créez un token avec la permission "Inference Providers" sur huggingface.co/settings/tokens'
            );
        }

        $script = $this->resolveScriptPath();
        if ($script !== null) {
            try {
                return $this->runScript($script, trim($prompt));
            } catch (\Throwable $e) {
                // Fallback HTTP si le script échoue (ex. Python non installé)
                try {
                    return $this->callHttpApi(trim($prompt));
                } catch (\Throwable) {
                    throw new \RuntimeException('Génération d\'image indisponible. ' . $e->getMessage(), 0, $e);
                }
            }
        }

        try {
            return $this->callHttpApi(trim($prompt));
        } catch (\Throwable $e) {
            $status = null;
            if ($e instanceof \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface) {
                $status = $e->getResponse()->getStatusCode();
            }
            if ($status === 410 || $status === 404) {
                throw new \RuntimeException(
                    'L\'API HTTP Hugging Face ne supporte plus ce type d\'appel. Configurez HF_IMAGE_SCRIPT=scripts/hf_image.py (voir docs/HF_IMAGE_ETAPES.md).',
                    0,
                    $e
                );
            }
            throw $e;
        }
    }

    private function resolveScriptPath(): ?string
    {
        $raw = trim($this->scriptPath ?? '');
        if ($raw === '') {
            return null;
        }
        $path = $raw;
        if ($this->projectDir !== '' && !str_starts_with($path, '/') && !preg_match('#^[A-Za-z]:\\\\#', $path)) {
            $path = rtrim($this->projectDir, '/\\') . \DIRECTORY_SEPARATOR . ltrim($path, '/\\');
        }
        return is_file($path) ? $path : null;
    }

    /**
     * @return array<array{base64: string}>
     */
    private function runScript(string $scriptPath, string $prompt): array
    {
        $provider = trim($this->provider ?? '');
        if ($provider === '') {
            $provider = 'replicate';
        }
        $env = array_merge(getenv(), [
            'HF_TOKEN' => $this->hfToken ?? '',
            'HF_IMAGE_MODEL' => trim($this->model ?? '') !== '' ? trim($this->model) : self::DEFAULT_MODEL,
            'HF_IMAGE_PROVIDER' => $provider,
        ]);
        $proc = proc_open(
            [PHP_OS_FAMILY === 'Windows' ? 'python' : 'python3', $scriptPath],
            [0 => ['pipe', 'r'], 1 => ['pipe', 'w'], 2 => ['pipe', 'w']],
            $pipes,
            null,
            $env,
            ['bypass_shell' => true]
        );
        if (!\is_resource($proc)) {
            throw new \RuntimeException('Impossible de lancer le script HF (hf_image.py).');
        }
        fwrite($pipes[0], $prompt);
        fclose($pipes[0]);
        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        $code = proc_close($proc);
        if ($code !== 0) {
            throw new \RuntimeException('Script HF image: ' . ($stderr ?: "exit $code"));
        }
        $stdout = trim($stdout);
        if ($stdout === '') {
            throw new \RuntimeException('Script HF image: sortie vide.');
        }
        return [['base64' => $stdout]];
    }

    /**
     * @return array<array{base64: string}>
     */
    private function callHttpApi(string $prompt): array
    {
        $modelId = trim($this->model ?? '') !== '' ? trim($this->model) : self::DEFAULT_MODEL;
        $base = trim($this->baseUrl ?? '') !== '' ? rtrim($this->baseUrl, '/') : self::DEFAULT_BASE_URL;
        $url = $base . '/models/' . $modelId;

        $payload = [
            'inputs' => $prompt,
            'parameters' => [
                'num_inference_steps' => 4,
            ],
        ];

        $response = $this->httpClient->request('POST', $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . trim($this->hfToken ?? ''),
                'Content-Type' => 'application/json',
            ],
            'json' => $payload,
            'timeout' => 120,
        ]);

        $status = $response->getStatusCode();
        $body = $response->getContent(false);

        if ($status === 503) {
            $decoded = json_decode($body, true);
            $msg = $decoded['error'] ?? $decoded['estimated_time'] ?? $body;
            throw new \RuntimeException(
                'Modèle en cours de chargement. Réessayez dans quelques secondes. ' . (is_string($msg) ? $msg : json_encode($msg))
            );
        }

        if ($status < 200 || $status >= 300) {
            $decoded = json_decode($body, true);
            $msg = is_array($decoded) ? ($decoded['error'] ?? $decoded['message'] ?? json_encode($decoded)) : $body;
            throw new \RuntimeException('API Hugging Face: HTTP ' . $status . ' - ' . $msg);
        }

        if ($body === '') {
            throw new \RuntimeException('API Hugging Face: réponse vide.');
        }

        return [['base64' => base64_encode($body)]];
    }
}
