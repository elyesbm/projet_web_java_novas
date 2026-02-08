<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Atelier;
use App\Repository\AtelierRepository;
use App\Form\AtelierType;
use Doctrine\ORM\EntityManagerInterface;


#[Route('/admin/ateliers', name: 'app_admin_ateliers_')]
class AtelierAdminController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(AtelierRepository $atelierRepository): Response
    {
        $ateliers = $atelierRepository->findAll();

        return $this->render('admin/atelier/list.html.twig', [
            'ateliers' => $ateliers,
        ]);
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $atelier = new Atelier();

        $form = $this->createForm(AtelierType::class, $atelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($atelier);
            $em->flush();

            return $this->redirectToRoute('app_admin_ateliers_list');
        }

        return $this->render('admin/atelier/form.html.twig', [
            'mode' => 'create',
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', requirements: ['id' => '\d+'])]
    public function edit(int $id, Request $request, AtelierRepository $atelierRepository, EntityManagerInterface $em): Response
    {
        $atelier = $atelierRepository->find($id);
        if (!$atelier) {
            throw $this->createNotFoundException('Atelier introuvable.');
        }

        $form = $this->createForm(AtelierType::class, $atelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('app_admin_ateliers_list');
        }

        return $this->render('admin/atelier/form.html.twig', [
            'mode' => 'edit',
            'form' => $form,
            'atelier' => $atelier,
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(int $id, Request $request, AtelierRepository $atelierRepository, EntityManagerInterface $em): Response
    {
        $atelier = $atelierRepository->find($id);
        if (!$atelier) {
            throw $this->createNotFoundException('Atelier introuvable.');
        }

        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('delete' . $id, $token)) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $em->remove($atelier);
        $em->flush();

        return $this->redirectToRoute('app_admin_ateliers_list');
    }
}