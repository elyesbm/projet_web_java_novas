<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/marketplace')]
class MarketplaceController extends AbstractController
{
    #[Route('/', name: 'app_marketplace_index')]
    public function index(): Response
    {
        // Catégories
        $categories = [
            ['id' => 1, 'nom' => 'Livres', 'description' => 'Livres universitaires et romans', 'icon' => 'book'],
            ['id' => 2, 'nom' => 'Electronique', 'description' => 'Ordinateurs, tablettes, accessoires', 'icon' => 'laptop'],
            ['id' => 3, 'nom' => 'Fournitures', 'description' => 'Cahiers, stylos, classeurs', 'icon' => 'pen-tool'],
            ['id' => 4, 'nom' => 'Mobilier', 'description' => 'Bureaux, chaises, lampes', 'icon' => 'armchair'],
            ['id' => 5, 'nom' => 'Vetements', 'description' => 'Merchandising universitaire', 'icon' => 'shirt'],
            ['id' => 6, 'nom' => 'Services', 'description' => 'Cours particuliers, aide', 'icon' => 'handshake'],
        ];

        // Articles
        $articles = [
            [
                'id' => 1,
                'titre' => 'MacBook Pro M2 13"',
                'contenu' => 'MacBook Pro M2 13 pouces, 16Go RAM, 512Go SSD. Etat comme neuf, achete il y a 6 mois. Vendu avec chargeur et housse de protection.',
                'image' => 'skills-learning.jpg',
                'type' => 'academic',
                'prix' => 899,
                'statut' => 'disponible',
                'vendeur' => ['nom' => 'Thomas B.', 'avatar' => 'student-avatar.jpg', 'niveau' => 'M1 Info'],
                'categorie' => ['id' => 2, 'nom' => 'Electronique'],
                'date' => '2024-02-15',
            ],
            [
                'id' => 2,
                'titre' => 'Livre "Deep Learning" - Ian Goodfellow',
                'contenu' => 'Livre de reference sur le deep learning. Etat impeccable, aucune annotation.',
                'image' => 'workshop.jpg',
                'type' => 'academic',
                'prix' => 45,
                'statut' => 'disponible',
                'vendeur' => ['nom' => 'Marie D.', 'avatar' => 'student-avatar.jpg', 'niveau' => 'L3 Info'],
                'categorie' => ['id' => 1, 'nom' => 'Livres'],
                'date' => '2024-02-14',
            ],
            [
                'id' => 3,
                'titre' => 'Bureau d\'etudiant IKEA',
                'contenu' => 'Bureau blanc IKEA Micke. Tres bon etat, quelques rayures legeres. Dimensions : 105x50 cm.',
                'image' => 'community.jpg',
                'type' => 'personnel',
                'prix' => 35,
                'statut' => 'disponible',
                'vendeur' => ['nom' => 'Lucas M.', 'avatar' => 'student-avatar.jpg', 'niveau' => 'L2 Droit'],
                'categorie' => ['id' => 4, 'nom' => 'Mobilier'],
                'date' => '2024-02-13',
            ],
            [
                'id' => 4,
                'titre' => 'Cours particuliers Maths',
                'contenu' => 'Donne cours de mathematiques niveau lycee et prepa. 3 ans d\'experience, methodologie adaptee.',
                'image' => 'student-hero.jpg',
                'type' => 'academic',
                'prix' => 25,
                'statut' => 'disponible',
                'vendeur' => ['nom' => 'Sarah C.', 'avatar' => 'student-avatar.jpg', 'niveau' => 'M2 Maths'],
                'categorie' => ['id' => 6, 'nom' => 'Services'],
                'date' => '2024-02-12',
            ],
            [
                'id' => 5,
                'titre' => 'iPad Air 4 + Apple Pencil',
                'contenu' => 'iPad Air 4 64Go WiFi, gris sidereal. Vendu avec Apple Pencil 2 et coque de protection.',
                'image' => 'skills-learning.jpg',
                'type' => 'academic',
                'prix' => 450,
                'statut' => 'reserve',
                'vendeur' => ['nom' => 'Emma P.', 'avatar' => 'student-avatar.jpg', 'niveau' => 'L3 Design'],
                'categorie' => ['id' => 2, 'nom' => 'Electronique'],
                'date' => '2024-02-11',
            ],
            [
                'id' => 6,
                'titre' => 'Lot de stylos et marqueurs',
                'contenu' => 'Lot de 20 stylos divers (Pilot, Staedtler) et 10 marqueurs. Neufs ou tres peu utilises.',
                'image' => 'workshop.jpg',
                'type' => 'personnel',
                'prix' => 15,
                'statut' => 'disponible',
                'vendeur' => ['nom' => 'Alexandre K.', 'avatar' => 'student-avatar.jpg', 'niveau' => 'L1 Medecine'],
                'categorie' => ['id' => 3, 'nom' => 'Fournitures'],
                'date' => '2024-02-10',
            ],
        ];

        return $this->render('front/marketplace/index.html.twig', [
            'categories' => $categories,
            'articles' => $articles,
        ]);
    }

    #[Route('/article/{id}', name: 'app_marketplace_detail', requirements: ['id' => '\d+'])]
    public function detail(int $id): Response
    {
        $article = [
            'id' => $id,
            'titre' => 'MacBook Pro M2 13"',
            'contenu' => 'MacBook Pro M2 13 pouces, 16Go RAM, 512Go SSD. Etat comme neuf, achete il y a 6 mois. Vendu avec chargeur original et housse de protection en cuir.\n\nCaracteristiques :\n- Puce Apple M2\n- 16 Go de memoire unifiee\n- 512 Go de stockage SSD\n- Ecran Retina 13,3 pouces\n- Touch Bar et Touch ID\n- Quatre ports Thunderbolt 4\n\nParfait pour le developpement, le design ou les etudes. Autonomie exceptionnelle (jusqu\'a 20h).',
            'image' => 'skills-learning.jpg',
            'images' => ['skills-learning.jpg', 'workshop.jpg', 'student-hero.jpg'],
            'type' => 'academic',
            'prix' => 899,
            'statut' => 'disponible',
            'vendeur' => [
                'nom' => 'Thomas Bernard',
                'avatar' => 'student-avatar.jpg',
                'niveau' => 'M1 Informatique',
                'membre_depuis' => '2022',
                'annonces' => 12,
                'note' => 4.8,
            ],
            'categorie' => ['id' => 2, 'nom' => 'Electronique'],
            'date' => '2024-02-15',
            'vues' => 234,
        ];

        $articles_similaires = [
            ['id' => 7, 'titre' => 'MacBook Air M1', 'prix' => 650, 'image' => 'workshop.jpg'],
            ['id' => 8, 'titre' => 'Dell XPS 13', 'prix' => 550, 'image' => 'community.jpg'],
            ['id' => 9, 'titre' => 'Lenovo ThinkPad', 'prix' => 400, 'image' => 'student-hero.jpg'],
        ];

        return $this->render('front/marketplace/detail.html.twig', [
            'article' => $article,
            'articles_similaires' => $articles_similaires,
        ]);
    }

    #[Route('/mes-articles', name: 'app_marketplace_mes')]
    public function mesArticles(): Response
    {
        $mesArticles = [
            [
                'id' => 1,
                'titre' => 'MacBook Pro M2 13"',
                'prix' => 899,
                'image' => 'skills-learning.jpg',
                'statut' => 'disponible',
                'categorie' => 'Electronique',
                'vues' => 234,
                'messages' => 12,
            ],
            [
                'id' => 10,
                'titre' => 'Calculatrice TI-83',
                'prix' => 45,
                'image' => 'workshop.jpg',
                'statut' => 'vendu',
                'categorie' => 'Electronique',
                'vues' => 89,
                'messages' => 3,
            ],
        ];

        $categories = ['Livres', 'Electronique', 'Fournitures', 'Mobilier', 'Vetements', 'Services'];

        return $this->render('front/marketplace/mes_articles.html.twig', [
            'articles' => $mesArticles,
            'categories' => $categories,
        ]);
    }

    #[Route('/article/ajouter', name: 'app_marketplace_ajouter', methods: ['GET', 'POST'])]
    public function ajouter(Request $request): Response
    {
        $categories = [
            ['id' => 1, 'nom' => 'Livres'],
            ['id' => 2, 'nom' => 'Electronique'],
            ['id' => 3, 'nom' => 'Fournitures'],
            ['id' => 4, 'nom' => 'Mobilier'],
            ['id' => 5, 'nom' => 'Vetements'],
            ['id' => 6, 'nom' => 'Services'],
        ];

        if ($request->isMethod('POST')) {
            $this->addFlash('success', 'Votre article a ete publie avec succes !');
            return $this->redirectToRoute('app_marketplace_mes');
        }

        return $this->render('front/marketplace/ajouter.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/article/{id}/modifier', name: 'app_marketplace_modifier', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function modifier(Request $request, int $id): Response
    {
        $article = [
            'id' => $id,
            'titre' => 'MacBook Pro M2 13"',
            'contenu' => 'Description de l\'article...',
            'prix' => 899,
            'categorie_id' => 2,
            'type' => 'academic',
        ];

        $categories = [
            ['id' => 1, 'nom' => 'Livres'],
            ['id' => 2, 'nom' => 'Electronique'],
            ['id' => 3, 'nom' => 'Fournitures'],
            ['id' => 4, 'nom' => 'Mobilier'],
            ['id' => 5, 'nom' => 'Vetements'],
            ['id' => 6, 'nom' => 'Services'],
        ];

        if ($request->isMethod('POST')) {
            $this->addFlash('success', 'Votre article a ete modifie avec succes !');
            return $this->redirectToRoute('app_marketplace_mes');
        }

        return $this->render('front/marketplace/modifier.html.twig', [
            'article' => $article,
            'categories' => $categories,
        ]);
    }
}