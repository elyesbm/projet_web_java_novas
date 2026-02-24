<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AiAtelierDescriptionGenerator
{
    public function __construct(
        private HttpClientInterface $httpClient,
        #[Autowire('%env(default:ai_provider:AI_PROVIDER)%')]
        private string $provider,
        #[Autowire('%env(AI_API_KEY)%')]
        private string $apiKey,
        #[Autowire('%env(default:ai_hf_model:AI_HF_MODEL)%')]
        private string $hfModel,
        #[Autowire('%env(default:ai_gemini_model:AI_GEMINI_MODEL)%')]
        private string $geminiModel,
    ) {
    }

    public function generate(string $title): string
    {
        $title = trim($title);
        if ($title === '') {
            throw new \InvalidArgumentException('Le titre est obligatoire.');
        }

        $provider = strtolower(trim($this->provider ?: 'huggingface'));
        $apiKey = trim($this->apiKey);
        if ($apiKey === '') {
            throw new \RuntimeException('AI_API_KEY manquant. Ajoutez-le dans .env.local.');
        }

        return match ($provider) {
            'huggingface', 'hf' => $this->generateWithHuggingFace($title, $apiKey),
            'gemini' => $this->generateWithGemini($title, $apiKey),
            default => throw new \RuntimeException('AI_PROVIDER invalide. Utilisez "huggingface" ou "gemini".'),
        };
    }

    private function generateWithHuggingFace(string $title, string $apiKey): string
    {
        $prompt = $this->buildPrompt($title);
        $model = $this->normalizeHfModel($this->hfModel);

        $response = $this->httpClient->request('POST', 'https://router.huggingface.co/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => [
                'model' => $model . ':hf-inference',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'Reponds uniquement par le paragraphe final en francais, sans raisonnement ni balises.',
                    ],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'temperature' => 0.5,
                'max_tokens' => 200,
                'stop' => ['</think>'],
            ],
            'timeout' => 30,
        ]);

        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        $data = json_decode($body, true);
        if (!is_array($data)) {
            throw new \RuntimeException('Reponse IA invalide.');
        }
        if ($status >= 400) {
            $message = $data['error']['message'] ?? ($data['error'] ?? 'Erreur API Hugging Face.');
            throw new \RuntimeException((string) $message);
        }

        $text = (string) ($data['choices'][0]['message']['content'] ?? '');
        if ($text === '') {
            throw new \RuntimeException('La reponse IA est vide.');
        }

        return $this->cleanText($text);
    }

    private function generateWithGemini(string $title, string $apiKey): string
    {
        $prompt = $this->buildPrompt($title);
        $model = $this->normalizeGeminiModel($this->geminiModel);
        $url = sprintf(
            'https://generativelanguage.googleapis.com/v1beta/models/%s:generateContent?key=%s',
            urlencode($model),
            urlencode($apiKey)
        );

        $response = $this->httpClient->request('POST', $url, [
            'json' => [
                'contents' => [
                    [
                        'role' => 'user',
                        'parts' => [
                            ['text' => $prompt],
                        ],
                    ],
                ],
                'generationConfig' => [
                    'temperature' => 0.6,
                    'maxOutputTokens' => 220,
                ],
            ],
            'timeout' => 20,
        ]);

        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        $data = json_decode($body, true);
        if (!is_array($data)) {
            throw new \RuntimeException('Reponse IA invalide.');
        }
        if ($status >= 400) {
            $message = $data['error']['message'] ?? 'Erreur API Gemini.';
            throw new \RuntimeException($message);
        }

        $text = (string) ($data['candidates'][0]['content']['parts'][0]['text'] ?? '');
        if ($text === '') {
            throw new \RuntimeException('La reponse IA est vide.');
        }

        return $this->cleanText($text);
    }

    private function buildPrompt(string $title): string
    {
        return 'Tu es un redacteur marketing. Redige une description professionnelle, claire et engageante '
            . 'pour un atelier intitule: "' . $title . '". '
            . 'Ecris un seul paragraphe coherent de 2 a 3 phrases, en francais, sans emojis, sans puces. '
            . 'Utilise un connecteur logique entre les phrases (ex: "Ensuite", "Enfin"). '
            . 'Evite toute repetition. Vise 150 a 200 caracteres (espaces compris). '
            . 'Termine par un point et par une invitation a participer.';
    }

    private function cleanText(string $text): string
    {
        $text = trim($text);
        $text = $this->stripThinking($text);
        $text = trim($text, "\" \n\r\t");

        if ($text === '') {
            throw new \RuntimeException('La reponse IA est vide.');
        }

        return $this->limitLength($text, 255);
    }

    private function stripThinking(string $text): string
    {
        $text = preg_replace('/<think>.*?<\/think>/si', '', $text) ?? $text;
        $text = preg_replace('/<think>.*$/si', '', $text) ?? $text;
        $text = trim($text);
        $text = preg_replace("/^(okay|ok|sure|certainly|here(?:’|')?s|here is)\\b[:\\s,-]*/i", '', $text) ?? $text;

        return trim($text);
    }

    private function limitLength(string $text, int $max): string
    {
        $length = function_exists('mb_strlen') ? mb_strlen($text) : strlen($text);
        if ($length <= $max) {
            return $text;
        }

        $slice = function_exists('mb_substr') ? mb_substr($text, 0, $max) : substr($text, 0, $max);
        $lastPunct = max(
            strrpos($slice, '.'),
            strrpos($slice, '!'),
            strrpos($slice, '?'),
            strrpos($slice, '…')
        );
        if ($lastPunct !== false && $lastPunct > 60) {
            return rtrim(substr($slice, 0, $lastPunct + 1), " \n\r\t\0\x0B");
        }

        $lastSpace = strrpos($slice, ' ');
        if ($lastSpace !== false && $lastSpace > 60) {
            $slice = substr($slice, 0, $lastSpace);
        }

        return rtrim($slice, " \n\r\t\0\x0B") . '.';
    }

    private function normalizeHfModel(string $model): string
    {
        $model = trim($model);
        return $model !== '' ? $model : 'katanemo/Arch-Router-1.5B';
    }

    private function normalizeGeminiModel(string $model): string
    {
        $model = trim($model);
        if ($model === '') {
            return 'gemini-1.5-flash-latest';
        }
        if (str_starts_with($model, 'models/')) {
            $model = substr($model, 7);
        }
        return $model;
    }
}
