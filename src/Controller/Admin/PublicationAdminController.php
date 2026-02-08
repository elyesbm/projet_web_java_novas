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


  
    return $this->render('admin/publication/list.html.twig', [
    'publications' => $publications,
    'totalCommentaires' => $totalCommentaires,
    'totalPublications' => $totalPublications,
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
}
