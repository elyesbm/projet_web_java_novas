<?php

namespace App\Controller\Api;

use App\Repository\AtelierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/ateliers', name: 'app_api_ateliers_')]
class AtelierCalendarController extends AbstractController
{
    #[Route('/calendar', name: 'calendar', methods: ['GET'])]
    public function calendar(AtelierRepository $atelierRepository): JsonResponse
    {
        $ateliers = $atelierRepository->searchFilterAndSort(null, null, 'date_asc');

        $events = [];
        foreach ($ateliers as $atelier) {
            $date = $atelier->getDateAtelier();
            if ($date === null) {
                continue;
            }

            $id = $atelier->getId();
            $statut = $atelier->getStatutAtelier();
            if ($statut === null) {
                $statut = 1;
            }
            $contexte = $atelier->getContexteAtelier();
            if ($contexte === null) {
                $contexte = 0;
            }
            $events[] = [
                'id' => $id,
                'title' => (string) ($atelier->getTitreAtelier() ?? 'Atelier'),
                'start' => $date->format('Y-m-d'),
                'allDay' => true,
                'url' => $this->generateUrl('app_admin_ateliers_edit', ['id' => $id]),
                'status' => $statut,
                'contexte' => $contexte,
            ];
        }

        return $this->json($events);
    }
}
