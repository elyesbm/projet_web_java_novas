<?php

namespace App\EventListener;

use App\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;

class RequireTwoFactorListener implements EventSubscriberInterface
{
    private array $whitelist = [
        'app_login',
        'app_login_face',
        'app_logout',
        'app_register',
        'app_home',
        'app_forgot_password',
        'app_reset_password',
        'app_2fa_setup',
        'app_2fa_setup_confirm',
        'app_2fa_verify',
        '_profiler',
        '_wdt',
    ];

    public function __construct(
        private Security $security,
        private RouterInterface $router,
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 5],
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        $currentRoute = $request->attributes->get('_route');

        // Ne pas vérifier les routes en whitelist
        if (in_array($currentRoute, $this->whitelist, true)) {
            return;
        }

        // Vérifier si l'utilisateur est connecté
        $user = $this->security->getUser();
        if (!($user instanceof User)) {
            return; // Pas connecté, ignorer
        }

        // Si l'utilisateur n'a pas activé la 2FA, le rediriger
        if (!$user->isTwoFactorEnabled()) {
            $url = $this->router->generate('app_2fa_setup');
            
            // Affichage du message flash
            $request->getSession()->getFlashBag()->add(
                'warning',
                'Veuillez activer l\'authentification à deux facteurs pour continuer.'
            );

            $event->setResponse(new RedirectResponse($url));
        }
    }
}
