<?php

namespace App\Controller\Api;

use App\Service\ExternalTranslator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api', name: 'app_api_')]
class TranslationController extends AbstractController
{
    #[Route('/translate', name: 'translate', methods: ['POST'])]
    public function translate(Request $request, ExternalTranslator $translator): JsonResponse
    {
        $data = json_decode((string) $request->getContent(), true);
        if (!is_array($data)) {
            return $this->json(['error' => 'JSON invalide.'], 400);
        }

        $target = strtolower(trim((string) ($data['target'] ?? '')));
        if ($target === '') {
            return $this->json(['error' => 'Champ "target" manquant.'], 400);
        }

        $allowedTargets = ['fr', 'en', 'ar', 'es', 'de', 'it', 'pt'];
        if (!in_array($target, $allowedTargets, true)) {
            return $this->json(['error' => 'Langue cible non supportée.'], 400);
        }

        $texts = $data['texts'] ?? null;
        if (is_string($texts)) {
            $texts = [$texts];
        }
        if (!is_array($texts)) {
            $text = (string) ($data['text'] ?? '');
            $texts = $text !== '' ? [$text] : [];
        }

        $texts = array_values(array_filter(array_map(
            static fn ($t) => is_string($t) ? trim($t) : '',
            $texts
        ), static fn (string $t) => $t !== ''));

        if ($texts === []) {
            return $this->json(['error' => 'Aucun texte à traduire.'], 400);
        }
        if (count($texts) > 50) {
            return $this->json(['error' => 'Trop de textes (max 50).'], 400);
        }

        $totalLen = 0;
        foreach ($texts as $t) {
            $len = function_exists('mb_strlen') ? mb_strlen($t) : strlen($t);
            if ($len > 800) {
                return $this->json(['error' => 'Texte trop long (max 800 caractères).'], 400);
            }
            $totalLen += $len;
        }
        if ($totalLen > 8000) {
            return $this->json(['error' => 'Charge trop grande (max 8000 caractères).'], 400);
        }

        try {
            $translations = [];
            foreach ($texts as $text) {
                $translations[] = $translator->translate($text, $target, 'fr');
            }

            return $this->json([
                'target' => $target,
                'translations' => $translations,
            ]);
        } catch (\Throwable $e) {
            return $this->json(['error' => $e->getMessage()], 502);
        }
    }
}

