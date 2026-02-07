<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/ateliers')]
class AtelierController extends AbstractController
{
    #[Route('', name: 'app_ateliers')]
    public function index(): Response
    {
        // DONNÉES TEMPORAIRES (on branchera la DB après)
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
                'description' => 'Maîtrisez les hooks, le SSR, et les patterns avancés de React.',
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
        ];

        return $this->render('front/reservation/ateliers.html.twig', [
            'ateliers' => $ateliers,
        ]);
    }
}
