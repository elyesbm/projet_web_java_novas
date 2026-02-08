<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\AtelierRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;


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

    #[Route(
        '/{id}/reserver/{userId}',
        name: 'app_reservation_reserver',
        requirements: ['id' => '\d+', 'userId' => '\d+'],
        methods: ['GET', 'POST']
    )]
    public function reserver(
        Request $request,
        AtelierRepository $atelierRepository,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        int $id,
        int $userId
    ): Response
    {
        // 🔍 Récupération de l'atelier
        $atelier = $atelierRepository->find($id);

        if (!$atelier) {
            throw $this->createNotFoundException('Atelier introuvable');
        }

        // 🔍 Récupération du user depuis l'URL
        $user = $userRepository->find($userId);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur introuvable');
        }

        // 🆕 Nouvelle réservation
        $reservation = new Reservation();

        // 🧾 Création du formulaire
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        // ✅ Soumission valide
        if ($form->isSubmitted() && $form->isValid()) {

            // 🔗 Relations métier (CORRECTES)
            $reservation->setAtelier($atelier);
            $reservation->setUser($user); // ✅ ICI la correction
            $reservation->setStatutReservation(0);

            // 💾 Sauvegarde
            $entityManager->persist($reservation);
            $entityManager->flush();

            // 🔔 Message succès
            $this->addFlash('success', 'Votre réservation a été enregistrée avec succès');

            return $this->redirectToRoute('app_reservation_mes');
        }

        // 🎨 Affichage du formulaire
        return $this->render('front/reservation/reserver.html.twig', [
            'atelier' => $atelier,
            'form' => $form->createView(),
        ]);
    }
}