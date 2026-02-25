<?php

namespace App\Controller\Api;

use App\Service\LanguageToolService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/text', name: 'app_api_text_')]
class TextQualityController extends AbstractController
{
    #[Route('/check-offer', name: 'check_offer', methods: ['POST'])]
    public function checkOffer(Request $request, LanguageToolService $languageToolService): JsonResponse
    {
        return $this->handleCheck($request, $languageToolService);
    }

    #[Route('/check-application', name: 'check_application', methods: ['POST'])]
    public function checkApplication(Request $request, LanguageToolService $languageToolService): JsonResponse
    {
        return $this->handleCheck($request, $languageToolService);
    }

    private function handleCheck(Request $request, LanguageToolService $languageToolService): JsonResponse
    {
        $data = json_decode((string) $request->getContent(), true);
        if (!is_array($data)) {
            return $this->json(['error' => 'JSON invalide.'], 400);
        }

        $text = trim((string) ($data['text'] ?? ''));
        if ($text === '') {
            return $this->json(['error' => 'Le champ "text" est obligatoire.'], 400);
        }

        $language = strtolower(trim((string) ($data['language'] ?? 'fr')));
        if (!preg_match('/^[a-z]{2}(?:-[a-z]{2})?$/', $language)) {
            return $this->json(['error' => 'Code langue invalide.'], 400);
        }

        try {
            $result = $languageToolService->checkText($text, $language);

            return $this->json($result);
        } catch (\Throwable $e) {
            return $this->json([
                'error' => 'Service de correction indisponible pour le moment.',
                'details' => $e->getMessage(),
            ], 503);
        }
    }
}

