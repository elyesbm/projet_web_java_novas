<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class LoginSuccessListener
{
    public function __construct(
        private UrlGeneratorInterface $urlGenerator
    ) {
    }

    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();
        $roles = $user->getRoles();

        if (in_array('ROLE_ADMIN', $roles, true)) {
            $event->setResponse(new RedirectResponse(
                $this->urlGenerator->generate('app_admin_dashboard')
            ));
            return;
        }
        if (in_array('ROLE_PSY', $roles, true)) {
            $event->setResponse(new RedirectResponse(
                $this->urlGenerator->generate('app_publications_index')
            ));
            return;
        }

        // Étudiant (ROLE_USER) par défaut
        $event->setResponse(new RedirectResponse(
            $this->urlGenerator->generate('app_user_profile')
        ));
    }
}
