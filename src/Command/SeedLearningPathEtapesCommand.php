<?php

namespace App\Command;

use App\Entity\LearningPath;
use App\Entity\LearningPathEtape;
use App\Repository\LearningPathRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:seed-learning-path-etapes', description: 'Ajoute des étapes exemples aux parcours sans étapes')]
class SeedLearningPathEtapesCommand extends Command
{
    public function __construct(
        private LearningPathRepository $learningPathRepository,
        private EntityManagerInterface $entityManager,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $parcours = $this->learningPathRepository->findAll();

        $count = 0;
        foreach ($parcours as $path) {
            if ($path->getEtapes()->count() > 0) {
                continue;
            }
            $this->addEtapesForPath($path);
            $count++;
        }

        if ($count > 0) {
            $this->entityManager->flush();
            $io->success(sprintf('%d parcours enrichi(s) avec des étapes exemples.', $count));
        } else {
            $io->note('Aucun parcours sans étapes trouvé.');
        }

        return Command::SUCCESS;
    }

    private function addEtapesForPath(LearningPath $path): void
    {
        $niveau = $path->getNiveauPath() ?? 1;
        $etapes = $this->buildEtapesForNiveau($niveau);
        $ordre = 1;
        foreach ($etapes as $data) {
            $etape = new LearningPathEtape();
            $etape->setTitre($data['titre']);
            $etape->setDescription($data['description'] ?? null);
            $etape->setTypeEtape($data['type']);
            $etape->setUrl($data['url'] ?? null);
            $etape->setDureeMinutes($data['duree']);
            $etape->setOrdre($ordre++);
            $etape->setNiveauMin($data['niveau_min']);
            $path->addEtape($etape);
        }
    }

    /** @return array<int, array{titre: string, description?: string, type: string, url?: string, duree: int, niveau_min: int}> */
    private function buildEtapesForNiveau(int $niveau): array
    {
        $base = [
            ['titre' => 'Introduction et prérequis', 'description' => 'Découvrez les bases et ce dont vous aurez besoin.', 'type' => LearningPathEtape::TYPE_POST, 'duree' => 10, 'niveau_min' => 1],
            ['titre' => 'Vidéo : Premiers pas', 'description' => 'Une vidéo pour démarrer en douceur.', 'type' => LearningPathEtape::TYPE_VIDEO, 'url' => 'https://www.youtube.com/', 'duree' => 15, 'niveau_min' => 1],
            ['titre' => 'Exercice pratique n°1', 'description' => 'Mettez en pratique les concepts vus.', 'type' => LearningPathEtape::TYPE_EXERCICE, 'duree' => 20, 'niveau_min' => 1],
            ['titre' => 'Quiz de validation', 'description' => 'Vérifiez que vous avez bien compris.', 'type' => LearningPathEtape::TYPE_QUIZ, 'duree' => 10, 'niveau_min' => 1],
        ];
        if ($niveau >= 2) {
            $base = array_merge($base, [
                ['titre' => 'Approfondissement intermédiaire', 'description' => 'Consolidez vos acquis avec des notions plus avancées.', 'type' => LearningPathEtape::TYPE_POST, 'duree' => 25, 'niveau_min' => 2],
                ['titre' => 'Vidéo : Cas d\'usage complexes', 'description' => 'Analyse de situations réelles.', 'type' => LearningPathEtape::TYPE_VIDEO, 'url' => 'https://www.youtube.com/', 'duree' => 30, 'niveau_min' => 2],
                ['titre' => 'Exercice projet', 'description' => 'Projet complet pour appliquer les concepts.', 'type' => LearningPathEtape::TYPE_EXERCICE, 'duree' => 45, 'niveau_min' => 2],
            ]);
        }
        if ($niveau >= 3) {
            $base = array_merge($base, [
                ['titre' => 'Maîtrise avancée', 'description' => 'Techniques avancées et bonnes pratiques experts.', 'type' => LearningPathEtape::TYPE_POST, 'duree' => 40, 'niveau_min' => 3],
                ['titre' => 'Vidéo : Expert talk', 'description' => 'Intervention d\'experts sur les derniers développements.', 'type' => LearningPathEtape::TYPE_VIDEO, 'url' => 'https://www.youtube.com/', 'duree' => 50, 'niveau_min' => 3],
                ['titre' => 'Projet final avancé', 'description' => 'Projet de synthèse niveau expert.', 'type' => LearningPathEtape::TYPE_EXERCICE, 'duree' => 90, 'niveau_min' => 3],
                ['titre' => 'Certification', 'description' => 'Quiz final pour valider la maîtrise.', 'type' => LearningPathEtape::TYPE_QUIZ, 'duree' => 30, 'niveau_min' => 3],
            ]);
        }
        return $base;
    }
}
