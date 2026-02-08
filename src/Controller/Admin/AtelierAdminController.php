<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Atelier;
use App\Repository\AtelierRepository;
use App\Form\AtelierType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


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



    #[Route('/{id}/edit', name: 'edit')]
    public function edit(int $id): Response
    {
        return $this->render('admin/atelier/form.html.twig', [
            'mode' => 'edit',
            'id' => $id
        ]);
    }
}