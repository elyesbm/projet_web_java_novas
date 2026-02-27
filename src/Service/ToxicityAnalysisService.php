<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Analyse de toxicité via l'API Hugging Face (unitary/toxic-bert).
 * - Si HF_TOXICITY_SCRIPT est défini : appelle le script Python (client officiel huggingface_hub).
 * - Sinon : appel HTTP vers HF_INFERENCE_URL (ou URL par défaut).
 */
class ToxicityAnalysisService
{
    private const DEFAULT_API_URL = 'https://router.huggingface.co/models/unitary/toxic-bert';
    private const TOXICITY_THRESHOLD = 0.5;
    private const TOXIC_LABELS = ['toxic', 'severe_toxic', 'threat', 'insult', 'obscene', 'identity_hate'];

    public function __construct(
        private HttpClientInterface $httpClient,
        private ?string $hfToken = null,
        private ?string $inferenceUrl = null,
        private ?string $scriptPath = null,
        private string $projectDir = ''
    ) {
    }

    /**
     * Retourne true si le texte est considéré comme toxique.
     * Si HF_TOKEN est vide : retourne false (désactivé).
     */
    public function isToxic(string $text): bool
    {
        $trimmed = trim($text);
        if ($trimmed === '') {
            return false;
        }
        if (empty(trim($this->hfToken ?? '')) && $this->resolveScriptPath() === null) {
            return false;
        }

        try {
            $scores = $this->analyze($trimmed);
            return $this->isToxicFromScores($scores);
        } catch (\Throwable $e) {
            $msg = $e->getMessage();
            throw new \RuntimeException(
                'Vérification de toxicité indisponible. ' . ($msg ?: 'Réessayez plus tard.'),
                0,
                $e
            );
        }
    }

    /** Source utilisée (URL HTTP ou script) pour debug / commande de test. */
    public function getApiUrl(): string
    {
        if ($this->resolveScriptPath() !== null) {
            return 'script: ' . trim($this->scriptPath ?? '');
        }
        return $this->resolveApiUrl();
    }

    /**
     * Retourne les scores de toxicité (pour debug / affichage).
     *
     * @return array<array{label: string, score: float}>
     */
    public function getToxicityScores(string $text): array
    {
        $trimmed = trim($text);
        if ($trimmed === '' || (empty(trim($this->hfToken ?? '')) && $this->resolveScriptPath() === null)) {
            return [];
        }
        try {
            return $this->analyze($trimmed);
        } catch (\Throwable) {
            return [];
        }
    }

    /**
     * Script configuré → appel du script (API via SDK). Sinon → HTTP.
     *
     * @return array<array{label: string, score: float}>
     */
    private function analyze(string $text): array
    {
        $script = $this->resolveScriptPath();
        if ($script !== null) {
            try {
                return $this->runScript($script, $text);
            } catch (\Throwable $e) {
                if (empty(trim($this->hfToken ?? ''))) {
                    throw $e;
                }
                return $this->callApi($text);
            }
        }
        return $this->callApi($text);
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
     * @return array<array{label: string, score: float}>
     */
    private function runScript(string $scriptPath, string $text): array
    {
        $env = array_merge(getenv(), ['HF_TOKEN' => $this->hfToken ?? '']);
        $proc = proc_open(
            [PHP_OS_FAMILY === 'Windows' ? 'py' : 'python3', ...(PHP_OS_FAMILY === 'Windows' ? ['-3', $scriptPath] : [$scriptPath])],
            [0 => ['pipe', 'r'], 1 => ['pipe', 'w'], 2 => ['pipe', 'w']],
            $pipes,
            null,
            $env,
            ['bypass_shell' => true]
        );
        if (!\is_resource($proc)) {
            throw new \RuntimeException('Impossible de lancer le script HF.');
        }
        fwrite($pipes[0], $text);
        fclose($pipes[0]);
        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        $code = proc_close($proc);
        if ($code !== 0 && $stdout === '') {
            throw new \RuntimeException('Script HF: ' . ($stderr ?: "exit $code"));
        }
        $data = json_decode($stdout, true);
        if (!\is_array($data)) {
            throw new \RuntimeException('Script HF: sortie JSON invalide.');
        }
        if (isset($data['error'])) {
            throw new \RuntimeException('Script HF: ' . $data['error']);
        }
        $result = [];
        foreach ($data as $item) {
            if (isset($item['label'], $item['score'])) {
                $result[] = ['label' => (string) $item['label'], 'score' => (float) $item['score']];
            }
        }
        return $result;
    }

    private function resolveApiUrl(): string
    {
        $url = trim($this->inferenceUrl ?? '');
        return $url !== '' ? $url : self::DEFAULT_API_URL;
    }

    /**
     * Un seul appel HTTP vers l'URL configurée.
     *
     * @return array<array{label: string, score: float}>
     */
    private function callApi(string $text): array
    {
        $url = $this->resolveApiUrl();
        $response = $this->httpClient->request('POST', $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->hfToken,
                'Content-Type' => 'application/json',
            ],
            'json' => ['inputs' => $text],
            'timeout' => 20,
        ]);

        $status = $response->getStatusCode();
        $body = $response->getContent(false);

        if ($status === 401) {
            throw new \RuntimeException('Token Hugging Face invalide ou permissions manquantes.');
        }
        if ($status < 200 || $status >= 300) {
            throw new \RuntimeException('API Hugging Face: HTTP ' . $status . ' - ' . substr($body, 0, 150));
        }

        $data = json_decode($body, true);
        if (!\is_array($data) || isset($data['error'])) {
            return [];
        }

        // Format tableau [ { "label": "toxic", "score": 0.99 }, ... ]
        if (isset($data[0]) && \is_array($data[0])) {
            $result = [];
            foreach ($data as $item) {
                if (isset($item['label'], $item['score'])) {
                    $result[] = ['label' => (string) $item['label'], 'score' => (float) $item['score']];
                }
            }
            return $result;
        }
        // Format objet { "toxic": 0.99, ... }
        $result = [];
        foreach ($data as $label => $score) {
            if (\is_string($label) && \is_numeric($score)) {
                $result[] = ['label' => $label, 'score' => (float) $score];
            }
        }
        return $result;
    }

    private function isToxicFromScores(array $scores): bool
    {
        foreach ($scores as $item) {
            $label = strtolower((string) ($item['label'] ?? ''));
            $score = (float) ($item['score'] ?? 0);
            if ($score >= self::TOXICITY_THRESHOLD && \in_array($label, self::TOXIC_LABELS, true)) {
                return true;
            }
        }
        return false;
    }
}




