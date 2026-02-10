<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/learning-paths')]
class LearningPathController extends AbstractController
{
    #[Route('/', name: 'app_learning_paths_index')]
    public function index(): Response
    {
        $parcours = [
            [
                'id' => 1,
                'titre' => 'Maitrise de Python',
                'description' => 'De debutant a expert en Python pour la data science et le web',
                'skill_lie' => 'Python',
                'type_skill' => 'hard',
                'duree' => '12 semaines',
                'modules' => 24,
                'participants' => 567,
                'image' => 'skills-learning.jpg',
                'niveau_depart' => 'Debutant',
                'niveau_arrivee' => 'Avance',
                'certifiant' => true,
            ],
            [
                'id' => 2,
                'titre' => 'Leadership Transformationnel',
                'description' => 'Developpez votre capacite a inspirer et guider les autres',
                'skill_lie' => 'Leadership',
                'type_skill' => 'soft',
                'duree' => '8 semaines',
                'modules' => 16,
                'participants' => 234,
                'image' => 'workshop.jpg',
                'niveau_depart' => 'Debutant',
                'niveau_arrivee' => 'Intermediaire',
                'certifiant' => true,
            ],
            [
                'id' => 3,
                'titre' => 'Machine Learning Pratique',
                'description' => 'Implementation concrete des algorithmes de ML avec Python',
                'skill_lie' => 'Machine Learning',
                'type_skill' => 'hard',
                'duree' => '10 semaines',
                'modules' => 20,
                'participants' => 423,
                'image' => 'student-hero.jpg',
                'niveau_depart' => 'Intermediaire',
                'niveau_arrivee' => 'Avance',
                'certifiant' => true,
            ],
            [
                'id' => 4,
                'titre' => 'Communication Impactante',
                'description' => 'Techniques de communication pour influencer positivement',
                'skill_lie' => 'Communication orale',
                'type_skill' => 'soft',
                'duree' => '6 semaines',
                'modules' => 12,
                'participants' => 312,
                'image' => 'community.jpg',
                'niveau_depart' => 'Debutant',
                'niveau_arrivee' => 'Intermediaire',
                'certifiant' => false,
            ],
        ];

        return $this->render('front/learning_path/index.html.twig', [
            'parcours' => $parcours,
        ]);
    }

    #[Route('/{id}/detail', name: 'app_learning_path_detail')]
    public function detail(int $id): Response
    {
        // Detail du parcours
        $parcours = [
            'id' => $id,
            'titre' => 'Maitrise de Python',
            'description' => 'De debutant a expert en Python pour la data science et le web. Ce parcours complet vous guidera pas a pas dans l\'apprentissage du langage Python, des bases de la programmation aux concepts avances.',
            'skill_lie' => 'Python',
            'type_skill' => 'hard',
            'categorie' => 'Programmation',
            'duree' => '12 semaines',
            'modules' => 24,
            'participants' => 567,
            'image' => 'skills-learning.jpg',
            'niveau_depart' => 'Debutant',
            'niveau_arrivee' => 'Avance',
            'certifiant' => true,
            'formateur' => 'Dr. Alexandre Martin',
            'objectifs' => [
                'Maitriser la syntaxe Python et les structures de donnees',
                'Developper des applications web avec Flask et Django',
                'Analyser des donnees avec Pandas et NumPy',
                'Implementer des algorithmes de machine learning',
                'Creer des projets concrets pour votre portfolio',
            ],
            'etapes' => [
                ['numero' => 1, 'titre' => 'Fondamentaux Python', 'duree' => '2 sem', 'description' => 'Variables, types, boucles et fonctions'],
                ['numero' => 2, 'titre' => 'Structures de donnees', 'duree' => '2 sem', 'description' => 'Listes, dictionnaires, tuples et sets'],
                ['numero' => 3, 'titre' => 'Programmation orientee objet', 'duree' => '2 sem', 'description' => 'Classes, heritage et polymorphisme'],
                ['numero' => 4, 'titre' => 'Data Science avec Python', 'duree' => '3 sem', 'description' => 'Pandas, NumPy et visualisation'],
                ['numero' => 5, 'titre' => 'Web Development', 'duree' => '2 sem', 'description' => 'Flask, Django et APIs REST'],
                ['numero' => 6, 'titre' => 'Projet Final', 'duree' => '1 sem', 'description' => 'Application complete de A a Z'],
            ],
            'progression_skill' => [
                'debut' => 20,
                'fin' => 85,
                'actuel' => 45,
            ],
        ];

        return $this->render('front/learning_path/detail.html.twig', [
            'parcours' => $parcours,
        ]);
    }
}