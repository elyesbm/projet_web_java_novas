<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Sentiment analysis using Hugging Face model.
 * - If HF_SENTIMENT_SCRIPT is configured, use Python helper script.
 * - Otherwise, call HTTP inference endpoint.
 */
class SentimentAnalysisService
{
    private const DEFAULT_API_URL = 'https://router.huggingface.co/hf-inference/models/nlptown/bert-base-multilingual-uncased-sentiment';

    public function __construct(
        private HttpClientInterface $httpClient,
        private ?string $hfToken = null,
        private ?string $inferenceUrl = null,
        private ?string $scriptPath = null,
        private string $projectDir = '',
    ) {
    }

    /**
     * Returns a score between 1 and 5 stars, or null if unavailable.
     */
    public function analyze(string $text): ?int
    {
        $trimmed = trim($text);
        if ($trimmed === '') {
            return null;
        }

        if (empty(trim($this->hfToken ?? '')) && $this->resolveScriptPath() === null) {
            return null;
        }

        try {
            $scores = $this->analyzeInternal($trimmed);
            return $this->scoresToStars($scores);
        } catch (\Throwable) {
            return null;
        }
    }

    /**
     * @return array<array{label: string, score: float}>
     */
    public function getRawScores(string $text): array
    {
        $trimmed = trim($text);
        if ($trimmed === '' || (empty(trim($this->hfToken ?? '')) && $this->resolveScriptPath() === null)) {
            return [];
        }

        try {
            return $this->analyzeInternal($trimmed);
        } catch (\Throwable) {
            return [];
        }
    }

    /**
     * @return array<array{label: string, score: float}>
     */
    private function analyzeInternal(string $text): array
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
            [PHP_OS_FAMILY === 'Windows' ? 'python' : 'python3', $scriptPath],
            [0 => ['pipe', 'r'], 1 => ['pipe', 'w'], 2 => ['pipe', 'w']],
            $pipes,
            null,
            $env,
            ['bypass_shell' => true]
        );

        if (!\is_resource($proc)) {
            throw new \RuntimeException('Unable to start sentiment helper script.');
        }

        fwrite($pipes[0], $text);
        fclose($pipes[0]);

        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        fclose($pipes[1]);
        fclose($pipes[2]);

        $code = proc_close($proc);
        if ($code !== 0 && $stdout === '') {
            throw new \RuntimeException('Sentiment script error: ' . ($stderr ?: "exit $code"));
        }

        $data = json_decode($stdout, true);
        if (!\is_array($data)) {
            throw new \RuntimeException('Sentiment script returned invalid JSON.');
        }
        if (isset($data['error'])) {
            throw new \RuntimeException('Sentiment script error: ' . $data['error']);
        }

        return $this->normalizeScores($data);
    }

    private function resolveApiUrl(): string
    {
        $url = trim($this->inferenceUrl ?? '');
        if ($url === '') {
            return self::DEFAULT_API_URL;
        }

        // Backward compatibility for old/deprecated Hugging Face endpoints.
        $url = preg_replace(
            '#^https://api-inference\.huggingface\.co/models/(.+)$#i',
            'https://router.huggingface.co/hf-inference/models/$1',
            $url
        ) ?? $url;
        $url = preg_replace(
            '#^https://router\.huggingface\.co/models/(.+)$#i',
            'https://router.huggingface.co/hf-inference/models/$1',
            $url
        ) ?? $url;

        return $url;
    }

    /**
     * @return array<array{label: string, score: float}>
     */
    private function callApi(string $text): array
    {
        $url = $this->resolveApiUrl();
        $token = trim($this->hfToken ?? '');
        if ($token === '') {
            throw new \RuntimeException('HF_TOKEN is missing for sentiment analysis.');
        }

        $response = $this->httpClient->request('POST', $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'inputs' => $text,
            ],
        ]);

        $status = $response->getStatusCode();
        $body = $response->getContent(false);

        if ($status < 200 || $status >= 300) {
            $decoded = json_decode($body, true);
            $msg = is_array($decoded) ? ($decoded['error'] ?? $decoded['message'] ?? json_encode($decoded)) : $body;
            throw new \RuntimeException('Hugging Face sentiment API: HTTP ' . $status . ' - ' . $msg);
        }

        $data = json_decode($body, true);
        if (!\is_array($data)) {
            throw new \RuntimeException('Hugging Face sentiment API returned invalid JSON.');
        }

        return $this->normalizeScores($data);
    }

    /**
     * @param mixed $data
     * @return array<array{label: string, score: float}>
     */
    private function normalizeScores(mixed $data): array
    {
        if (!\is_array($data)) {
            return [];
        }

        // HF often returns nested arrays: [[{label, score}, ...]]
        if (isset($data[0]) && \is_array($data[0]) && isset($data[0][0]) && \is_array($data[0][0])) {
            $data = $data[0];
        }

        $result = [];
        foreach ($data as $item) {
            if (\is_array($item) && isset($item['label'], $item['score'])) {
                $result[] = [
                    'label' => (string) $item['label'],
                    'score' => (float) $item['score'],
                ];
            }
        }

        return $result;
    }

    /**
     * @param array<array{label: string, score: float}> $scores
     */
    private function scoresToStars(array $scores): ?int
    {
        $bestLabel = null;
        $bestScore = null;

        foreach ($scores as $item) {
            $score = $item['score'] ?? null;
            if (!\is_float($score) && !\is_int($score)) {
                continue;
            }
            if ($bestScore === null || $score > $bestScore) {
                $bestScore = (float) $score;
                $bestLabel = (string) ($item['label'] ?? '');
            }
        }

        if ($bestLabel === null) {
            return null;
        }

        $label = strtolower($bestLabel);

        if (preg_match('/([1-5])\\s*star/', $label, $m)) {
            return (int) $m[1];
        }

        if (preg_match('/\\b([1-5])\\b/', $label, $m)) {
            return (int) $m[1];
        }

        return null;
    }

}
