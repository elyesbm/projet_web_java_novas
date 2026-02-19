<?php

namespace App\EventListener;

use App\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

class TwoFactorAuthenticationListener implements EventSubscriberInterface
{
    public function __construct(
        private RouterInterface $router,
        private RequestStack $requestStack,
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            SecurityEvents::INTERACTIVE_LOGIN => 'onInteractiveLogin',
        ];
    }

    public function onInteractiveLogin(InteractiveLoginEvent $event): void
    {
        $user = $event->getAuthenticationToken()->getUser();

        // Vérifier si l'utilisateur est une instance de User et si la 2FA est activée
        if ($user instanceof User && $user->isTwoFactorEnabled()) {
            $request = $event->getRequest();
            $session = $request->getSession();

            // Stocker l'utilisateur en session pour la vérification 2FA
            $session->set('2fa_user_pending', [
                'id' => $user->getId(),
                'email' => $user->getEMAIL(),
            ]);

            // Invalider la session d'authentification actuelle
            $session->invalidate();

            // Créer une nouvelle session avec les données de 2FA
            $request->getSession()->set('2fa_user_pending', [
                'id' => $user->getId(),
                'email' => $user->getEMAIL(),
            ]);
        }
    }
}
