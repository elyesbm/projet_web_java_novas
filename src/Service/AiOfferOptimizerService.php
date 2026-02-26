<?php

namespace App\Service;

class AiOfferOptimizerService
{
    public function __construct(
        private GeminiClientService $geminiClient
    ) {
    }

    /**
     * @return array{
     *     optimizedTitle: string,
     *     optimizedDescription: string,
     *     suggestedCategory: string,
     *     tags: array<int, string>
     * }
     */
    public function optimizeOffer(string $title, string $description): array
    {
        $title = trim($title);
        $description = trim($description);

        if ($title === '' || $description === '') {
            throw new \InvalidArgumentException('Le titre et la description sont obligatoires.');
        }

        $systemPrompt = <<<PROMPT
Tu es un assistant RH expert en offres jobs etudiantes.
Retourne UNIQUEMENT un JSON valide, sans markdown, sans texte additionnel.
Le JSON doit contenir exactement ces cles:
- optimizedTitle (string)
- optimizedDescription (string)
- suggestedCategory (string): une valeur parmi tutorat, aide_academique, creation
- tags (array de 3 a 8 tags courts)
PROMPT;

        $userPrompt = <<<PROMPT
Optimise cette offre:
Titre: {$title}
Description: {$description}

Objectifs:
- Rendre le titre plus clair et attractif
- Rendre la description plus professionnelle, concise et lisible
- Proposer la meilleure categorie
- Proposer des tags utiles

Retour strict en JSON uniquement.
PROMPT;

        $decoded = $this->geminiClient->generateJson($systemPrompt, $userPrompt);

        $optimizedTitle = trim((string) ($decoded['optimizedTitle'] ?? $title));
        $optimizedDescription = trim((string) ($decoded['optimizedDescription'] ?? $description));
        $suggestedCategory = $this->normalizeCategory((string) ($decoded['suggestedCategory'] ?? 'tutorat'));
        $tags = $this->normalizeTags($decoded['tags'] ?? []);

        if ($optimizedTitle === '') {
            $optimizedTitle = $title;
        }
        if ($optimizedDescription === '') {
            $optimizedDescription = $description;
        }

        return [
            'optimizedTitle' => $optimizedTitle,
            'optimizedDescription' => $optimizedDescription,
            'suggestedCategory' => $suggestedCategory,
            'tags' => $tags,
        ];
    }

    private function normalizeCategory(string $value): string
    {
        $value = strtolower(trim($value));
        if (in_array($value, ['tutorat', 'aide_academique', 'creation'], true)) {
            return $value;
        }

        if (str_contains($value, 'tutor')) {
            return 'tutorat';
        }
        if (str_contains($value, 'crea')) {
            return 'creation';
        }
        if (str_contains($value, 'aide')) {
            return 'aide_academique';
        }

        return 'tutorat';
    }

    /**
     * @param mixed $tags
     * @return array<int, string>
     */
    private function normalizeTags(mixed $tags): array
    {
        if (!is_array($tags)) {
            return [];
        }

        $normalized = [];
        foreach ($tags as $tag) {
            if (!is_string($tag)) {
                continue;
            }
            $value = trim($tag);
            if ($value !== '') {
                $normalized[] = $value;
            }
        }

        $normalized = array_values(array_unique($normalized));
        return array_slice($normalized, 0, 8);
    }
}

