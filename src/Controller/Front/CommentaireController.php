<?php

namespace App\Controller\Front;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use App\Repository\PublicationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/commentaires')]
class CommentaireController extends AbstractController
{
#[Route('/publication/{id}/ajouter', name: 'app_commentaire_ajouter', methods: ['POST'])]
public function ajouter(
    Request $request,
    int $id,
    PublicationRepository $pubRepo,
    UserRepository $userRepo,
    EntityManagerInterface $em
): Response {
    $pub = $pubRepo->find($id);
    if (!$pub) {
        $this->addFlash('error', 'Publication introuvable.');
        return $this->redirectToRoute('app_publications_index');
    }

    // mode démo : connecté OU premier user en base
    $user = $this->getUser() ?? $userRepo->findOneBy([], ['id' => 'ASC']);
    if (!$user) {
        $this->addFlash('error', 'Aucun utilisateur en base.');
        return $this->redirectToRoute('app_publications_index');
    }

    // ✅ récupérer les params pour revenir au même état (recherche/tri/filtre)
    $returnQ = (string) $request->request->get('return_q', '');
    $returnSort = (string) $request->request->get('return_sort', 'created_desc');
    $returnContexte = $request->request->get('return_contexte'); // peut être null

    $comment = new Commentaire();
    $form = $this->createForm(CommentaireType::class, $comment);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $comment->setDateCreation(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
        $comment->setAuteur($user);
        $comment->setPublication($pub);
        $comment->setImage($user->getIMAGE() ?? '');

        $em->persist($comment);
        $em->flush();

        $this->addFlash('comment_success_' . $id, 'Commentaire ajouté.');
    } else {
        // ✅ message d’erreur détaillé (1er message)
        $firstError = 'Commentaire invalide.';
        foreach ($form->getErrors(true) as $error) {
            $firstError = $error->getMessage();
            break;
        }

        // ✅ flash ciblé UNIQUEMENT pour cette publication
        $this->addFlash('comment_error_' . $id, $firstError);
    }

    // ✅ retour sur la même publication + ouvrir commentaires
    $params = [
        'open' => $id,
        'q' => $returnQ,
        'sort' => $returnSort,
    ];
    if ($returnContexte !== null && $returnContexte !== '') {
        $params['contexte'] = (int) $returnContexte;
    }

    return $this->redirectToRoute('app_publications_index', $params + [
        '_fragment' => 'pub-' . $id,
    ]);
}


    #[Route('/{id}/supprimer', name: 'app_commentaire_supprimer', methods: ['POST'])]
    public function supprimer(
        Request $request,
        int $id,
        CommentaireRepository $commentRepo,
        UserRepository $userRepo,
        EntityManagerInterface $em
    ): Response {
        if (!$this->isCsrfTokenValid('delete_comment_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton de sécurité invalide.');
            return $this->redirectToRoute('app_publications_index');
        }

        $comment = $commentRepo->find($id);
        if (!$comment) {
            $this->addFlash('error', 'Commentaire introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        // mode démo : connecté OU premier user
        $user = $this->getUser() ?? $userRepo->findOneBy([], ['id' => 'ASC']);
        if (!$user) {
            $this->addFlash('error', 'Aucun utilisateur en base.');
            return $this->redirectToRoute('app_publications_index');
        }

        $em->remove($comment);
        $em->flush();

        $this->addFlash('success', 'Commentaire supprimé.');
        return $this->redirectToRoute('app_publications_index');
    }

    #[Route('/{id}/modifier', name: 'app_commentaire_modifier', methods: ['GET', 'POST'])]
    public function modifier(
        Request $request,
        int $id,
        CommentaireRepository $commentRepo,
        EntityManagerInterface $em
    ): Response {
        $comment = $commentRepo->find($id);
        if (!$comment) {
            $this->addFlash('error', 'Commentaire introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        if ($request->isMethod('POST')) {
            $contenu = trim((string) $request->request->get('contenu'));
            if ($contenu === '') {
                $this->addFlash('error', 'Le contenu ne peut pas être vide.');
                return $this->redirectToRoute('app_commentaire_modifier', ['id' => $id]);
            }

            $comment->setContenu($contenu);
            $em->flush();

            $this->addFlash('success', 'Commentaire modifié.');
            return $this->redirectToRoute('app_publications_index');
        }

        // ⚠️ adapte le nom si ton fichier s'appelle modifier2.html.twig
        return $this->render('front/publication/modifier2.html.twig', [
            'commentaire' => $comment,
        ]);
    }

    #[Route('/nouveau/publication/{id}', name: 'app_commentaire_nouveau', methods: ['GET', 'POST'])]
    public function nouveau(
        Request $request,
        int $id,
        PublicationRepository $pubRepo,
        UserRepository $userRepo,
        EntityManagerInterface $em
    ): Response {
        $pub = $pubRepo->find($id);
        if (!$pub) {
            $this->addFlash('error', 'Publication introuvable.');
            return $this->redirectToRoute('app_publications_index');
        }

        // mode démo : connecté OU premier user
        $user = $this->getUser() ?? $userRepo->findOneBy([], ['id' => 'ASC']);
        if (!$user) {
            $this->addFlash('error', 'Aucun utilisateur en base.');
            return $this->redirectToRoute('app_publications_index');
        }

        $comment = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setDateCreation(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
            $comment->setAuteur($user);
            $comment->setPublication($pub);
            $comment->setImage($user->getIMAGE() ?? '');

            $em->persist($comment);
            $em->flush();

            $this->addFlash('success', 'Commentaire ajouté.');
            return $this->redirectToRoute('app_publications_index');
        }

        return $this->render('front/publication/nouveau2.html.twig', [
            'form' => $form->createView(),
            'publication' => $pub,
        ]);
    }
}
