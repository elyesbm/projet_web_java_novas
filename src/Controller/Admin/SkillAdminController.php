<?php

namespace App\Controller\Admin;

use App\Entity\Skill;
use App\Form\SkillType;
use App\Repository\LearningPathRepository;
use App\Repository\SkillRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/skills', name: 'app_admin_skills_')]
class SkillAdminController extends AbstractController
{
    public function __construct(
        private SkillRepository $skillRepository,
        private LearningPathRepository $learningPathRepository,
        private EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('/', name: 'list')]
    public function list(Request $request): Response
    {
        $q = $request->query->get('q');
        $type = $request->query->get('type');
        $categorie = $request->query->get('categorie');

        $qPath = $request->query->get('q_path');
        $niveauPath = $request->query->get('niveau_path');
        $statutPath = $request->query->get('statut_path');

        $skills = $this->skillRepository->searchAndFilter($q, $type, $categorie);
        $learningPaths = $this->learningPathRepository->searchAndFilter(
            $qPath ?: null,
            $niveauPath !== '' && $niveauPath !== null ? (int) $niveauPath : null,
            $statutPath !== '' && $statutPath !== null ? (int) $statutPath : null
        );
        $totalSkills = $this->skillRepository->count([]);
        $totalPaths = $this->learningPathRepository->count([]);
        $categories = ['Communication', 'Programmation', 'Management', 'Data Science', 'Bien-être', 'Développement Web', 'Design', 'Marketing'];

        return $this->render('admin/skill/list.html.twig', [
            'skills' => $skills,
            'learningPaths' => $learningPaths,
            'totalSkills' => $totalSkills,
            'totalPaths' => $totalPaths,
            'categories' => $categories,
            'search_q' => $q,
            'search_type' => $type,
            'search_categorie' => $categorie,
            'search_q_path' => $qPath,
            'search_niveau_path' => $request->query->get('niveau_path'),
            'search_statut_path' => $request->query->get('statut_path'),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $skill = new Skill();
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($skill);
            $this->entityManager->flush();
            $this->addFlash('success', 'Compétence créée avec succès.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        return $this->render('admin/skill/form.html.twig', [
            'form' => $form,
            'skill' => $skill,
            'mode' => 'create',
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Request $request, int $id): Response
    {
        $skill = $this->skillRepository->find($id);
        if (!$skill) {
            $this->addFlash('error', 'Compétence introuvable.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Compétence modifiée avec succès.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        return $this->render('admin/skill/form.html.twig', [
            'form' => $form,
            'skill' => $skill,
            'mode' => 'edit',
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Request $request, int $id): Response
    {
        $skill = $this->skillRepository->find($id);
        if (!$skill) {
            $this->addFlash('error', 'Compétence introuvable.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('delete_skill_' . $id, $token)) {
            $this->addFlash('error', 'Token de sécurité invalide.');
            return $this->redirectToRoute('app_admin_skills_list');
        }

        $this->entityManager->remove($skill);
        $this->entityManager->flush();
        $this->addFlash('success', 'Compétence supprimée.');

        return $this->redirectToRoute('app_admin_skills_list');
    }
}
