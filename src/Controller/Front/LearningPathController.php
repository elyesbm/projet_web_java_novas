<?php

namespace App\Controller\Front;

use App\Repository\LearningPathRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/learning-paths')]
class LearningPathController extends AbstractController
{
    public function __construct(
        private LearningPathRepository $learningPathRepository,
    ) {
    }

    #[Route('/', name: 'app_learning_paths_index')]
    public function index(): Response
    {
        $parcours = $this->learningPathRepository->findBy(
            ['statut_path' => 1],
            ['titre_path' => 'ASC']
        );

        return $this->render('front/learning_path/index.html.twig', [
            'parcours' => $parcours,
        ]);
    }

    #[Route('/{id}/detail', name: 'app_learning_path_detail', requirements: ['id' => '\d+'])]
    public function detail(int $id): Response
    {
        $parcours = $this->learningPathRepository->find($id);
        if (!$parcours) {
            throw $this->createNotFoundException('Parcours introuvable.');
        }

        return $this->render('front/learning_path/detail.html.twig', [
            'parcours' => $parcours,
        ]);
    }
}
