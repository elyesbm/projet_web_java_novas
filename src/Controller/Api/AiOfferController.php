<?php

namespace App\Controller\Api;

use App\Exception\AiApiException;
use App\Service\AiOfferOptimizerService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Attribute\Route;

class AiOfferController extends AbstractController
{
    #[Route('/api/ai/offer/optimize', name: 'app_api_ai_offer_optimize', methods: ['POST'])]
    public function optimize(
        Request $request,
        AiOfferOptimizerService $optimizerService,
        KernelInterface $kernel,
        ?LoggerInterface $logger = null
    ): JsonResponse
    {
        if (!$this->getUser()) {
            return $this->json(['error' => 'Authentification requise.'], 401);
        }

        $data = json_decode((string) $request->getContent(), true);
        if (!is_array($data)) {
            return $this->json(['error' => 'JSON invalide.'], 400);
        }

        $title = trim((string) ($data['title'] ?? ''));
        $description = trim((string) ($data['description'] ?? ''));

        if ($title === '' || mb_strlen($title) < 3) {
            return $this->json(['error' => 'Le titre doit contenir au moins 3 caracteres.'], 400);
        }

        if ($description === '' || mb_strlen($description) < 10) {
            return $this->json(['error' => 'La description doit contenir au moins 10 caracteres.'], 400);
        }

        try {
            $result = $optimizerService->optimizeOffer($title, $description);
            return $this->json($result);
        } catch (\InvalidArgumentException $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        } catch (AiApiException $e) {
            $logger?->error('AI optimize failed', [
                'message' => $e->getMessage(),
                'status' => $e->getHttpStatus(),
                'provider_response' => $e->getProviderResponse(),
                'raw_response' => $kernel->isDebug() ? $e->getRawResponse() : null,
            ]);

            $response = [
                'error' => $e->getMessage(),
                'status' => $e->getHttpStatus(),
            ];

            if ($kernel->isDebug()) {
                $response['details'] = [
                    'providerResponse' => $e->getProviderResponse(),
                    'rawResponse' => $e->getRawResponse(),
                ];
            }

            return $this->json($response, $e->getHttpStatus());
        } catch (\Throwable $e) {
            $logger?->error('Unexpected AI optimize failure', [
                'message' => $e->getMessage(),
                'exception' => $e::class,
            ]);

            return $this->json([
                'error' => $kernel->isDebug()
                    ? 'Erreur inattendue IA: ' . $e->getMessage()
                    : 'Le service IA est momentanement indisponible. Reessayez plus tard.',
                'status' => 503,
            ], 503);
        }
    }
}
