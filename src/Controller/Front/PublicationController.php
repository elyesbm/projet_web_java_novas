<?php

namespace App\Controller\Front;

use App\Entity\Commentaire;
use App\Entity\Publication;
use App\Form\CommentaireType;
use App\Form\PublicationEditType;
use App\Form\PublicationType;
use App\Repository\PublicationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/publications')]
class PublicationController extends AbstractController
{
    /**
     * Ã¢Å“â€¦ User courant OU fallback (1er user en base)
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
    public function index(Request $request, PublicationRepository $repo, UserRepository $userRepo): Response
    {
        $q = trim((string) $request->query->get('q', ''));

        $sort = (string) $request->query->get('sort', 'created_desc');
        $sort = \in_array($sort, ['created_desc', 'updated_desc'], true) ? $sort : 'created_desc';

        $rawContexte = $request->query->get('contexte');
        $contexteFilter = null;
        if ($rawContexte !== null && $rawContexte !== '') {
            $contexte = (int) $rawContexte;
            if (\in_array($contexte, [1, 2], true)) {
                $contexteFilter = $contexte;
            }
        }

        $publications = $repo->findActiveWithFilters($q, $contexteFilter, $sort);

        $currentUser = $this->getCurrentUserOrFallback($userRepo);

        $commentForms = [];
        foreach ($publications as $pub) {
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
            'publications' => $publications,
            'comment_forms' => $commentForms,
            'current_user_id' => $currentUser ? $currentUser->getId() : null,
            'contexte_filter' => $contexteFilter,
            'q' => $q,
            'sort' => $sort,
            'open_comments_for' => (int) $request->query->get('open', 0),
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
        }

        $pub = new Publication();
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

            $this->addFlash('success', 'Publication crÃƒÂ©ÃƒÂ©e.');
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
            $this->addFlash('error', 'Action non autorisÃƒÂ©e.');
            return $this->redirectToRoute('app_publications_index');
        }

        // Normalize legacy context values (e.g. 0) to keep exactly 2 front choices.
        if (!\in_array($pub->getContexte(), [1, 2], true)) {
            $pub->setContexte(2);
        }

        $form = $this->createForm(PublicationEditType::class, $pub);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pub->setDateModification(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
            $em->flush();
            $this->addFlash('success', 'Publication modifiÃƒÂ©e.');
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
            $this->addFlash('error', 'Action non autorisÃƒÂ©e.');
            return $this->redirectToRoute('app_publications_index');
        }

        if (!$this->isCsrfTokenValid('delete_publication_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide.');
            return $this->redirectToRoute('app_publications_index');
        }

        $em->remove($pub);
        $em->flush();

        $this->addFlash('success', 'Publication supprimÃƒÂ©e.');
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/signaler', name: 'app_publication_signaler', methods: ['GET'])]
    public function signaler(): Response
    {
        $this->addFlash('warning', 'Publication signalÃƒÂ©e.');
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/like', name: 'app_publication_like', methods: ['POST'])]
    public function like(
        int $id,
        PublicationRepository $repo,
        UserRepository $userRepo,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUserOrFallback($userRepo);
        if (!$user) {
            return $this->json(['ok' => false], 400);
        }

        $pub = $repo->find($id);
        if (!$pub || $pub->getStatut() != 1) {
            return $this->json(['ok' => false], 404);
        }

        // Ã¢Å¡Â Ã¯Â¸Â volontairement simple (double-like gÃƒÂ©rÃƒÂ© plus tard)
        $pub->incrementLikes();
        $em->flush();

        return $this->json([
            'ok'    => true,
            'likes' => $pub->getLikes(),
        ]);
    }
}
