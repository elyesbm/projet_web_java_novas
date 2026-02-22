<?php

namespace App\Controller\Front;

use App\Entity\Commentaire;
use App\Entity\Publication;
use App\Entity\PublicationReaction;
use App\Entity\User;
use App\Form\CommentaireType;
use App\Form\PublicationType;
use App\Repository\CommentaireRepository;
use App\Service\ToxicityAnalysisService;
use App\Repository\PublicationRepository;
use App\Repository\PublicationReactionRepository;
use App\Repository\UserRepository;
use App\Service\PublicationTranslationService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/publications')]
class PublicationController extends AbstractController
{
    private const TRANSLATION_LANGUAGES = [
        'en' => 'English',
        'es' => 'Espanol',
        'de' => 'Deutsch',
        'it' => 'Italiano',
        'ar' => 'Arabic',
    ];

    /**
     * ✅ User courant OU fallback (1er user en base)
     */
    private function getCurrentUserOrFallback(UserRepository $userRepo)
    {
        $user = $this->getUser();

        if (!$user) {
            $user = $userRepo->findOneBy([], ['id' => 'ASC']);
        }

        return $user;
    }

    #[Route('/', name: 'app_publications_index', methods: ['GET'])]
    public function index(
        Request $request,
        PublicationRepository $repo,
        CommentaireRepository $commentRepo,
        UserRepository $userRepo,
        PublicationReactionRepository $reactionRepo,
        PaginatorInterface $paginator
    ): Response
    {
        $contexteFilter = $request->query->get('contexte');
        $q = trim((string) $request->query->get('q', ''));
        $sort = (string) $request->query->get('sort', 'created_desc');

        $page = max(1, (int) $request->query->get('page', 1));
        $perPage = 5;

        $qb = $repo->createQueryBuilder('p')
            ->leftJoin('p.auteur', 'a')
            ->addSelect('a')
            ->andWhere('p.statut = :statut')
            ->setParameter('statut', 1);

        if ($contexteFilter !== null && in_array((int) $contexteFilter, [1, 2], true)) {
            $qb->andWhere('p.contexte = :contexte')
                ->setParameter('contexte', (int) $contexteFilter);
        }

        if ($q !== '') {
            $qb->andWhere(
                'LOWER(p.titre) LIKE :q
                 OR LOWER(p.contenu) LIKE :q
                 OR LOWER(a.NOM) LIKE :q
                 OR LOWER(a.PRENOM) LIKE :q'
            )->setParameter('q', '%' . strtolower($q) . '%');
        }

        match ($sort) {
            'updated_desc' => $qb->orderBy('p.date_modification', 'DESC')
                ->addOrderBy('p.date_creation', 'DESC'),
            default => $qb->orderBy('p.date_creation', 'DESC'),
        };

        $publicationsPage = $paginator->paginate($qb, $page, $perPage);

        $totalPublications = (int) $publicationsPage->getTotalItemCount();
        $totalPages = max(1, (int) $publicationsPage->getPageCount());
        $page = (int) $publicationsPage->getCurrentPageNumber();

        $currentUser = $this->getCurrentUserOrFallback($userRepo);
        $authenticatedUser = $this->getUser();

        $userReactions = [];
        $dislikeCounts = [];
        $likeCounts = [];
        $publicationIds = [];
        foreach ($publicationsPage as $pub) {
            $pubId = $pub->getId();
            if ($pubId === null) {
                continue;
            }
            $publicationIds[] = $pubId;

            $likeCounts[$pubId] = (int) $reactionRepo->count([
                'publication' => $pub,
                'value' => 1,
            ]);
            $dislikeCounts[$pubId] = (int) $reactionRepo->count([
                'publication' => $pub,
                'value' => -1,
            ]);

            $userReactions[$pubId] = 0;
            if ($authenticatedUser instanceof User) {
                $existingReaction = $reactionRepo->findOneBy([
                    'publication' => $pub,
                    'user' => $authenticatedUser,
                ]);
                if ($existingReaction) {
                    $userReactions[$pubId] = $existingReaction->getValue();
                }
            }
        }
        $likersByPublication = $reactionRepo->findLikersByPublicationIds($publicationIds);

        $commentForms = [];
        $commentRoots = [];
        foreach ($publicationsPage as $pub) {
            $commentRoots[$pub->getId()] = $commentRepo->findRootsByPublication($pub);
            $commentForms[$pub->getId()] = $this->createForm(
                CommentaireType::class,
                new Commentaire(),
                [
                    'action' => $this->generateUrl('app_commentaire_ajouter', ['id' => $pub->getId()]) . '#pub-' . $pub->getId(),
                    'method' => 'POST',
                ]
            )->createView();
        }

        return $this->render('front/publication/index.html.twig', [
            'publications' => $publicationsPage,
            'comment_forms' => $commentForms,
            'comment_roots' => $commentRoots,
            'current_user_id' => $currentUser ? $currentUser->getId() : null,
            'contexte_filter' => $contexteFilter !== null ? (int) $contexteFilter : null,
            'q' => $q,
            'sort' => $sort,
            'page' => $page,
            'per_page' => $perPage,
            'total_publications' => $totalPublications,
            'total_pages' => $totalPages,
            'user_reactions' => $userReactions,
            'dislike_counts' => $dislikeCounts,
            'like_counts' => $likeCounts,
            'likers_by_publication' => $likersByPublication,
            'auth_user' => $authenticatedUser instanceof User ? [
                'id' => $authenticatedUser->getId(),
                'prenom' => $authenticatedUser->getPRENOM(),
                'nom' => $authenticatedUser->getNOM(),
                'image' => $authenticatedUser->getIMAGE(),
            ] : null,
            'translation_languages' => self::TRANSLATION_LANGUAGES,
        ]);
    }


    #[Route('/nouvelle', name: 'app_publication_nouvelle', methods: ['GET', 'POST'])]
    public function nouvelle(
        Request $request,
        EntityManagerInterface $em,
        UserRepository $userRepo
    ): Response {
        $user = $this->getCurrentUserOrFallback($userRepo);

        if (!$user) {
            $this->addFlash('error', 'Aucun utilisateur en base.');
            return $this->redirectToRoute('app_publications_index');
            $textToCheck = ($pub->getTitre() ?? '') . ' ' . ($pub->getContenu() ?? '');
            if ($toxicityService->isToxic($textToCheck)) {
                $this->addFlash('error', 'Votre publication contient du contenu inapproprié. Merci de modifier votre texte.');
                return $this->render('front/publication/nouvelle.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

        }

        $pub = new Publication();
        $pub->setContexte(1);
        $form = $this->createForm(PublicationType::class, $pub);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $anonyme = (bool) $form->get('anonyme')->getData();

            $pub->setStatut(1);
            $pub->setDateCreation(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
            $pub->setAuteur($user);
            // Use an explicit marker for anonymous posts to avoid confusion
            // when the user has no profile image.
            $pub->setImageAuteur($anonyme ? 'ANONYMOUS' : ($user->getIMAGE() ?: 'VISIBLE'));

            $em->persist($pub);
            $em->flush();

            $this->addFlash('success', 'Publication créée.');
            return $this->redirectToRoute('app_publications_index');
        }

        return $this->render('front/publication/nouvelle.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/modifier', name: 'app_publication_modifier', methods: ['GET', 'POST'])]
    public function modifier(
        Request $request,
        int $id,
        PublicationRepository $repo,
        UserRepository $userRepo,
        EntityManagerInterface $em
    ): Response {
        $pub = $repo->find($id);
        if (!$pub) {
            $this->addFlash('error', 'Publication introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        $user = $this->getCurrentUserOrFallback($userRepo);
        if (!$user || !$pub->getAuteur() || $pub->getAuteur()->getId() !== $user->getId()) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('app_publications_index');
            $textToCheck = ($pub->getTitre() ?? '') . ' ' . ($pub->getContenu() ?? '');
            if ($toxicityService->isToxic($textToCheck)) {
                $this->addFlash('error', 'Votre publication contient du contenu inapproprié. Merci de modifier votre texte.');
                return $this->render('front/publication/modifier.html.twig', [
                    'publication' => $pub,
                    'form' => $form->createView(),
                ]);
            }

        }

        $form = $this->createForm(PublicationType::class, $pub, [
            'with_anonyme' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pub->setDateModification(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
            $em->flush();
            $this->addFlash('success', 'Publication modifiée.');
            return $this->redirectToRoute('app_publications_index');
        }

        return $this->render('front/publication/modifier.html.twig', [
            'publication' => $pub,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/supprimer', name: 'app_publication_supprimer', methods: ['POST'])]
    public function supprimerPublication(
        Request $request,
        int $id,
        PublicationRepository $repo,
        UserRepository $userRepo,
        EntityManagerInterface $em
    ): Response {
        $pub = $repo->find($id);
        if (!$pub) {
            $this->addFlash('error', 'Publication introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        $user = $this->getCurrentUserOrFallback($userRepo);
        if (!$user || !$pub->getAuteur() || $pub->getAuteur()->getId() !== $user->getId()) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('app_publications_index');
        }

        if (!$this->isCsrfTokenValid('delete_publication_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide.');
            return $this->redirectToRoute('app_publications_index');
        }

        $em->remove($pub);
        $em->flush();

        $this->addFlash('success', 'Publication supprimée.');
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/supprimees', name: 'app_publications_supprimees', methods: ['GET'])]
    public function supprimees(
        UserRepository $userRepo,
        PublicationRepository $repo
    ): Response {
        $user = $this->getCurrentUserOrFallback($userRepo);
        if (!$user) {
            $this->addFlash('error', 'Aucun utilisateur.');
            return $this->redirectToRoute('app_publications_index');
        }

        $deleted = $repo->findDeletedByAuthor($user);

        return $this->render('front/publication/supprimees.html.twig', [
            'publications' => $deleted,
        ]);
    }

    #[Route('/{id}/restaurer', name: 'app_publication_restaurer', methods: ['POST'])]
    public function restaurer(
        Request $request,
        int $id,
        PublicationRepository $repo,
        UserRepository $userRepo,
        EntityManagerInterface $em
    ): Response {
        $em->getFilters()->disable('softdeleteable');
        $pub = $repo->find($id);
        $em->getFilters()->enable('softdeleteable');
        if (!$pub || $pub->getDeletedAt() === null) {
            $this->addFlash('error', 'Publication introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        $user = $this->getCurrentUserOrFallback($userRepo);
        if (!$user || !$pub->getAuteur() || $pub->getAuteur()->getId() !== $user->getId()) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('app_publications_supprimees');
        }

        if (!$this->isCsrfTokenValid('restore_publication_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide.');
            return $this->redirectToRoute('app_publications_supprimees');
        }

        $pub->setDeletedAt(null);
        $em->flush();

        $this->addFlash('success', 'Publication restaurée.');
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/signaler', name: 'app_publication_signaler', methods: ['GET'])]
    public function signaler(): Response
    {
        $this->addFlash('warning', 'Publication signalée.');
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/translate', name: 'app_publication_translate', methods: ['POST'])]
    public function translate(
        int $id,
        Request $request,
        PublicationRepository $repo,
        PublicationTranslationService $translationService
    ): Response {
        $payload = json_decode($request->getContent(), true);
        if (!is_array($payload)) {
            $payload = $request->request->all();
        }

        $target = strtolower(trim((string) ($payload['target'] ?? 'en')));
        if (!array_key_exists($target, self::TRANSLATION_LANGUAGES)) {
            return $this->json([
                'ok' => false,
                'message' => 'Langue non supportee.',
            ], 400);
        }

        $pub = $repo->find($id);
        if (!$pub || $pub->getStatut() !== 1) {
            return $this->json([
                'ok' => false,
                'message' => 'Publication introuvable.',
            ], 404);
        }

        try {
            $translated = $translationService->translatePublication(
                (string) ($pub->getTitre() ?? ''),
                (string) ($pub->getContenu() ?? ''),
                $target
            );
        } catch (\RuntimeException $e) {
            return $this->json([
                'ok' => false,
                'message' => 'Traduction indisponible. Verifiez la configuration de l API.',
            ], 502);
        }

        return $this->json([
            'ok' => true,
            'title' => $translated['title'],
            'content' => $translated['content'],
            'target' => $target,
            'language_label' => self::TRANSLATION_LANGUAGES[$target],
        ]);
    }

    #[Route('/{id}/like', name: 'app_publication_like', methods: ['POST'])]
    public function like(
        int $id,
        PublicationRepository $repo,
        PublicationReactionRepository $reactionRepo,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json(['ok' => false, 'message' => 'Connexion requise.'], 401);
        }

        $pub = $repo->find($id);
        if (!$pub || $pub->getStatut() != 1) {
            return $this->json(['ok' => false], 404);
        }

        $result = $this->applyReaction($pub, $user, 1, $reactionRepo, $em);

        return $this->json($result);
    }

    private function applyReaction(
        Publication $pub,
        User $user,
        int $newValue,
        PublicationReactionRepository $reactionRepo,
        EntityManagerInterface $em
    ): array {
        $reaction = $reactionRepo->findOneBy([
            'publication' => $pub,
            'user' => $user,
        ]);

        $previousValue = $reaction?->getValue();
        $changed = false;

        if ($reaction === null) {
            $reaction = (new PublicationReaction())
                ->setPublication($pub)
                ->setUser($user)
                ->setValue($newValue);

            $em->persist($reaction);
            $changed = true;
        } elseif ($previousValue === $newValue) {
            $em->remove($reaction);
            $reaction = null;
            $changed = true;
        } elseif ($previousValue !== $newValue) {
            $reaction->setValue($newValue);
            $changed = true;
        }

        if ($changed) {
            $em->flush();
        }

        $likes = (int) $reactionRepo->count([
            'publication' => $pub,
            'value' => 1,
        ]);
        $dislikes = (int) $reactionRepo->count([
            'publication' => $pub,
            'value' => -1,
        ]);

        if ($pub->getLikes() !== $likes) {
            $pub->setLikes($likes);
            $em->flush();
        }

        return [
            'ok'    => true,
            'likes' => $likes,
            'dislikes' => $dislikes,
            'user_reaction' => $reaction?->getValue() ?? 0,
        ];
    }
}
