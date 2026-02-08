<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    
    #[Route('/profile', name: 'app_user_profile')]
    public function profile(): Response
    {
        return $this->render('front/user/profile.html.twig');
    }

}