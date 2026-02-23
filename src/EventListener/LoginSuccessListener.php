<?php

namespace App\EventListener;

use App\Entity\User;
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
        /** @var User $user */
        $user = $event->getUser();
        $roles = $user->getRoles();

        // Si l'utilisateur a activé la 2FA, on le redirige vers la page de vérification
        // Note: TwoFactorAuthenticationListener s'occupe de mettre l'utilisateur en "pending"
        // et d'invalider la session pour qu'il ne soit pas vraiment connecté.
        if ($user instanceof User && $user->isTwoFactorEnabled()) {
            $event->setResponse(new RedirectResponse(
                $this->urlGenerator->generate('app_2fa_verify')
            ));
            return;
        }

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
