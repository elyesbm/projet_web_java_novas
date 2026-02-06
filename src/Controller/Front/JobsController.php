<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class JobsController extends AbstractController
{
    // Route qui redirige /jobs/ vers /jobs
    
    #[Route('/jobs', name: 'app_jobs_index')]
    public function index(): Response
    {
        $jobs = [
            [
                'id' => 1,
                'titre' => 'Tutorat Mathématiques L1-L2',
                'description' => 'Je recherche un étudiant en M1 ou M2 Mathématiques pour donner des cours de soutien en analyse et algèbre linéaire. 2h par semaine minimum.',
                'type' => 'tutorat',
                'localisation' => 'Campus Lyon 1',
                'duree' => '2h/semaine',
                'remuneration' => 25,
                'datePublication' => new \DateTime('2024-02-15'),
                'nbCandidatures' => 5,
                'matiere' => 'Mathématiques',
                'competencesRequises' => ['Analyse', 'Algèbre', 'Pédagogie'],
                'createur' => [
                    'nom' => 'Marie D.',
                    'niveau' => 'L3 Informatique',
                    'email' => 'marie@example.com'
                ]
            ],
            [
                'id' => 2,
                'titre' => 'Aide au projet Symfony',
                'description' => 'Cherche développeur PHP/Symfony expérimenté pour m\'aider sur mon projet de fin d\'année. Architecture complexe avec API REST.',
                'type' => 'aide',
                'localisation' => 'En ligne',
                'duree' => 'Projet 1 mois',
                'remuneration' => 30,
                'datePublication' => new \DateTime('2024-02-14'),
                'nbCandidatures' => 3,
                'matiere' => 'Informatique',
                'competencesRequises' => ['PHP', 'Symfony', 'MySQL', 'API REST'],
                'createur' => [
                    'nom' => 'Lucas M.',
                    'niveau' => 'L2 Droit',
                    'email' => 'lucas@example.com'
                ]
            ],
            [
                'id' => 3,
                'titre' => 'Cours de guitare débutant',
                'description' => 'Donne cours de guitare acoustique pour débutants. Méthode progressive, apprentissage des accords de base et rythmique.',
                'type' => 'pratique',
                'localisation' => 'Studio Campus',
                'duree' => '1h/semaine',
                'remuneration' => 20,
                'datePublication' => new \DateTime('2024-02-13'),
                'nbCandidatures' => 8,
                'matiere' => 'Musique',
                'competencesRequises' => ['Guitare', 'Pédagogie', 'Patience'],
                'createur' => [
                    'nom' => 'Thomas B.',
                    'niveau' => 'M1 Info',
                    'email' => 'thomas@example.com'
                ]
            ],
            [
                'id' => 4,
                'titre' => 'Projet Data Science - Python',
                'description' => 'Recherche binôme pour projet d\'analyse de données. Dataset de 50k entrées, visualisation et modélisation ML.',
                'type' => 'projet',
                'localisation' => 'Bibliothèque',
                'duree' => '3 semaines',
                'remuneration' => 0,
                'datePublication' => new \DateTime('2024-02-12'),
                'nbCandidatures' => 2,
                'matiere' => 'Data Science',
                'competencesRequises' => ['Python', 'Pandas', 'Scikit-learn', 'Collaboration'],
                'createur' => [
                    'nom' => 'Sarah C.',
                    'niveau' => 'M2 Maths',
                    'email' => 'sarah@example.com'
                ]
            ],
            [
                'id' => 5,
                'titre' => 'Soutien Physique-Chimie Terminale',
                'description' => 'Préparation au bac pour élève de terminale S. Cours particuliers à domicile ou en visio.',
                'type' => 'tutorat',
                'localisation' => 'Villeurbanne',
                'duree' => '1.5h/semaine',
                'remuneration' => 28,
                'datePublication' => new \DateTime('2024-02-11'),
                'nbCandidatures' => 12,
                'matiere' => 'Physique-Chimie',
                'competencesRequises' => ['Physique', 'Chimie', 'Pédagogie'],
                'createur' => [
                    'nom' => 'Emma P.',
                    'niveau' => 'L3 Design',
                    'email' => 'emma@example.com'
                ]
            ],
            [
                'id' => 6,
                'titre' => 'Développement app mobile Flutter',
                'description' => 'Besoin d\'aide pour finaliser une app mobile cross-platform. UI/UX déjà faite, besoin de connecter les APIs.',
                'type' => 'aide',
                'localisation' => 'En ligne',
                'duree' => '2 semaines',
                'remuneration' => 35,
                'datePublication' => new \DateTime('2024-02-10'),
                'nbCandidatures' => 4,
                'matiere' => 'Développement Mobile',
                'competencesRequises' => ['Flutter', 'Dart', 'Firebase', 'REST API'],
                'createur' => [
                    'nom' => 'Alexandre K.',
                    'niveau' => 'L1 Médecine',
                    'email' => 'alex@example.com'
                ]
            ],
        ];

        return $this->render('front/jobs/index.html.twig', [
            'jobs' => $jobs,
        ]);
    }

    #[Route('/jobs/offre/{id}', name: 'app_jobs_detail', requirements: ['id' => '\d+'])]
    public function detail(int $id): Response
    {
        $job = [
            'id' => $id,
            'titre' => 'Tutorat Mathématiques L1-L2',
            'description' => "Je recherche un étudiant en M1 ou M2 Mathématiques pour donner des cours de soutien en analyse et algèbre linéaire.\n\nProfil recherché :\n- Maîtrise du programme L1/L2\n- Patience et pédagogie\n- Disponible 2h/semaine minimum\n\nLe cours se déroulera sur le campus, bibliothèque ou salle libre selon les disponibilités.",
            'type' => 'tutorat',
            'localisation' => 'Campus Lyon 1 - Bibliothèque',
            'duree' => '2h/semaine (semestre complet)',
            'remuneration' => 25,
            'datePublication' => new \DateTime('2024-02-15'),
            'nbCandidatures' => 5,
            'matiere' => 'Mathématiques (Analyse, Algèbre)',
            'competencesRequises' => ['Analyse réelle', 'Algèbre linéaire', 'Pédagogie', 'Patience', 'Communication'],
            'createur' => [
                'nom' => 'Marie Dupont',
                'niveau' => 'L3 Informatique',
                'email' => 'marie.dupont@example.com',
                'membreDepuis' => '2022',
                'note' => 4.8,
                'annonces' => 3
            ]
        ];

        $jobsSimilaires = [
            ['id' => 7, 'titre' => 'Cours de physique niveau licence', 'remuneration' => 22, 'type' => 'tutorat', 'localisation' => 'Campus'],
            ['id' => 8, 'titre' => 'Tutorat Algorithmique', 'remuneration' => 28, 'type' => 'tutorat', 'localisation' => 'En ligne'],
            ['id' => 9, 'titre' => 'Aide préparation concours', 'remuneration' => 30, 'type' => 'aide', 'localisation' => 'Villeurbanne'],
        ];

        $dejaPostule = false;
        $isCreateur = false;

        return $this->render('front/jobs/detail.html.twig', [
            'job' => $job,
            'jobsSimilaires' => $jobsSimilaires,
            'dejaPostule' => $dejaPostule,
            'isCreateur' => $isCreateur,
        ]);
    }

    #[Route('/jobs/offre/{id}/postuler', name: 'app_jobs_postuler', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function postuler(Request $request, int $id): Response
    {
        return $this->redirectToRoute('app_jobs_mes_candidatures');
    }

    #[Route('/jobs/mes-offres', name: 'app_jobs_mes_offres')]
    public function mesOffres(): Response
    {
        $jobs = [
            [
                'id' => 1,
                'titre' => 'Tutorat Mathématiques L1-L2',
                'description' => 'Je recherche un étudiant en M1 ou M2 Mathématiques pour donner des cours de soutien...',
                'type' => 'tutorat',
                'localisation' => 'Campus Lyon 1',
                'duree' => '2h/semaine',
                'remuneration' => 25,
                'datePublication' => new \DateTime('2024-02-15'),
                'nbCandidatures' => 5,
                'statut' => 'active'
            ],
            [
                'id' => 10,
                'titre' => 'Aide projet Web PHP',
                'description' => 'Besoin d\'aide sur un projet Symfony...',
                'type' => 'aide',
                'localisation' => 'En ligne',
                'duree' => 'Projet 2 semaines',
                'remuneration' => 30,
                'datePublication' => new \DateTime('2024-02-01'),
                'nbCandidatures' => 2,
                'statut' => 'pourvue'
            ],
        ];

        $stats = [
            'total' => 2,
            'actives' => 1,
            'candidatures' => 7,
            'pourvues' => 1
        ];

        return $this->render('front/jobs/mes_offres.html.twig', [
            'jobs' => $jobs,
            'stats' => $stats,
        ]);
    }

    #[Route('/jobs/ajouter', name: 'app_jobs_ajouter')]
    public function ajouter(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            return $this->redirectToRoute('app_jobs_mes_offres');
        }

        return $this->render('front/jobs/ajouter.html.twig');
    }

    #[Route('/jobs/offre/{id}/modifier', name: 'app_jobs_modifier', requirements: ['id' => '\d+'])]
    public function modifier(Request $request, int $id): Response
    {
        $job = [
            'id' => $id,
            'type' => 'tutorat',
            'titre' => 'Tutorat Mathématiques L1-L2',
            'description' => 'Description existante...',
            'matiere' => 'Mathématiques',
            'localisation' => 'Campus Lyon 1',
            'duree' => '2h/semaine',
            'remuneration' => 25,
            'competences' => 'Analyse, Algèbre, Pédagogie'
        ];

        if ($request->isMethod('POST')) {
            return $this->redirectToRoute('app_jobs_mes_offres');
        }

        return $this->render('front/jobs/ajouter.html.twig', [
            'job' => $job,
            'modification' => true
        ]);
    }

    #[Route('/jobs/offre/{id}/supprimer', name: 'app_jobs_supprimer', requirements: ['id' => '\d+'])]
    public function supprimer(int $id): Response
    {
        return $this->redirectToRoute('app_jobs_mes_offres');
    }

    #[Route('/jobs/offre/{id}/candidatures', name: 'app_jobs_candidatures', requirements: ['id' => '\d+'])]
    public function candidatures(int $id): Response
    {
        $job = [
            'id' => $id,
            'titre' => 'Tutorat Mathématiques L1-L2',
        ];

        $candidatures = [
            [
                'id' => 1,
                'candidat' => [
                    'nom' => 'Jean Martin',
                    'niveau' => 'M1 Mathématiques',
                    'email' => 'jean@example.com',
                    'note' => 4.9
                ],
                'message' => 'Bonjour, je suis très intéressé par cette offre. J\'ai déjà donné des cours particuliers pendant 2 ans et je maîtrise parfaitement le programme de L1/L2. Je suis disponible tous les après-midis.',
                'date' => new \DateTime('2024-02-16'),
                'statut' => 'en_attente'
            ],
            [
                'id' => 2,
                'candidat' => [
                    'nom' => 'Sophie Bernard',
                    'niveau' => 'M2 Mathématiques Appliquées',
                    'email' => 'sophie@example.com',
                    'note' => 4.7
                ],
                'message' => 'Je suis en M2 et je cherche à financer mes études. J\'ai une bonne expérience du tutorat et je suis patiente. Je peux commencer dès la semaine prochaine.',
                'date' => new \DateTime('2024-02-15'),
                'statut' => 'en_attente'
            ],
            [
                'id' => 3,
                'candidat' => [
                    'nom' => 'Pierre Durand',
                    'niveau' => 'L3 Mathématiques',
                    'email' => 'pierre@example.com',
                    'note' => 4.5
                ],
                'message' => 'Je suis en L3 mais j\'ai validé tous mes crédits L1/L2 avec mention très bien. Je suis motivé et sérieux.',
                'date' => new \DateTime('2024-02-14'),
                'statut' => 'acceptee'
            ],
        ];

        return $this->render('front/jobs/candidatures.html.twig', [
            'job' => $job,
            'candidatures' => $candidatures,
        ]);
    }

    #[Route('/jobs/candidature/{id}/accepter', name: 'app_jobs_accepter_candidature', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function accepterCandidature(int $id): Response
    {
        return $this->redirectToRoute('app_jobs_candidatures', ['id' => 1]);
    }

    #[Route('/jobs/candidature/{id}/refuser', name: 'app_jobs_refuser_candidature', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function refuserCandidature(int $id): Response
    {
        return $this->redirectToRoute('app_jobs_candidatures', ['id' => 1]);
    }

    #[Route('/jobs/mes-candidatures', name: 'app_jobs_mes_candidatures')]
    public function mesCandidatures(): Response
    {
        $candidatures = [
            [
                'id' => 1,
                'job' => [
                    'id' => 1,
                    'titre' => 'Tutorat Mathématiques L1-L2',
                    'createur' => ['nom' => 'Marie D.', 'email' => 'marie@example.com'],
                    'localisation' => 'Campus Lyon 1',
                    'duree' => '2h/semaine',
                    'remuneration' => 25
                ],
                'date' => new \DateTime('2024-02-16'),
                'statut' => 'en_attente'
            ],
            [
                'id' => 2,
                'job' => [
                    'id' => 3,
                    'titre' => 'Cours de guitare débutant',
                    'createur' => ['nom' => 'Thomas B.', 'email' => 'thomas@example.com'],
                    'localisation' => 'Studio Campus',
                    'duree' => '1h/semaine',
                    'remuneration' => 20
                ],
                'date' => new \DateTime('2024-02-10'),
                'statut' => 'acceptee'
            ],
            [
                'id' => 3,
                'job' => [
                    'id' => 5,
                    'titre' => 'Soutien Physique-Chimie',
                    'createur' => ['nom' => 'Emma P.', 'email' => 'emma@example.com'],
                    'localisation' => 'Villeurbanne',
                    'duree' => '1.5h/semaine',
                    'remuneration' => 28
                ],
                'date' => new \DateTime('2024-02-05'),
                'statut' => 'refusee'
            ],
        ];

        $stats = [
            'total' => 3,
            'enAttente' => 1,
            'acceptees' => 1,
            'refusees' => 1
        ];

        return $this->render('front/jobs/mes_candidatures.html.twig', [
            'candidatures' => $candidatures,
            'stats' => $stats,
        ]);
    }
}