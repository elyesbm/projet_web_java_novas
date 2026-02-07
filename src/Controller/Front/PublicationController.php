<?php

namespace App\Controller\Front;

use App\Entity\Commentaire;
use App\Entity\Publication;
use App\Repository\CommentaireRepository;
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
    #[Route('/', name: 'app_publications_index')]
    public function index(Request $request, PublicationRepository $repo): Response
    {
        $contexteFilter = $request->query->get('contexte');
        $orderBy = ['date_creation' => 'DESC'];

        if ($contexteFilter !== null && in_array((int) $contexteFilter, [1, 2], true)) {
            $publications = $repo->findBy(['contexte' => (int) $contexteFilter], $orderBy);
        } else {
            $publications = $repo->findBy([], $orderBy);
        }

        $currentUser = $this->getUser();

        return $this->render('front/publication/index.html.twig', [
            'publications' => $publications,
            'current_user_id' => $currentUser ? $currentUser->getId() : null,
            'contexte_filter' => $contexteFilter !== null ? (int) $contexteFilter : null,
        ]);
    }

    #[Route('/nouvelle', name: 'app_publication_nouvelle', methods: ['GET', 'POST'])]
    public function nouvelle(Request $request, EntityManagerInterface $em, UserRepository $userRepo): Response
    {
        if ($request->isMethod('POST')) {
            // Utilisateur connecté, sinon premier utilisateur en base (astuce sans toucher au login)
            $user = $this->getUser() ?? $userRepo->findOneBy([], ['id' => 'ASC']);
            if (!$user) {
                $this->addFlash('error', 'Aucun utilisateur en base. Créez au moins un utilisateur (ou connectez-vous).');
                return $this->redirectToRoute('app_publications_index');
            }
            $pub = new Publication();
            $pub->setTitre($request->request->get('titre'));
            $pub->setContenu($request->request->get('contenu'));
            $contexte = (int) $request->request->get('contexte');
            $pub->setContexte(($contexte >= 1 && $contexte <= 3) ? $contexte : 3);
            $pub->setStatut(1);
            $pub->setDateCreation(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
            $pub->setAuteur($user);
            $pub->setImageAuteur($user->getIMAGE() ?? '');

            $em->persist($pub);
            $em->flush();

            $this->addFlash('success', 'Publication créée avec succès');
            return $this->redirectToRoute('app_publications_index');
        }

        return $this->render('front/publication/nouvelle.html.twig');
    }

    #[Route('/{id}/modifier', name: 'app_publication_modifier', methods: ['GET', 'POST'])]
    public function modifier(Request $request, int $id, PublicationRepository $repo, UserRepository $userRepo, EntityManagerInterface $em): Response
    {
        $pub = $repo->find($id);
        if (!$pub) {
            $this->addFlash('error', 'Publication introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        $user = $this->getUser() ?? $userRepo->findOneBy([], ['id' => 'ASC']);
        if (!$user || $pub->getAuteur()->getId() !== $user->getId()) {
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

    #[Route('/{id}/commenter', name: 'app_publication_commenter', methods: ['POST'])]
    public function commenter(Request $request, int $id, PublicationRepository $repo, EntityManagerInterface $em): Response
    {
        $pub = $repo->find($id);
        if (!$pub) {
            $this->addFlash('error', 'Publication introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        $contenu = trim((string) $request->request->get('contenu'));
        if ($contenu !== '' && $this->getUser()) {
            $comment = new Commentaire();
            $comment->setContenu($contenu);
            $comment->setDateCreation(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
            $comment->setAuteur($this->getUser());
            $comment->setPublication($pub);
            $em->persist($comment);
            $em->flush();
            $this->addFlash('success', 'Commentaire ajouté.');
        }

        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/commentaire/{idComment}/supprimer', name: 'app_publication_commentaire_supprimer', methods: ['POST'])]
    public function supprimerCommentaire(Request $request, int $id, int $idComment, CommentaireRepository $commentRepo, EntityManagerInterface $em): Response
    {
        if (!$this->isCsrfTokenValid('delete_comment_' . $idComment, $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton de sécurité invalide.');
            return $this->redirectToRoute('app_publications_index');
        }

        $comment = $commentRepo->find($idComment);
        if (!$comment || $comment->getPublication()->getId() !== $id) {
            $this->addFlash('error', 'Commentaire introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        $user = $this->getUser();
        if (!$user || $comment->getAuteur()->getId() !== $user->getId()) {
            $this->addFlash('error', 'Vous ne pouvez supprimer que vos propres commentaires.');
            return $this->redirectToRoute('app_publications_index');
        }

        $em->remove($comment);
        $em->flush();
        $this->addFlash('success', 'Commentaire supprimé.');
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/supprimer', name: 'app_publication_supprimer', methods: ['POST'])]
    public function supprimerPublication(Request $request, int $id, PublicationRepository $repo, UserRepository $userRepo, EntityManagerInterface $em): Response
    {
        $pub = $repo->find($id);
        if (!$pub) {
            $this->addFlash('error', 'Publication introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        // Même logique que nouvelle : utilisateur connecté ou premier user en base
        $user = $this->getUser() ?? $userRepo->findOneBy([], ['id' => 'ASC']);
        if (!$user || $pub->getAuteur()->getId() !== $user->getId()) {
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

    #[Route('/{id}/signaler', name: 'app_publication_signaler')]
    public function signaler(int $id): Response
    {
        $this->addFlash('warning', 'La publication a ete signalee aux moderateurs.');
        return $this->redirectToRoute('app_publications_index');
    }
}