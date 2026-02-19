<?php

namespace App\Security;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function __construct(
        private readonly Security $security,
        private readonly UrlGeneratorInterface $urlGenerator,
    ) {
    }

    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        $user = $this->security->getUser();
        if ($user === null) {
            return new RedirectResponse($this->urlGenerator->generate('app_login'));
        }

        $roles = method_exists($user, 'getRoles') ? $user->getRoles() : [];
        $path = $request->getPathInfo();
        $isAdmin = in_array('ROLE_ADMIN', $roles, true);

        if ($isAdmin) {
            return new RedirectResponse($this->urlGenerator->generate('app_admin_dashboard'));
        }

        if (str_starts_with($path, '/admin')) {
            return new RedirectResponse($this->urlGenerator->generate('app_user_profile'));
        }

        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }
}

