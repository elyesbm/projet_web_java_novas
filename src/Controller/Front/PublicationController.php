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
     * ✅ User courant (quand tu intégreras login) OU fallback (1er user en base)
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
        $orderBy = ['date_creation' => 'DESC'];

        // ✅ afficher uniquement les publications actives
        $criteria = ['statut' => 1];

        if ($contexteFilter !== null && in_array((int) $contexteFilter, [1, 2], true)) {
            $criteria['contexte'] = (int) $contexteFilter;
        }

        $publications = $repo->findBy($criteria, $orderBy);

        // ✅ user courant / fallback pour que l'app marche sans login
        $currentUser = $this->getCurrentUserOrFallback($userRepo);

        // ✅ Forms commentaires par publication
        $commentForms = [];
        foreach ($publications as $pub) {
            $commentForms[$pub->getId()] = $this->createForm(
                CommentaireType::class,
                new Commentaire(),
                [
                    'action' => $this->generateUrl('app_commentaire_ajouter', [
                        'id' => $pub->getId(),
                    ]),
                    'method' => 'POST',
                ]
            )->createView();
        }

        return $this->render('front/publication/index.html.twig', [
            'publications' => $publications,
            'comment_forms' => $commentForms,
            'current_user_id' => $currentUser ? $currentUser->getId() : null,
            'contexte_filter' => $contexteFilter !== null ? (int) $contexteFilter : null,
        ]);
    }

    #[Route('/nouvelle', name: 'app_publication_nouvelle', methods: ['GET', 'POST'])]
    public function nouvelle(Request $request, EntityManagerInterface $em, UserRepository $userRepo): Response
    {
        $user = $this->getCurrentUserOrFallback($userRepo);
        if (!$user) {
            $this->addFlash('error', 'Aucun utilisateur en base. Ajoute un user pour tester.');
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

            if ($anonyme) {
                $pub->setImageAuteur('');
            } else {
                $pub->setImageAuteur($user->getIMAGE() ?? '');
            }

            $em->persist($pub);
            $em->flush();

            $this->addFlash('success', 'Publication créée avec succès');
            return $this->redirectToRoute('app_publications_index');
        }

        return $this->render('front/publication/nouvelle.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/modifier', name: 'app_publication_modifier', methods: ['GET', 'POST'])]
    public function modifier(Request $request, int $id, PublicationRepository $repo, UserRepository $userRepo, EntityManagerInterface $em): Response
    {
        $pub = $repo->find($id);
        if (!$pub) {
            $this->addFlash('error', 'Publication introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        $user = $this->getCurrentUserOrFallback($userRepo);
        if (!$user || !$pub->getAuteur() || $pub->getAuteur()->getId() !== $user->getId()) {
            $this->addFlash('error', 'Vous ne pouvez modifier que vos propres publications.');
            return $this->redirectToRoute('app_publications_index');
        }

        if ($request->isMethod('POST')) {
            $pub->setTitre($request->request->get('titre'));
            $pub->setContenu($request->request->get('contenu'));

            $contexte = (int) $request->request->get('contexte');
            $pub->setContexte(($contexte >= 1 && $contexte <= 3) ? $contexte : $pub->getContexte());

            $em->flush();
            $this->addFlash('success', 'Publication modifiée.');
            return $this->redirectToRoute('app_publications_index');
        }

        return $this->render('front/publication/modifier.html.twig', [
            'publication' => $pub,
        ]);
    }

    #[Route('/{id}/supprimer', name: 'app_publication_supprimer', methods: ['POST'])]
    public function supprimerPublication(Request $request, int $id, PublicationRepository $repo, UserRepository $userRepo, EntityManagerInterface $em): Response
    {
        $pub = $repo->find($id);
        if (!$pub) {
            $this->addFlash('error', 'Publication introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        $user = $this->getCurrentUserOrFallback($userRepo);
        if (!$user || !$pub->getAuteur() || $pub->getAuteur()->getId() !== $user->getId()) {
            $this->addFlash('error', 'Vous ne pouvez supprimer que vos propres publications.');
            return $this->redirectToRoute('app_publications_index');
        }

        if (!$this->isCsrfTokenValid('delete_publication_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton de sécurité invalide.');
            return $this->redirectToRoute('app_publications_index');
        }

        $em->remove($pub);
        $em->flush();

        $this->addFlash('success', 'Publication supprimée.');
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/signaler', name: 'app_publication_signaler', methods: ['GET'])]
    public function signaler(int $id): Response
    {
        $this->addFlash('warning', 'La publication a ete signalee aux moderateurs.');
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/like', name: 'app_publication_like', methods: ['POST'])]
    public function like(
        int $id,
        PublicationRepository $repo,
        UserRepository $userRepo,
        EntityManagerInterface $em
    ): Response {
        // ✅ pour “dépendre” d’un user même sans login
        $user = $this->getCurrentUserOrFallback($userRepo);
        if (!$user) {
            return $this->json(['ok' => false, 'message' => 'Aucun utilisateur en base'], 400);
        }

        $pub = $repo->find($id);
        if (!$pub || $pub->getStatut() != 1) {
            return $this->json(['ok' => false], 404);
        }

        // simple incrément (tu pourras bloquer double-like par user plus tard)
        $pub->incrementLikes();
        $em->flush();

        return $this->json([
            'ok' => true,
            'likes' => $pub->getLikes(),
        ]);
    }
}
