<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Skill;
use App\Entity\User;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * AI tutor to suggest skills based on profile and goals.
 * Supports Google Gemini and xAI Grok.
 */
class SkillAITutorService
{
    private const GEMINI_API_BASE_URL = 'https://generativelanguage.googleapis.com/v1beta';
    private const XAI_API_BASE_URL = 'https://api.x.ai/v1';
    private const OPENROUTER_API_BASE_URL = 'https://openrouter.ai/api/v1';

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
        private readonly ?string $geminiApiKey = null,
        private readonly ?string $xaiApiKey = null,
        private readonly ?string $openRouterApiKey = null,
    ) {
    }

    /**
     * @param array<int, array{role: string, content: string}> $messages
     * @param Skill[] $availableSkills
     */
    public function chat(string $userMessage, array $messages, array $availableSkills, ?User $user = null): string
    {
        if (!$this->isConfigured()) {
            return "Le tuteur IA n'est pas configure (cle API manquante).";
        }

        $systemPrompt = $this->buildSystemPrompt($availableSkills, $user);
        $provider = $this->getAiProvider();

        if ($provider === 'openrouter') {
            return $this->chatWithOpenRouter($systemPrompt, $userMessage, $messages);
        }

        if ($provider === 'xai') {
            return $this->chatWithXai($systemPrompt, $userMessage, $messages);
        }

        $geminiReply = $this->chatWithGemini($systemPrompt, $userMessage, $messages);
        if ($this->isGeminiQuotaMessage($geminiReply) && !empty($this->getOpenRouterApiKey())) {
            $this->logger->warning('Gemini quota reached, fallback to OpenRouter.');
            return $this->chatWithOpenRouter($systemPrompt, $userMessage, $messages);
        }
        if ($this->isGeminiQuotaMessage($geminiReply) && !empty($this->getXaiApiKey())) {
            $this->logger->warning('Gemini quota reached, fallback to xAI.');
            return $this->chatWithXai($systemPrompt, $userMessage, $messages);
        }

        return $geminiReply;
    }

    /**
     * @param array<int, array{role: string, content: string}> $messages
     */
    private function chatWithGemini(string $systemPrompt, string $userMessage, array $messages): string
    {
        $apiKey = $this->getGeminiApiKey();
        if (empty($apiKey)) {
            return "Cle Gemini absente. Configurez GEMINI_API_KEY ou passez AI_PROVIDER=openrouter/xai.";
        }

        $conversationHistory = '';
        foreach ($messages as $message) {
            $conversationHistory .= ($message['role'] === 'user' ? 'Utilisateur: ' : 'Assistant: ') . $message['content'] . "\n\n";
        }

        $fullPrompt = $systemPrompt . "\n\n" . $conversationHistory . 'Utilisateur: ' . $userMessage;
        $requestBody = [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $fullPrompt],
                    ],
                ],
            ],
            'generationConfig' => [
                'maxOutputTokens' => 800,
                'temperature' => 0.7,
                'topP' => 0.95,
                'topK' => 40,
            ],
        ];

        try {
            foreach ($this->getCandidateGeminiModels() as $model) {
                $url = sprintf(
                    '%s/models/%s:generateContent?key=%s',
                    self::GEMINI_API_BASE_URL,
                    rawurlencode($model),
                    urlencode($apiKey)
                );

                $response = $this->httpClient->request('POST', $url, [
                    'headers' => ['Content-Type' => 'application/json'],
                    'json' => $requestBody,
                    'timeout' => 30,
                ]);

                $statusCode = $response->getStatusCode();
                if ($statusCode !== 200) {
                    $responseBody = $response->getContent(false);
                    $this->logger->error('Gemini API Error', [
                        'statusCode' => $statusCode,
                        'model' => $model,
                        'url' => $url,
                        'response' => $responseBody,
                    ]);

                    if ($statusCode === 404) {
                        continue;
                    }

                    if ($statusCode === 429) {
                        $retrySeconds = $this->extractRetryDelaySeconds($responseBody);
                        if (str_contains($responseBody, 'limit: 0')) {
                            return 'Quota Gemini indisponible pour ce projet (limit: 0). Activez la facturation/quotas dans Google AI Studio ou utilisez une autre cle API.';
                        }
                        if ($retrySeconds !== null) {
                            return sprintf('Limite Gemini atteinte (429). Reessayez dans %d secondes.', $retrySeconds);
                        }

                        return 'Limite Gemini atteinte (429). Reessayez dans une minute.';
                    }

                    return "Erreur API Gemini: Status $statusCode";
                }

                $data = $response->toArray(false);
                $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? '';
                if (is_string($text) && trim($text) !== '') {
                    return trim($text);
                }

                $this->logger->error('No content in Gemini response', ['data' => $data, 'model' => $model]);
                return "Le tuteur IA n'a pas pu generer une reponse valide.";
            }
        } catch (\Throwable $e) {
            $errorMessage = $e->getMessage();
            $this->logger->error('AI Tutor Gemini Error', [
                'message' => $errorMessage,
                'code' => $e->getCode(),
                'exception' => get_class($e),
            ]);

            if (str_contains($errorMessage, '401') || str_contains($errorMessage, '403')) {
                return 'Authentification Gemini echouee. Verifiez GEMINI_API_KEY.';
            }
            if (str_contains($errorMessage, '400')) {
                return 'Erreur 400 Gemini: format de requete invalide.';
            }
        }

        return 'Erreur API Gemini: aucun modele compatible trouve pour cette cle.';
    }

    /**
     * @param array<int, array{role: string, content: string}> $messages
     */
    private function chatWithXai(string $systemPrompt, string $userMessage, array $messages): string
    {
        $apiKey = $this->getXaiApiKey();
        if (empty($apiKey)) {
            return 'Cle xAI absente. Configurez XAI_API_KEY dans .env.local.';
        }

        $chatMessages = [
            ['role' => 'system', 'content' => $systemPrompt],
        ];

        foreach ($messages as $message) {
            $role = ($message['role'] ?? '') === 'assistant' ? 'assistant' : 'user';
            $content = is_string($message['content'] ?? null) ? trim((string) $message['content']) : '';
            if ($content !== '') {
                $chatMessages[] = ['role' => $role, 'content' => $content];
            }
        }
        $chatMessages[] = ['role' => 'user', 'content' => $userMessage];

        try {
            $response = $this->httpClient->request('POST', self::XAI_API_BASE_URL . '/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => $this->getXaiModel(),
                    'messages' => $chatMessages,
                    'temperature' => 0.7,
                    'max_tokens' => 800,
                ],
                'timeout' => 30,
            ]);

            $statusCode = $response->getStatusCode();
            if ($statusCode !== 200) {
                $responseBody = $response->getContent(false);
                $this->logger->error('xAI API Error', [
                    'statusCode' => $statusCode,
                    'model' => $this->getXaiModel(),
                    'response' => $responseBody,
                ]);

                if ($statusCode === 429) {
                    return 'Limite Grok atteinte (429). Verifiez vos credits/quotas xAI puis reessayez.';
                }
                if ($statusCode === 401 || $statusCode === 403) {
                    return 'Authentification Grok echouee. Verifiez XAI_API_KEY.';
                }

                return "Erreur API Grok: Status $statusCode";
            }

            $data = $response->toArray(false);
            $content = $data['choices'][0]['message']['content'] ?? null;

            if (is_string($content) && trim($content) !== '') {
                return trim($content);
            }

            if (is_array($content)) {
                $texts = [];
                foreach ($content as $item) {
                    if (is_array($item) && ($item['type'] ?? null) === 'text' && is_string($item['text'] ?? null)) {
                        $texts[] = $item['text'];
                    }
                }
                if ($texts !== []) {
                    return trim(implode("\n", $texts));
                }
            }

            $this->logger->error('No content in xAI response', ['data' => $data]);
            return "Le tuteur IA n'a pas pu generer une reponse valide (Grok).";
        } catch (\Throwable $e) {
            $this->logger->error('xAI Tutor Error', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'exception' => get_class($e),
            ]);

            return 'Desole, une erreur est survenue avec Grok. Reessayez dans quelques instants.';
        }
    }

    /**
     * @param array<int, array{role: string, content: string}> $messages
     */
    private function chatWithOpenRouter(string $systemPrompt, string $userMessage, array $messages): string
    {
        $apiKey = $this->getOpenRouterApiKey();
        if (empty($apiKey)) {
            return 'Cle OpenRouter absente. Configurez OPENROUTER_API_KEY dans .env.local.';
        }

        $chatMessages = [
            ['role' => 'system', 'content' => $systemPrompt],
        ];
        foreach ($messages as $message) {
            $role = ($message['role'] ?? '') === 'assistant' ? 'assistant' : 'user';
            $content = is_string($message['content'] ?? null) ? trim((string) $message['content']) : '';
            if ($content !== '') {
                $chatMessages[] = ['role' => $role, 'content' => $content];
            }
        }
        $chatMessages[] = ['role' => 'user', 'content' => $userMessage];

        try {
            $response = $this->httpClient->request('POST', self::OPENROUTER_API_BASE_URL . '/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => $this->getOpenRouterModel(),
                    'messages' => $chatMessages,
                    'temperature' => 0.7,
                    'max_tokens' => 800,
                ],
                'timeout' => 30,
            ]);

            $statusCode = $response->getStatusCode();
            if ($statusCode !== 200) {
                $responseBody = $response->getContent(false);
                $this->logger->error('OpenRouter API Error', [
                    'statusCode' => $statusCode,
                    'model' => $this->getOpenRouterModel(),
                    'response' => $responseBody,
                ]);

                if ($statusCode === 401 || $statusCode === 403) {
                    return 'Authentification OpenRouter echouee. Verifiez OPENROUTER_API_KEY.';
                }
                if ($statusCode === 429) {
                    return 'Limite OpenRouter atteinte (429). Reessayez plus tard.';
                }

                return "Erreur API OpenRouter: Status $statusCode";
            }

            $data = $response->toArray(false);
            $content = $data['choices'][0]['message']['content'] ?? null;
            if (is_string($content) && trim($content) !== '') {
                return trim($content);
            }

            $this->logger->error('No content in OpenRouter response', ['data' => $data]);
            return "Le tuteur IA n'a pas pu generer une reponse valide (OpenRouter).";
        } catch (\Throwable $e) {
            $this->logger->error('OpenRouter Tutor Error', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'exception' => get_class($e),
            ]);

            return 'Desole, une erreur est survenue avec OpenRouter. Reessayez dans quelques instants.';
        }
    }

    /**
     * @param Skill[] $availableSkills
     */
    private function buildSystemPrompt(array $availableSkills, ?User $user): string
    {
        $skillsList = [];
        foreach ($availableSkills as $skill) {
            $line = '- ' . $skill->getNomSkill();
            $line .= ' (categorie: ' . $skill->getCategorie() . ', type: ' . $skill->getContexteSkill() . ')';
            if ($skill->getDescriptionSkill()) {
                $line .= ' - ' . mb_substr($skill->getDescriptionSkill(), 0, 120);
            }
            if ($skill->getNombreOffresAssociees() !== null) {
                $line .= ' - ' . $skill->getNombreOffresAssociees() . " offres sur le marche";
            }
            $skillsList[] = $line;
        }
        $skillsText = implode("\n", $skillsList);

        $userContext = '';
        if ($user && method_exists($user, 'getSkills')) {
            $userSkills = $user->getSkills();
            if ($userSkills && $userSkills->count() > 0) {
                $names = [];
                foreach ($userSkills as $userSkill) {
                    $names[] = $userSkill->getNomSkill();
                }
                $userContext = "\nCompetences actuelles de l'utilisateur: " . implode(', ', $names) . '.';
            }
        }

        return <<<PROMPT
Tu es un tuteur IA expert et pragmatique sur la plateforme NoVas. Ton role est d'aider les etudiants a resoudre chaque probleme concret et a choisir les meilleurs talents/competences a developper selon leurs objectifs et leur profil.

Tu disposes de la liste des competences disponibles sur la plateforme (nom, categorie, type, description, et eventuellement nombre d'offres d'emploi associees).{$userContext}

Regles globales:
- Reponds toujours en francais, de facon claire, structurée et actionnable.
- Donne des solutions concretes, pas seulement de la theorie.
- Si l'utilisateur partage un probleme, commence par une analyse rapide de la cause probable puis propose un plan de resolution.
- Quand des informations manquent, pose jusqu'a 3 questions de clarification tres ciblées.
- Adapte le niveau (debutant/intermediaire/avance) selon le message.
- Suggere en priorite des competences qui figurent dans la liste fournie.
- Cite les noms exacts des competences de la liste quand tu les recommandes.

Format de reponse obligatoire en cas de probleme:
1) Diagnostic: cause(s) probable(s) en 2-4 points.
2) Solution immediate: etapes courtes a executer maintenant.
3) Solution durable: bonnes pratiques pour eviter que le probleme revienne.
4) Verification: comment confirmer que c'est corrige.
5) Plan B: alternative si la solution principale echoue.

Contraintes qualite:
- Evite les reponses vagues.
- Si un choix technique est propose, explique en une phrase pourquoi ce choix est pertinent.
- Si la liste des competences est vide ou hors sujet, propose des pistes generales utiles.

Liste des competences disponibles sur la plateforme:
{$skillsText}
PROMPT;
    }

    /**
     * @return string[]
     */
    private function getCandidateGeminiModels(): array
    {
        $models = [];

        $configured = trim((string) ($_ENV['GEMINI_MODEL'] ?? ''));
        if ($configured !== '') {
            $models[] = $configured;
        }

        foreach (['gemini-2.0-flash', 'gemini-1.5-flash', 'gemini-1.5-pro'] as $fallback) {
            if (!in_array($fallback, $models, true)) {
                $models[] = $fallback;
            }
        }

        return $models;
    }

    private function extractRetryDelaySeconds(string $responseBody): ?int
    {
        if (preg_match('/"retryDelay"\s*:\s*"(\d+)s"/', $responseBody, $matches) === 1) {
            return (int) $matches[1];
        }

        if (preg_match('/Please retry in ([0-9]+(?:\.[0-9]+)?)s\./', $responseBody, $matches) === 1) {
            return (int) ceil((float) $matches[1]);
        }

        return null;
    }

    private function isGeminiQuotaMessage(string $message): bool
    {
        return str_contains($message, 'Quota Gemini') || str_contains($message, 'Limite Gemini atteinte (429)');
    }

    private function getAiProvider(): string
    {
        $provider = strtolower(trim((string) ($_ENV['AI_PROVIDER'] ?? 'gemini')));
        if ($provider === 'openrouter' && !empty($this->getOpenRouterApiKey())) {
            return 'openrouter';
        }
        if ($provider === 'xai' && !empty($this->getXaiApiKey())) {
            return 'xai';
        }

        return 'gemini';
    }

    private function getXaiModel(): string
    {
        $configured = trim((string) ($_ENV['XAI_MODEL'] ?? ''));
        if ($configured !== '') {
            return $configured;
        }

        return 'grok-4-0709';
    }

    private function getOpenRouterModel(): string
    {
        $configured = trim((string) ($_ENV['OPENROUTER_MODEL'] ?? ''));
        if ($configured !== '') {
            return $configured;
        }

        return 'openai/gpt-4o-mini';
    }

    public function isConfigured(): bool
    {
        return !empty($this->getGeminiApiKey()) || !empty($this->getXaiApiKey()) || !empty($this->getOpenRouterApiKey());
    }

    private function getGeminiApiKey(): ?string
    {
        if (!empty($this->geminiApiKey)) {
            return $this->geminiApiKey;
        }

        return $_ENV['GEMINI_API_KEY'] ?? null;
    }

    private function getXaiApiKey(): ?string
    {
        if (!empty($this->xaiApiKey)) {
            return $this->xaiApiKey;
        }

        return $_ENV['XAI_API_KEY'] ?? null;
    }

    private function getOpenRouterApiKey(): ?string
    {
        if (!empty($this->openRouterApiKey)) {
            return $this->openRouterApiKey;
        }

        return $_ENV['OPENROUTER_API_KEY'] ?? null;
    }
}
