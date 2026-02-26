<?php

declare(strict_types=1);

namespace App\Command;

use App\Repository\SkillRepository;
use App\Service\SkillMarketStatsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:skill:refresh-market-stats',
    description: 'Rafraîchit les statistiques marché (offres, score, tendance) pour les skills'
)]
class RefreshSkillMarketStatsCommand extends Command
{
    public function __construct(
        private readonly SkillRepository $skillRepository,
        private readonly SkillMarketStatsService $marketStatsService,
        private readonly EntityManagerInterface $entityManager,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('id', InputArgument::OPTIONAL, 'ID du skill à rafraîchir (optionnel, sinon tous)')
            ->addOption('force', 'f', InputOption::VALUE_NONE, 'Forcer le rafraîchissement même si déjà récent');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $id = $input->getArgument('id');
        $force = $input->getOption('force');

        if ($this->marketStatsService->isApiConfigured()) {
            $io->info('Utilisation de l\'API Adzuna pour les statistiques marché.');
        } else {
            $io->note('API Adzuna non configurée (ADZUNA_APP_ID, ADZUNA_APP_KEY). Données simulées utilisées.');
            $io->text('Pour des données réelles : https://developer.adzuna.com/');
        }

        $skills = [];
        if ($id !== null) {
            $skill = $this->skillRepository->find((int) $id);
            if (!$skill) {
                $io->error(sprintf('Skill #%s introuvable.', $id));
                return Command::FAILURE;
            }
            $skills = [$skill];
        } else {
            $skills = $this->skillRepository->findBy([], ['nom_skill' => 'ASC']);
        }

        if (empty($skills)) {
            $io->warning('Aucun skill à traiter.');
            return Command::SUCCESS;
        }

        $io->progressStart(\count($skills));
        $updated = 0;

        foreach ($skills as $skill) {
            $result = $this->marketStatsService->fetchAndUpdateSkillStats($skill);
            if ($result !== null) {
                $updated++;
                $io->text(sprintf(
                    '  %s : %d offres, score %d/5, %s',
                    $skill->getNomSkill(),
                    $result['nombre_offres'],
                    $result['score_demande'],
                    $result['tendance'],
                ));
            }
            $io->progressAdvance();
        }

        $io->progressFinish();
        $this->entityManager->flush();

        $io->success(sprintf('%d skill(s) mis à jour.', $updated));
        return Command::SUCCESS;
    }
}
