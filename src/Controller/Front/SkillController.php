<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/skills')]
class SkillController extends AbstractController
{
    #[Route('/', name: 'app_skills_index')]
    public function index(): Response
    {
        // Tous les skills disponibles
        $skills = [
            [
                'id' => 1,
                'nom' => 'Communication orale',
                'type' => 'soft',
                'categorie' => 'Communication',
                'niveau' => 'Intermediaire',
                'pourcentage' => 65,
                'description' => 'Capacite a exprimer des idees clairement et efficacement',
                'icon' => 'message-circle',
                'etudiants' => 234,
            ],
            [
                'id' => 2,
                'nom' => 'Python',
                'type' => 'hard',
                'categorie' => 'Programmation',
                'niveau' => 'Avance',
                'pourcentage' => 85,
                'description' => 'Maitrise du langage Python et ses frameworks',
                'icon' => 'code',
                'etudiants' => 567,
            ],
            [
                'id' => 3,
                'nom' => 'Leadership',
                'type' => 'soft',
                'categorie' => 'Management',
                'niveau' => 'Debutant',
                'pourcentage' => 35,
                'description' => 'Capacite a guider et motiver une equipe',
                'icon' => 'users',
                'etudiants' => 189,
            ],
            [
                'id' => 4,
                'nom' => 'Machine Learning',
                'type' => 'hard',
                'categorie' => 'Data Science',
                'niveau' => 'Intermediaire',
                'pourcentage' => 55,
                'description' => 'Algorithmes d\'apprentissage automatique',
                'icon' => 'brain',
                'etudiants' => 423,
            ],
            [
                'id' => 5,
                'nom' => 'Gestion du stress',
                'type' => 'soft',
                'categorie' => 'Bien-etre',
                'niveau' => 'Avance',
                'pourcentage' => 78,
                'description' => 'Techniques de gestion emotionnelle et resilience',
                'icon' => 'heart',
                'etudiants' => 312,
            ],
            [
                'id' => 6,
                'nom' => 'React.js',
                'type' => 'hard',
                'categorie' => 'Developpement Web',
                'niveau' => 'Intermediaire',
                'pourcentage' => 60,
                'description' => 'Developpement d\'interfaces modernes avec React',
                'icon' => 'layout',
                'etudiants' => 445,
            ],
        ];

        // Categories pour filtre
        $categories = ['Communication', 'Programmation', 'Management', 'Data Science', 'Bien-etre', 'Developpement Web'];

        return $this->render('front/skill/index.html.twig', [
            'skills' => $skills,
            'categories' => $categories,
        ]);
    }

    #[Route('/mes-skills', name: 'app_skills_mes')]
    public function mesSkills(): Response
    {
        // Skills de l'utilisateur connecte
        $mesSkills = [
            [
                'id' => 1,
                'nom' => 'Python',
                'type' => 'hard',
                'categorie' => 'Programmation',
                'niveau' => 'Avance',
                'pourcentage' => 85,
                'progression' => 85,
                'xp' => 8500,
                'prochain_niveau' => 10000,
                'date_acquisition' => '15 Jan 2024',
                'certifie' => true,
                'icon' => 'code',
            ],
            [
                'id' => 2,
                'nom' => 'Communication orale',
                'type' => 'soft',
                'categorie' => 'Communication',
                'niveau' => 'Intermediaire',
                'pourcentage' => 65,
                'progression' => 65,
                'xp' => 6500,
                'prochain_niveau' => 8000,
                'date_acquisition' => '22 Fev 2024',
                'certifie' => false,
                'icon' => 'message-circle',
            ],
            [
                'id' => 3,
                'nom' => 'Leadership',
                'type' => 'soft',
                'categorie' => 'Management',
                'niveau' => 'Debutant',
                'pourcentage' => 35,
                'progression' => 35,
                'xp' => 3500,
                'prochain_niveau' => 5000,
                'date_acquisition' => '10 Mar 2024',
                'certifie' => false,
                'icon' => 'users',
            ],
            [
                'id' => 4,
                'nom' => 'Machine Learning',
                'type' => 'hard',
                'categorie' => 'Data Science',
                'niveau' => 'Intermediaire',
                'pourcentage' => 55,
                'progression' => 55,
                'xp' => 5500,
                'prochain_niveau' => 7000,
                'date_acquisition' => '05 Avr 2024',
                'certifie' => false,
                'icon' => 'brain',
            ],
        ];

        return $this->render('front/skill/mes_skills.html.twig', [
            'mesSkills' => $mesSkills,
        ]);
    }

    #[Route('/ajouter', name: 'app_skills_ajouter', methods: ['GET', 'POST'])]
    public function ajouter(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            // Traiter l'ajout
            $this->addFlash('success', 'Skill ajoute avec succes !');
            return $this->redirectToRoute('app_skills_mes');
        }

        $categories = ['Communication', 'Programmation', 'Management', 'Data Science', 'Bien-etre', 'Developpement Web', 'Design', 'Marketing'];

        return $this->render('front/skill/ajouter.html.twig', [
            'categories' => $categories,
        ]);
    }
}