<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * Affiche l'outil de génération d'images (Hugging Face) et les fichiers utilisés.
 */
#[AsCommand(
    name: 'app:image-service',
    description: 'Affiche l\'outil de génération d\'images utilisé (Hugging Face) et les fichiers associés.',
)]
class ImageServiceCommand extends Command
{
    public function __construct(
        private ParameterBagInterface $params
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Outil de génération d\'images');
        $io->success('Outil actif : Hugging Face.');
        $io->writeln('Fichiers utilisés :');
        $io->listing([
            'src/Service/HuggingFaceImageService.php',
            'scripts/hf_image.py (si HF_IMAGE_SCRIPT est défini dans .env)',
        ]);

        $hfToken = trim((string) $this->params->get('app.hf_image.token'));
        if (empty($hfToken)) {
            $io->warning('HF_TOKEN n\'est pas défini. Définissez-le dans .env.local pour activer la génération d\'images.');
        }

        return Command::SUCCESS;
    }
}
