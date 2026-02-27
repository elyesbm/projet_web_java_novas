<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class AiModerationService
{
    public function __construct(
        private GeminiClientService $geminiClient,
        private ?LoggerInterface $logger = null
    ) {
    }

    /**
     * @return array{
     *     action: 'ALLOW'|'FLAG'|'BLOCK',
     *     riskLevel: 'LOW'|'MEDIUM'|'HIGH',
     *     reasons: array<int, string>
     * }
     */
    public function moderateText(string $text): array
    {
        $text = trim($text);
        if ($text === '') {
            throw new \InvalidArgumentException('Le texte a moderer est obligatoire.');
        }

        $systemPrompt = <<<PROMPT
Tu es un moteur de moderation de contenu pour une plateforme d'emploi etudiante.
Analyse le texte et classe uniquement selon ces criteres:
- insults, harassment, hate speech, sexual abuse
- scams/fraud, requests for money, phishing
- phone/email spam, repeated text flooding
- suspicious links or malicious redirection attempts

Tu dois retourner STRICTEMENT un JSON valide, sans markdown ni texte additionnel.
Schema JSON obligatoire:
{
  "action":"ALLOW|FLAG|BLOCK",
  "riskLevel":"LOW|MEDIUM|HIGH",
  "reasons":["..."]
}
Regles:
- ALLOW: contenu sain
- FLAG: douteux, spam potentiel, necessite revue humaine
- BLOCK: abus manifeste, arnaque evidente, harcelement, haine, contenu dangereux
PROMPT;

        $userPrompt = <<<PROMPT
Texte a moderer:
{$text}
PROMPT;

        try {
            $raw = $this->geminiClient->generateJson($systemPrompt, $userPrompt);
        } catch (\Throwable $e) {
            // Fallback safe mode: do not block form submission when AI provider is down.
            $this->logger?->warning('AI moderation unavailable, fallback FLAG applied', [
                'exception' => $e::class,
                'message' => $e->getMessage(),
            ]);

            return [
                'action' => 'FLAG',
                'riskLevel' => 'MEDIUM',
                'reasons' => ['Moderation automatique indisponible, revue manuelle requise.'],
            ];
        }

        $action = strtoupper(trim((string) ($raw['action'] ?? 'FLAG')));
        if (!in_array($action, ['ALLOW', 'FLAG', 'BLOCK'], true)) {
            $action = 'FLAG';
        }

        $riskLevel = strtoupper(trim((string) ($raw['riskLevel'] ?? 'MEDIUM')));
        if (!in_array($riskLevel, ['LOW', 'MEDIUM', 'HIGH'], true)) {
            $riskLevel = 'MEDIUM';
        }

        $reasons = [];
        if (isset($raw['reasons']) && is_array($raw['reasons'])) {
            foreach ($raw['reasons'] as $reason) {
                if (is_string($reason) && trim($reason) !== '') {
                    $reasons[] = trim($reason);
                }
            }
        }
        $reasons = array_values(array_unique($reasons));
        if ($reasons === []) {
            $reasons = ['Aucun motif detaille fourni.'];
        }

        return [
            'action' => $action,
            'riskLevel' => $riskLevel,
            'reasons' => array_slice($reasons, 0, 5),
        ];
    }
}
