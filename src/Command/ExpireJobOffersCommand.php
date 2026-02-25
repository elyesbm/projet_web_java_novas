<?php

namespace App\Command;

use App\Enum\OffreStatut;
use App\Repository\OffrejobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:expire-job-offers',
    description: 'Expire automatiquement les offres ouvertes dont la date d expiration est depassee.'
)]
class ExpireJobOffersCommand extends Command
{
    public function __construct(
        private readonly OffrejobRepository $offrejobRepository,
        private readonly EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $now = new \DateTimeImmutable();

        $offresToExpire = $this->offrejobRepository->findExpiredOpenedOffers($now);
        foreach ($offresToExpire as $offre) {
            $offre->setStatutOffre(OffreStatut::EXPIREE);
        }

        if ($offresToExpire !== []) {
            $this->entityManager->flush();
        }

        $io->success(sprintf('%d offre(s) expiree(s).', count($offresToExpire)));
        $io->writeln('Cron exemple: */15 * * * * php /path/to/project/bin/console app:expire-job-offers --env=prod');

        return Command::SUCCESS;
    }
}

