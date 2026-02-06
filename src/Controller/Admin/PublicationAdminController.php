<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/publications', name: 'app_admin_publications_')]
class PublicationAdminController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(): Response
    {
        return $this->render('admin/publication/list.html.twig');
    }

    #[Route('/{id}/edit', name: 'edit')]
    public function edit(int $id): Response
    {
        return $this->render('admin/publication/form.html.twig', [
            'id' => $id
        ]);
    }
}