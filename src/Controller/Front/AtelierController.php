<?php

namespace App\Controller\Front;

use App\Repository\AtelierRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/ateliers')]
class AtelierController extends AbstractController
{
    #[Route('', name: 'app_ateliers')]
    #[Route('', name: 'app_reservation_ateliers')]
    public function index(Request $request, AtelierRepository $atelierRepository, ReservationRepository $reservationRepository): Response
    {
        $search = $request->query->get('search', '');
        $contexte = $request->query->get('contexte');
        $sort = $request->query->get('sort', 'date_asc');

        $contexteInt = null;
        if ($contexte !== null && $contexte !== '') {
            $contexteInt = (int) $contexte;
            if ($contexteInt !== 0 && $contexteInt !== 1) {
                $contexteInt = null;
            }
        }

        $validSorts = ['date_asc', 'date_desc', 'titre_asc', 'titre_desc'];
        if (!in_array($sort, $validSorts, true)) {
            $sort = 'date_asc';
        }

        $ateliers = $atelierRepository->searchAndFilter($search, $contexteInt, $sort);
        $topAtelierRow = $reservationRepository->findTopAtelierByReservations();

        return $this->render('front/reservation/ateliers.html.twig', [
            'ateliers' => $ateliers,
            'search' => $search,
            'contexte' => $contexteInt,
            'sort' => $sort,
            'topAtelier' => $topAtelierRow['atelier'] ?? null,
            'topAtelierCount' => $topAtelierRow['total'] ?? 0,
        ]);
    }
}
