<?php

namespace App\Controller\Admin;
use App\Repository\CommentaireRepository;

use App\Repository\PublicationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/publications', name: 'app_admin_publications_')]
class PublicationAdminController extends AbstractController
{
    #[Route('/', name: 'list', methods: ['GET'])]
public function list(PublicationRepository $publicationRepo, CommentaireRepository $commentRepo): Response
{
    $publications = $publicationRepo->findBy([], ['date_creation' => 'DESC']);

    $totalCommentaires = $commentRepo->count([]);
$totalPublications = $publicationRepo->count([]);
$totalLikes = 0;
    foreach ($publications as $publication) {
        $totalLikes += $publication->getLikes() ?? 0;
    }
    $commentaires = $commentRepo->findBy([], ['date_creation' => 'DESC']);



  
    return $this->render('admin/publication/list.html.twig', [
    'publications' => $publications,
    'commentaires' => $commentaires,
    'totalPublications' => $totalPublications,
    'totalCommentaires' => $totalCommentaires,
    'totalLikes' => $totalLikes,
]);


}

    #[Route('/{id}/edit', name: 'edit', methods: ['GET'])]
    public function edit(int $id, PublicationRepository $publicationRepo): Response
    {
        $publication = $publicationRepo->find($id);
        if (!$publication) {
            throw $this->createNotFoundException('Publication introuvable');
        }

        return $this->render('admin/publication/form.html.twig', [
            'publication' => $publication,
        ]);
    }

    #[Route('/{id}/toggle', name: 'toggle', methods: ['POST'])]
    public function toggleStatut(int $id, PublicationRepository $publicationRepo, EntityManagerInterface $em): Response
    {
        $publication = $publicationRepo->find($id);
        if (!$publication) {
            $this->addFlash('error', 'Publication introuvable');
            return $this->redirectToRoute('app_admin_publications_list');
        }

        $publication->setStatut($publication->getStatut() == 1 ? 0 : 1);
        $em->flush();

        $this->addFlash('success', 'Statut mis à jour');
        return $this->redirectToRoute('app_admin_publications_list');
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['POST'])]
    public function delete(int $id, Request $request, PublicationRepository $publicationRepo, EntityManagerInterface $em): Response
    {
        if (!$this->isCsrfTokenValid('admin_delete_pub_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide');
            return $this->redirectToRoute('app_admin_publications_list');
        }

        $publication = $publicationRepo->find($id);
        if (!$publication) {
            $this->addFlash('error', 'Publication introuvable');
            return $this->redirectToRoute('app_admin_publications_list');
        }

        $em->remove($publication);
        $em->flush();

        $this->addFlash('success', 'Publication supprimée');
        return $this->redirectToRoute('app_admin_publications_list');
    }
    #[Route('/{id}/approve', name: 'approve', methods: ['POST'])]
public function approve(int $id, Request $request, PublicationRepository $publicationRepo, EntityManagerInterface $em): Response
{
    if (!$this->isCsrfTokenValid('admin_pub_action_' . $id, $request->request->get('_token'))) {
        $this->addFlash('error', 'Token invalide');
        return $this->redirectToRoute('app_admin_publications_edit', ['id' => $id]);
    }

    $publication = $publicationRepo->find($id);
    if (!$publication) {
        throw $this->createNotFoundException('Publication introuvable');
    }

    $publication->setStatut(1);
    $em->flush();

    $this->addFlash('success', 'Publication approuvée');
    return $this->redirectToRoute('app_admin_publications_edit', ['id' => $id]);
}

#[Route('/{id}/hide', name: 'hide', methods: ['POST'])]
public function hide(int $id, Request $request, PublicationRepository $publicationRepo, EntityManagerInterface $em): Response
{
    if (!$this->isCsrfTokenValid('admin_pub_action_' . $id, $request->request->get('_token'))) {
        $this->addFlash('error', 'Token invalide');
        return $this->redirectToRoute('app_admin_publications_edit', ['id' => $id]);
    }

    $publication = $publicationRepo->find($id);
    if (!$publication) {
        throw $this->createNotFoundException('Publication introuvable');
    }

    $publication->setStatut(0);
    $em->flush();

    $this->addFlash('success', 'Publication masquée');
    return $this->redirectToRoute('app_admin_publications_edit', ['id' => $id]);
}

}
