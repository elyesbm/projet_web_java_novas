<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Security;

#[Route('/admin', name: 'app_admin_')]
class DashboardController extends AbstractController
{
    public function __construct(private Security $security)
    {
    }

    #[Route('/', name: 'dashboard')]
    public function index(): Response
    {
        $user = $this->security->getUser();

        return $this->render('admin/dashboard.html.twig', [
            'user' => $user,
        ]);
    }
}
