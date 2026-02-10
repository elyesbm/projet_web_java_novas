<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/ateliers', name: 'app_admin_ateliers_')]
class AtelierAdminController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(): Response
    {
        return $this->render('admin/atelier/list.html.twig');
    }

    #[Route('/new', name: 'new')]
    public function new(): Response
    {
        return $this->render('admin/atelier/form.html.twig', [
            'mode' => 'create'
        ]);
    }

    #[Route('/{id}/edit', name: 'edit')]
    public function edit(int $id): Response
    {
        return $this->render('admin/atelier/form.html.twig', [
            'mode' => 'edit',
            'id' => $id
        ]);
    }
}