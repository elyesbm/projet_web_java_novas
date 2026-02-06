<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/jobs', name: 'app_admin_jobs_')]
class JobsAdminController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(): Response
    {
        return $this->render('admin/jobs/list.html.twig');
    }

    #[Route('/new', name: 'new')]
    public function new(): Response
    {
        return $this->render('admin/jobs/form.html.twig', [
            'mode' => 'create'
        ]);
    }

    #[Route('/{id}/edit', name: 'edit')]
    public function edit(int $id): Response
    {
        return $this->render('admin/jobs/form.html.twig', [
            'mode' => 'edit',
            'id' => $id
        ]);
    }
}