<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
   

    #[Route('/mes-reservations', name: 'app_reservation_mes')]
    public function mesReservations(): Response
    {
        // Données exemples - remplacer par votre repository
        $reservations = [
            [
                'id' => 101,
                'atelier' => [
                    'titre' => 'Atelier Prise de Parole en Public',
                    'date' => '15 Fevrier 2024',
                    'heure' => '14:00 - 17:00',
                    'lieu' => 'Salle A102',
                    'type' => 'soft',
                    'formateur' => 'Dr. Marie Dupont',
                ],
                'date_reservation' => '10 Fevrier 2024',
                'statut' => 'confirmee',
                'qr_code' => 'QR-12345',
            ],
            [
                'id' => 102,
                'atelier' => [
                    'titre' => 'Workshop React & Next.js Avancé',
                    'date' => '18 Fevrier 2024',
                    'heure' => '10:00 - 16:00',
                    'lieu' => 'Lab Informatique B201',
                    'type' => 'hard',
                    'formateur' => 'Prof. Jean Martin',
                ],
                'date_reservation' => '12 Fevrier 2024',
                'statut' => 'en-attente',
                'qr_code' => 'QR-12346',
            ],
        ];

        $historique = [
            [
                'id' => 99,
                'atelier' => [
                    'titre' => 'Introduction à Python',
                    'date' => '10 Janvier 2024',
                    'type' => 'hard',
                ],
                'date_reservation' => '5 Janvier 2024',
                'statut' => 'terminee',
            ],
        ];

        return $this->render('front/reservation/mes_reservations.html.twig', [
            'reservations' => $reservations,
            'historique' => $historique,
        ]);
    }

    #[Route('/{id}/reserver', name: 'app_reservation_reserver', methods: ['GET', 'POST'])]
    public function reserver(Request $request, int $id): Response
    {
        // Récupérer l'atelier par ID - exemple statique
        $atelier = [
            'id' => $id,
            'titre' => 'Atelier Prise de Parole en Public',
            'description' => 'Apprenez à captiver votre audience et à communiquer avec confiance.',
            'image' => 'workshop.jpg',
            'date' => '15 Fevrier 2024',
            'heure' => '14:00 - 17:00',
            'lieu' => 'Salle A102',
            'type' => 'soft',
            'categorie' => 'Communication',
            'places_total' => 20,
            'places_restantes' => 5,
            'formateur' => 'Dr. Marie Dupont',
        ];

        if ($request->isMethod('POST')) {
            // Traiter la réservation
            $this->addFlash('success', 'Votre réservation a été confirmée !');
            return $this->redirectToRoute('app_reservation_mes');
        }

        return $this->render('front/reservation/reserver.html.twig', [
            'atelier' => $atelier,
        ]);
    }
}