<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        // Login template was removed; redirect to marketplace index instead
        return $this->redirectToRoute('app_marketplace_index');
    }

    #[Route('/register', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('front/auth/register.html.twig');
    }
}