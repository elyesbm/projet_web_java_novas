<?php

namespace App\Security;

use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!method_exists($user, 'getACTIF')) {
            return;
        }

        if (!$user->getACTIF()) {
            throw new AuthenticationException('Votre compte est désactivé par la plateforme. Veuillez contacter l\'administration.');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        // no-op
    }
}

