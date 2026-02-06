<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/publications')]
class PublicationController extends AbstractController
{
    #[Route('/', name: 'app_publications_index')]
    public function index(): Response
    {
        $publications = [
            [
                'id' => 1,
                'auteur' => [
                    'nom' => 'Marie Dubois',
                    'avatar' => 'student-avatar.jpg',
                    'niveau' => 'L3 Informatique',
                ],
                'date_creation' => '2024-02-15 14:30',
                'contexte' => 'academic',
                'titre' => 'Conseils pour reussir les examens de Machine Learning ?',
                'contenu' => 'Les examens approchent et j\'aimerais avoir vos conseils pour bien reviser le cours de ML. Quelles ressources utilisez-vous ? Des astuces particulieres pour les exercices pratiques ?',
                'likes' => 24,
                'commentaires_count' => 12,
                'statut' => 'actif',
                'commentaires' => [
                    [
                        'id' => 101,
                        'auteur' => ['nom' => 'Thomas Bernard', 'avatar' => 'student-avatar.jpg'],
                        'date' => '2024-02-15 15:45',
                        'contenu' => 'Je te conseille les videos de 3Blue1Brown sur YouTube, c\'est super bien explique !',
                    ],
                    [
                        'id' => 102,
                        'auteur' => ['nom' => 'Emma Petit', 'avatar' => 'student-avatar.jpg'],
                        'date' => '2024-02-15 16:20',
                        'contenu' => 'Fais beaucoup d\'exercices pratiques, c\'est la cle pour bien comprendre.',
                    ],
                ],
            ],
            [
                'id' => 2,
                'auteur' => [
                    'nom' => 'Anonyme',
                    'avatar' => null,
                    'niveau' => null,
                ],
                'date_creation' => '2024-02-14 09:15',
                'contexte' => 'personal',
                'titre' => 'Comment gerer le stress avant une presentation ?',
                'contenu' => 'J\'ai une presentation importante la semaine prochaine et je stresse enormement. Avez-vous des techniques pour gerer le trac ? Je cherche des conseils pratiques qui fonctionnent vraiment !',
                'likes' => 45,
                'commentaires_count' => 23,
                'statut' => 'actif',
                'commentaires' => [
                    [
                        'id' => 201,
                        'auteur' => ['nom' => 'Lucas Moreau', 'avatar' => 'student-avatar.jpg'],
                        'date' => '2024-02-14 10:30',
                        'contenu' => 'La respiration 4-7-8 m\'aide beaucoup. 4 secondes d\'inspiration, 7 de retention, 8 d\'expiration.',
                    ],
                ],
            ],
            [
                'id' => 3,
                'auteur' => [
                    'nom' => 'Sarah Chen',
                    'avatar' => 'student-avatar.jpg',
                    'niveau' => 'M2 Management',
                ],
                'date_creation' => '2024-02-13 18:00',
                'contexte' => 'help',
                'titre' => 'Groupe d\'etude pour le projet de base de donnees',
                'contenu' => 'Salut ! Je cherche des camarades motives pour former un groupe d\'etude sur le projet de BDD. On pourrait se retrouver a la bibliotheque les mardis et jeudis apres-midi. Qui est interesse ?',
                'likes' => 18,
                'commentaires_count' => 8,
                'statut' => 'actif',
                'commentaires' => [],
            ],
            [
                'id' => 4,
                'auteur' => [
                    'nom' => 'Alexandre Martin',
                    'avatar' => 'student-avatar.jpg',
                    'niveau' => 'L3 Informatique',
                ],
                'date_creation' => '2024-02-12 11:20',
                'contexte' => 'academic',
                'titre' => 'Retour d\'experience : Stage en startup vs grande entreprise',
                'contenu' => 'J\'ai fait un stage dans une startup l\'ete dernier et je voulais partager mon experience avec vous. Les avantages et inconvenients selon moi... N\'hesitez pas a poser vos questions !',
                'likes' => 67,
                'commentaires_count' => 31,
                'statut' => 'actif',
                'commentaires' => [
                    [
                        'id' => 301,
                        'auteur' => ['nom' => 'Julie Lambert', 'avatar' => 'student-avatar.jpg'],
                        'date' => '2024-02-12 12:15',
                        'contenu' => 'Super retour ! Tu as prefere la startup finalement ?',
                    ],
                    [
                        'id' => 302,
                        'auteur' => ['nom' => 'Marc Dupont', 'avatar' => 'student-avatar.jpg'],
                        'date' => '2024-02-12 14:00',
                        'contenu' => 'Merci pour ce partage, ca m\'aide beaucoup pour mon choix.',
                    ],
                ],
            ],
        ];

        return $this->render('front/publication/index.html.twig', [
            'publications' => $publications,
        ]);
    }

    #[Route('/nouvelle', name: 'app_publication_nouvelle', methods: ['GET', 'POST'])]
    public function nouvelle(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $this->addFlash('success', 'Votre publication a ete creee avec succes !');
            return $this->redirectToRoute('app_publications_index');
        }

        return $this->render('front/publication/nouvelle.html.twig');
    }

    #[Route('/{id}/commenter', name: 'app_publication_commenter', methods: ['POST'])]
    public function commenter(Request $request, int $id): Response
    {
        // Traiter le commentaire
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/signaler', name: 'app_publication_signaler')]
    public function signaler(int $id): Response
    {
        $this->addFlash('warning', 'La publication a ete signalee aux moderateurs.');
        return $this->redirectToRoute('app_publications_index');
    }
}