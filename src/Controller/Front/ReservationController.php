<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/ateliers', name: 'app_reservation_ateliers')]
    public function ateliers(): Response
    {
        // Données exemples - remplacer par votre repository
        $ateliers = [
            [
                'id' => 1,
                'titre' => 'Atelier Prise de Parole en Public',
                'description' => 'Apprenez à captiver votre audience et à communiquer avec confiance devant un public.',
                'image' => 'workshop.jpg',
                'date' => '15 Fevrier 2024',
                'heure' => '14:00 - 17:00',
                'lieu' => 'Salle A102',
                'type' => 'soft',
                'categorie' => 'Communication',
                'places_total' => 20,
                'places_restantes' => 5,
                'formateur' => 'Dr. Marie Dupont',
                'prix' => 0,
            ],
            [
                'id' => 2,
                'titre' => 'Workshop React & Next.js Avancé',
                'description' => 'Maîtrisez les hooks, le SSR, et les patterns avancés de React pour des applications modernes.',
                'image' => 'skills-learning.jpg',
                'date' => '18 Fevrier 2024',
                'heure' => '10:00 - 16:00',
                'lieu' => 'Lab Informatique B201',
                'type' => 'hard',
                'categorie' => 'Developpement Web',
                'places_total' => 25,
                'places_restantes' => 12,
                'formateur' => 'Prof. Jean Martin',
                'prix' => 0,
            ],
            [
                'id' => 3,
                'titre' => 'Gestion du Stress et Bien-être',
                'description' => 'Techniques pratiques de mindfulness et gestion émotionnelle pour le quotidien étudiant.',
                'image' => 'community.jpg',
                'date' => '22 Fevrier 2024',
                'heure' => '15:00 - 17:00',
                'lieu' => 'Espace Détente',
                'type' => 'soft',
                'categorie' => 'Bien-être',
                'places_total' => 30,
                'places_restantes' => 18,
                'formateur' => 'Sophie Lambert',
                'prix' => 0,
            ],
            [
                'id' => 4,
                'titre' => 'Introduction à l\'IA Générative',
                'description' => 'Explorez ChatGPT, DALL-E, Midjourney et créez vos premiers projets avec l\'IA.',
                'image' => 'student-hero.jpg',
                'date' => '25 Fevrier 2024',
                'heure' => '09:00 - 12:00',
                'lieu' => 'Amphithéâtre C',
                'type' => 'hard',
                'categorie' => 'Intelligence Artificielle',
                'places_total' => 100,
                'places_restantes' => 45,
                'formateur' => 'Dr. Alexandre Noir',
                'prix' => 0,
            ],
            [
                'id' => 5,
                'titre' => 'Leadership et Gestion d\'Équipe',
                'description' => 'Développez votre charisme naturel et apprenez à motiver vos collaborateurs.',
                'image' => 'workshop.jpg',
                'date' => '28 Fevrier 2024',
                'heure' => '14:00 - 18:00',
                'lieu' => 'Salle de Conférence',
                'type' => 'soft',
                'categorie' => 'Management',
                'places_total' => 15,
                'places_restantes' => 3,
                'formateur' => 'Marc Dubois',
                'prix' => 0,
            ],
            [
                'id' => 6,
                'titre' => 'Python pour la Data Science',
                'description' => 'Pandas, NumPy, Matplotlib : analysez vos données comme un pro.',
                'image' => 'skills-learning.jpg',
                'date' => '2 Mars 2024',
                'heure' => '09:00 - 17:00',
                'lieu' => 'Lab Data B305',
                'type' => 'hard',
                'categorie' => 'Data Science',
                'places_total' => 20,
                'places_restantes' => 8,
                'formateur' => 'Dr. Claire Fontaine',
                'prix' => 0,
            ],
        ];

        return $this->render('front/reservation/ateliers.html.twig', [
            'ateliers' => $ateliers,
        ]);
    }

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