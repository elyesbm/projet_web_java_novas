<?php

namespace App\EventSubscriber;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class SecurityCacheSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly Security $security,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }

    public function onKernelResponse(ResponseEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        $response = $event->getResponse();
        $path = $request->getPathInfo();
        $route = (string) $request->attributes->get('_route', '');
        $isAuthenticated = $this->security->getUser() !== null;

        $isProtectedPath = str_starts_with($path, '/admin')
            || str_starts_with($path, '/user')
            || str_starts_with($path, '/reservation')
            || str_starts_with($path, '/skills')
            || str_starts_with($path, '/learning-paths');

        $isAuthRoute = in_array($route, ['app_login', 'app_logout', '_logout_main'], true)
            || $path === '/logout';

        if ($isAuthenticated || $isProtectedPath || $isAuthRoute) {
            $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, private, max-age=0');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');
        }

        if ($path === '/logout') {
            $response->headers->set('Clear-Site-Data', '"cache", "storage"');
        }
    }
}

