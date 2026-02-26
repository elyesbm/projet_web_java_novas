<?php

namespace App\Controller\Front;

use App\Entity\Skill;
use App\Form\SkillType;
use App\Repository\SkillRepository;
use App\Repository\UserRepository;
use App\Service\ScoreHistoryService;
use App\Service\SkillAITutorService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/skills')]
class SkillController extends AbstractController
{
    public function __construct(
        private SkillRepository      $skillRepository,
        private UserRepository       $userRepository,
        private EntityManagerInterface $entityManager,
        private ScoreHistoryService  $scoreHistoryService,
        private SkillAITutorService $aiTutorService,
        private PaginatorInterface  $paginator,
    ) {
    }

    #[Route('/tuteur-ia', name: 'app_skills_tuteur_ia', methods: ['GET'])]
    public function tuteurIa(): Response
    {
        $availableSkills = $this->skillRepository->findBy([], ['nom_skill' => 'ASC']);
        $user = $this->getUser();

        return $this->render('front/skill/tuteur_ia.html.twig', [
            'availableSkills' => $availableSkills,
            'aiTutorConfigured' => $this->aiTutorService->isConfigured(),
        ]);
    }

    #[Route('/tuteur-ia/chat', name: 'app_skills_tuteur_ia_chat', methods: ['POST'])]
    public function tuteurIaChat(Request $request): Response
    {
        $content = json_decode($request->getContent(), true);
        if (!\is_array($content)) {
            return $this->json(['reply' => 'Requête invalide.'], Response::HTTP_BAD_REQUEST);
        }
        if (!$this->isCsrfTokenValid('skill_tuteur_ia', (string) ($content['_token'] ?? ''))) {
            return $this->json(['reply' => 'Token de sécurité invalide.'], Response::HTTP_FORBIDDEN);
        }
        $userMessage = isset($content['message']) && \is_string($content['message'])
            ? trim($content['message'])
            : '';
        $messages = isset($content['messages']) && \is_array($content['messages'])
            ? array_slice($content['messages'], -20)
            : [];

        if ($userMessage === '') {
            return $this->json(['reply' => 'Veuillez écrire un message.'], Response::HTTP_BAD_REQUEST);
        }

        $availableSkills = $this->skillRepository->findBy([], ['nom_skill' => 'ASC']);
        $user = $this->getUser();

        $reply = $this->aiTutorService->chat($userMessage, $messages, $availableSkills, $user);

        return $this->json(['reply' => $reply]);
    }

    #[Route('/', name: 'app_skills_index')]
    public function index(Request $request): Response
    {
        $q = $request->query->get('q');
        $type = $request->query->get('type');
        $categorie = $request->query->get('categorie');

        $page = max(1, (int) $request->query->get('page', 1));
        $queryBuilder = $this->skillRepository->searchAndFilterQueryBuilder($q, $type, $categorie);
        $skills = $this->paginator->paginate($queryBuilder, $page, 6);
        $categories = ['Communication', 'Programmation', 'Management', 'Data Science', 'Bien-être', 'Développement Web', 'Design', 'Marketing'];

        return $this->render('front/skill/index.html.twig', [
            'skills' => $skills,
            'categories' => $categories,
            'search_q' => $q,
            'search_type' => $type,
            'search_categorie' => $categorie,
        ]);
    }

    #[Route('/mes-skills', name: 'app_skills_mes')]
    public function mesSkills(): Response
    {
        $user = $this->getUserOrFirst();
        if (!$user) {
            $this->addFlash('warning', 'Connectez-vous pour accéder à vos skills.');
            return $this->redirectToRoute('app_login');
        }

        $mesSkills = $this->skillRepository->findByCreateur($user);

        return $this->render('front/skill/mes_skills.html.twig', [
            'mesSkills' => $mesSkills,
        ]);
    }

    #[Route('/ajouter', name: 'app_skills_ajouter', methods: ['GET', 'POST'])]
    public function ajouter(Request $request): Response
    {
        $user = $this->getUserOrFirst();
        if (!$user) {
            $this->addFlash('warning', 'Connectez-vous pour ajouter un skill.');
            return $this->redirectToRoute('app_login');
        }

        $skill = new Skill();
        $skill->setCreateur($user);
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($skill);
            $this->entityManager->flush();

            // 📊 Enregistrement historique des scores
            try {
                $this->scoreHistoryService->recordSkillAdded($user, $skill->getNomSkill());
            } catch (\Throwable) { /* non-bloquant */ }

            $this->addFlash('success', 'Skill ajouté avec succès !');
            return $this->redirectToRoute('app_skills_mes');
        }

        return $this->render('front/skill/ajouter.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}/modifier', name: 'app_skills_modifier', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function modifier(Request $request, int $id): Response
    {
        $user = $this->getUserOrFirst();
        if (!$user) {
            $this->addFlash('warning', 'Connectez-vous pour modifier un skill.');
            return $this->redirectToRoute('app_login');
        }

        $skill = $this->skillRepository->find($id);
        if (!$skill) {
            $this->addFlash('error', 'Skill introuvable.');
            return $this->redirectToRoute('app_skills_mes');
        }

        if ($skill->getCreateur() !== $user) {
            $this->addFlash('error', 'Vous ne pouvez modifier que vos propres skills.');
            return $this->redirectToRoute('app_skills_mes');
        }

        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Skill modifié avec succès !');
            return $this->redirectToRoute('app_skills_mes');
        }

        return $this->render('front/skill/modifier.html.twig', [
            'form' => $form,
            'skill' => $skill,
        ]);
    }

    #[Route('/{id}/supprimer', name: 'app_skills_supprimer', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function supprimer(Request $request, int $id): Response
    {
        $user = $this->getUserOrFirst();
        if (!$user) {
            $this->addFlash('warning', 'Connectez-vous pour supprimer un skill.');
            return $this->redirectToRoute('app_login');
        }

        $skill = $this->skillRepository->find($id);
        if (!$skill) {
            $this->addFlash('error', 'Skill introuvable.');
            return $this->redirectToRoute('app_skills_mes');
        }

        if ($skill->getCreateur() !== $user) {
            $this->addFlash('error', 'Vous ne pouvez supprimer que vos propres skills.');
            return $this->redirectToRoute('app_skills_mes');
        }

        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('delete_skill_' . $id, $token)) {
            $this->addFlash('error', 'Token de sécurité invalide.');
            return $this->redirectToRoute('app_skills_mes');
        }

        $this->entityManager->remove($skill);
        $this->entityManager->flush();
        $this->addFlash('success', 'Skill supprimé.');

        return $this->redirectToRoute('app_skills_mes');
    }

    /**
     * Retourne l'utilisateur connecté ou le premier utilisateur en BDD (pour dev sans auth).
     */
    private function getUserOrFirst(): ?object
    {
        $user = $this->getUser();
        if ($user !== null) {
            return $user;
        }
        return $this->userRepository->findOneBy([], ['id' => 'ASC']);
    }
}
