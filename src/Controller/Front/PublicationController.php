<?php

namespace App\Controller\Front;

use App\Entity\Commentaire;
use App\Entity\Publication;
use App\Form\CommentaireType;
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
public function index(Request $request, PublicationRepository $repo, UserRepository $userRepo): Response
{
    $contexteFilter = $request->query->get('contexte');

    // ✅ q: recherche (titre + contenu + nom/prénom auteur)
    $q = trim((string) $request->query->get('q', ''));

    // ✅ sort : created_desc / updated_desc
    $sort = (string) $request->query->get('sort', 'created_desc');

    // ✅ ordre (updated: fallback sur date_creation)
    $orderBy = match ($sort) {
        'updated_desc' => ['date_modification' => 'DESC', 'date_creation' => 'DESC'],
        default        => ['date_creation' => 'DESC'],
    };

    // ✅ uniquement les pubs actives
    $criteria = ['statut' => 1];

    if ($contexteFilter !== null && in_array((int) $contexteFilter, [1, 2], true)) {
        $criteria['contexte'] = (int) $contexteFilter;
    }

    // ✅ récupère depuis DB trié
    $publications = $repo->findBy($criteria, $orderBy);

    // ✅ filtre en mémoire (titre + contenu + auteur nom/prénom)
    if ($q !== '') {
        $publications = array_values(array_filter($publications, function ($pub) use ($q) {
            $titre = (string) ($pub->getTitre() ?? '');
            $contenu = (string) ($pub->getContenu() ?? '');

            $auteurNom = '';
            $auteurPrenom = '';
            if ($pub->getAuteur()) {
                $auteurNom = (string) ($pub->getAuteur()->getNOM() ?? '');
                $auteurPrenom = (string) ($pub->getAuteur()->getPRENOM() ?? '');
            }

            return stripos($titre, $q) !== false
                || stripos($contenu, $q) !== false
                || stripos($auteurNom, $q) !== false
                || stripos($auteurPrenom, $q) !== false;
        }));
    }

    // ✅ user courant / fallback
    $currentUser = $this->getCurrentUserOrFallback($userRepo);

    // ✅ Forms commentaires par publication
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
        'contexte_filter' => $contexteFilter !== null ? (int) $contexteFilter : null,
        'q' => $q,
        'sort' => $sort,
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

    #[Route('/{id}/signaler', name: 'app_publication_signaler', methods: ['GET'])]
    public function signaler(): Response
    {
        $this->addFlash('warning', 'Publication signalée.');
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

        // ⚠️ volontairement simple (double-like géré plus tard)
        $pub->incrementLikes();
        $em->flush();

        return $this->json([
            'ok'    => true,
            'likes' => $pub->getLikes(),
        ]);
    }
}
