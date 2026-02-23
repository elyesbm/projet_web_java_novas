<?php

namespace App\Command;

use App\Entity\ScoreHistory;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Génère des données de démonstration pour le graphe Analytics.
 * Usage: php bin/console app:score-history:seed
 */
#[AsCommand(
    name: 'app:score-history:seed',
    description: 'Génère des données de démo pour le graphe Analytics Scores (7 derniers jours)',
)]
class SeedScoreHistoryCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $em,
        private UserRepository         $userRepository,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $users = $this->userRepository->findAll();
        if (empty($users)) {
            $io->error('Aucun utilisateur en base. Créez des utilisateurs avant de seeder.');
            return Command::FAILURE;
        }

        $actions = [
            ScoreHistory::ACTION_CV_UPLOAD,
            ScoreHistory::ACTION_SKILL_ADDED,
            ScoreHistory::ACTION_ATELIER_DONE,
            ScoreHistory::ACTION_PROFILE_UPDATE,
        ];

        $actionDetails = [
            ScoreHistory::ACTION_CV_UPLOAD       => 'cv_profil.pdf',
            ScoreHistory::ACTION_SKILL_ADDED     => 'Docker / Kubernetes',
            ScoreHistory::ACTION_ATELIER_DONE    => 'Atelier Communication Agile',
            ScoreHistory::ACTION_PROFILE_UPDATE  => null,
        ];

        $count = 0;

        for ($daysAgo = 6; $daysAgo >= 0; $daysAgo--) {
            // 2 à 5 événements par jour
            $eventsPerDay = random_int(2, 5);

            for ($e = 0; $e < $eventsPerDay; $e++) {
                $user      = $users[array_rand($users)];
                $action    = $actions[array_rand($actions)];
                $oldCv     = random_int(35, 80);
                $gain      = random_int(1, 8);
                $newCv     = min($oldCv + $gain, 100);
                $oldMat    = random_int(30, 75);
                $oldComp   = random_int(25, 70);

                // Heure aléatoire dans la journée
                $hour   = random_int(8, 20);
                $minute = random_int(0, 59);
                $date   = (new \DateTime("-{$daysAgo} days"))->setTime($hour, $minute);

                $entry = new ScoreHistory();
                $entry->setUser($user)
                      ->setActionType($action)
                      ->setActionDetail($actionDetails[$action])
                      ->setOldCvScore($oldCv)
                      ->setNewCvScore($newCv)
                      ->setOldMaturityScore($oldMat)
                      ->setNewMaturityScore(min($oldMat + random_int(1, 5), 100))
                      ->setOldCompetitivenessIndex($oldComp)
                      ->setNewCompetitivenessIndex(min($oldComp + random_int(1, 4), 100))
                      ->setRecordedAt($date);

                $this->em->persist($entry);
                $count++;
            }
        }

        $this->em->flush();

        $io->success("✅ {$count} entrées de démonstration créées sur 7 jours pour " . count($users) . " utilisateurs.");
        return Command::SUCCESS;
    }
}
