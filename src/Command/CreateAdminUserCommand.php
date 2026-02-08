<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-admin-user',
    description: 'Crée un utilisateur avec le rôle Admin (pour premier accès backoffice).',
)]
class CreateAdminUserCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $em,
        private UserRepository $userRepository,
        private UserPasswordHasherInterface $passwordHasher,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addOption('email', null, InputOption::VALUE_OPTIONAL, 'Email de l’admin', 'admin@novas.fr')
            ->addOption('password', null, InputOption::VALUE_OPTIONAL, 'Mot de passe', 'password')
            ->addOption('nom', null, InputOption::VALUE_OPTIONAL, 'Nom', 'Admin')
            ->addOption('prenom', null, InputOption::VALUE_OPTIONAL, 'Prénom', 'NoVas');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getOption('email');
        $password = $input->getOption('password');
        $nom = $input->getOption('nom');
        $prenom = $input->getOption('prenom');

        if ($this->userRepository->findOneBy(['EMAIL' => $email])) {
            $io->warning("Un utilisateur avec l’email \"{$email}\" existe déjà.");
            return Command::FAILURE;
        }

        $user = new User();
        $user->setEMAIL($email);
        $user->setPassword($this->passwordHasher->hashPassword($user, $password));
        $user->setNOM($nom);
        $user->setPRENOM($prenom);
        $user->setROLE('ROLE_ADMIN');
        $user->setIMAGE('');
        $user->setNUMERO(null);

        $this->em->persist($user);
        $this->em->flush();

        $io->success("Utilisateur admin créé : {$email} (mot de passe : {$password}). Connectez-vous au backoffice avec ces identifiants.");
        return Command::SUCCESS;
    }
}
