<?php

namespace App\Controller\Admin;

use App\Entity\LearningPath;
use App\Form\LearningPathType;
use App\Repository\LearningPathRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/skills/parcours', name: 'app_admin_learning_path_')]
class LearningPathAdminController extends AbstractController
{
    public function __construct(
        private LearningPathRepository $learningPathRepository,
        private EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->redirectToRoute('app_admin_skills_list');
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $learningPath = new LearningPath();
        $form = $this->createForm(LearningPathType::class, $learningPath);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($learningPath);
            $this->entityManager->flush();
            $this->addFlash('success', 'Parcours créé avec succès.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        return $this->render('admin/learning_path/form.html.twig', [
            'form' => $form,
            'learning_path' => $learningPath,
            'mode' => 'create',
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Request $request, int $id): Response
    {
        $learningPath = $this->learningPathRepository->find($id);
        if (!$learningPath) {
            $this->addFlash('error', 'Parcours introuvable.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        $form = $this->createForm(LearningPathType::class, $learningPath);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Parcours modifié avec succès.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        return $this->render('admin/learning_path/form.html.twig', [
            'form' => $form,
            'learning_path' => $learningPath,
            'mode' => 'edit',
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Request $request, int $id): Response
    {
        $learningPath = $this->learningPathRepository->find($id);
        if (!$learningPath) {
            $this->addFlash('error', 'Parcours introuvable.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('delete_learning_path_' . $id, $token)) {
            $this->addFlash('error', 'Token de sécurité invalide.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        $this->entityManager->remove($learningPath);
        $this->entityManager->flush();
        $this->addFlash('success', 'Parcours supprimé.');

        return $this->redirectToRoute('app_admin_skills_list');
    }
}
