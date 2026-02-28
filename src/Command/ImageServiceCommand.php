<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Affiche l'outil de generation d'images (Hugging Face) et les fichiers utilises.
 */
#[AsCommand(
    name: 'app:image-service',
    description: 'Affiche l\'outil de generation d\'images utilise (Hugging Face) et les fichiers associes.',
)]
class ImageServiceCommand extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Outil de generation d\'images');
        $io->success('Outil actif : Hugging Face.');
        $io->writeln('Fichiers utilises :');
        $io->listing([
            'src/Service/HuggingFaceImageService.php',
            'scripts/hf_image.py',
        ]);

        return Command::SUCCESS;
    }
}
