<?php

namespace App\Controller\Front;

use App\Repository\AtelierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/ateliers')]
class AtelierController extends AbstractController
{
    #[Route('', name: 'app_ateliers')]
    public function index(AtelierRepository $atelierRepository): Response
    {
        $ateliers = $atelierRepository->findAll();

        return $this->render('front/reservation/ateliers.html.twig', [
            'ateliers' => $ateliers,
        ]);
    }
}