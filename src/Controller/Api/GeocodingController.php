<?php

namespace App\Controller\Api;

use App\Service\GeocodingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class GeocodingController extends AbstractController
{
    #[Route('/api/geocode', name: 'app_api_geocode', methods: ['POST'])]
    public function geocode(Request $request, GeocodingService $geocodingService): JsonResponse
    {
        $data = json_decode((string) $request->getContent(), true);
        if (!is_array($data)) {
            return $this->json(['error' => 'JSON invalide.'], 400);
        }

        $adresse = trim((string) ($data['adresse'] ?? ''));
        if ($adresse === '') {
            return $this->json(['error' => 'Le champ "adresse" est obligatoire.'], 400);
        }

        try {
            $result = $geocodingService->geocode($adresse);
            if ($result === null) {
                return $this->json(['error' => 'Adresse introuvable.'], 404);
            }

            return $this->json([
                'lat' => $result['lat'],
                'lon' => $result['lon'],
                'displayName' => $result['display_name'],
            ]);
        } catch (\Throwable $e) {
            return $this->json([
                'error' => 'Service de geocodage indisponible.',
                'details' => $e->getMessage(),
            ], 503);
        }
    }
}

