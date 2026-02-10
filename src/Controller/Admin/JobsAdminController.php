<?php

namespace App\Controller\Admin;

use App\Entity\Offrejob;
use App\Entity\CandidatureJob;
use App\Repository\OffrejobRepository;
use App\Repository\CandidatureJobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/jobs')]
class JobsAdminController extends AbstractController
{
    // ✅ LIST (Search + Sort)
    #[Route('', name: 'app_admin_jobs_list', methods: ['GET'])]
    public function list(Request $request, OffrejobRepository $repo): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $q = trim((string) $request->query->get('q', ''));
        $sort = (string) $request->query->get('sort', 'date');
        $dir = (string) $request->query->get('dir', 'desc');

        // Admin voit tout → on réutilise searchAndSort()
        $offres = $repo->searchAndSort($q ?: null, null, null, null, $sort, $dir);

        return $this->render('admin/jobs/list.html.twig', [
            'offres' => $offres,
            'q' => $q,
            'sort' => $sort,
            'dir' => $dir,
        ]);
    }

    // ✅ CREATE
    #[Route('/new', name: 'app_admin_jobs_new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $offre = new Offrejob();

        if ($request->isMethod('POST')) {
            if (! $this->isCsrfTokenValid('admin_jobs_form_create', (string) $request->request->get('_token'))) {
                $this->addFlash('danger', 'Jeton CSRF invalide.');
                return $this->redirectToRoute('app_admin_jobs_new');
            }

            $categorie = (string) $request->request->get('categorie_offre', 'TUTORAT');
            $lieu = (string) $request->request->get('lieu', 'EN_LIGNE');
            $statut = (string) ($request->request->get('statut_offre') ?: 'OUVERTE');

            if (!in_array($categorie, ['TUTORAT', 'AIDE', 'CREATION'], true)) {
                $categorie = 'TUTORAT';
            }
            if (!in_array($lieu, ['EN_LIGNE', 'PRESENTIEL'], true)) {
                $lieu = 'EN_LIGNE';
            }
            if (!in_array($statut, ['OUVERTE', 'FERMEE'], true)) {
                $statut = 'OUVERTE';
            }

            $offre->setTitreOffre((string) $request->request->get('titre_offre'));
            $offre->setDescriptionOffre((string) $request->request->get('description_offre'));
            $offre->setCategorieOffre($categorie);
            $offre->setLieu($lieu);
            $offre->setStatutOffre($statut);
            $offre->setDateCreationOffre(new \DateTime());

            // ✅ admin crée mais on doit mettre un createur (nullable=false)
            // => on met l'utilisateur connecté comme createur (simple)
            $offre->setCreateur($this->getUser());

            $em->persist($offre);
            $em->flush();

            $this->addFlash('success', 'Offre créée ✅');
            return $this->redirectToRoute('app_admin_jobs_list');
        }

        return $this->render('admin/jobs/form.html.twig', [
            'mode' => 'create',
            'offre' => $offre,
        ]);
    }

    // ✅ EDIT
    #[Route('/{id}/edit', name: 'app_admin_jobs_edit', methods: ['GET','POST'], requirements: ['id' => '\d+'])]
    public function edit(Offrejob $offre, Request $request, EntityManagerInterface $em): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($request->isMethod('POST')) {
            if (! $this->isCsrfTokenValid('admin_jobs_form_edit_' . $offre->getId(), (string) $request->request->get('_token'))) {
                $this->addFlash('danger', 'Jeton CSRF invalide.');
                return $this->redirectToRoute('app_admin_jobs_edit', ['id' => $offre->getId()]);
            }

            $categorie = (string) $request->request->get('categorie_offre', $offre->getCategorieOffre());
            $lieu = (string) $request->request->get('lieu', $offre->getLieu());
            $statut = (string) ($request->request->get('statut_offre') ?: $offre->getStatutOffre());

            if (!in_array($categorie, ['TUTORAT', 'AIDE', 'CREATION'], true)) {
                $categorie = $offre->getCategorieOffre() ?: 'TUTORAT';
            }
            if (!in_array($lieu, ['EN_LIGNE', 'PRESENTIEL'], true)) {
                $lieu = $offre->getLieu() ?: 'EN_LIGNE';
            }
            if (!in_array($statut, ['OUVERTE', 'FERMEE'], true)) {
                $statut = $offre->getStatutOffre() ?: 'OUVERTE';
            }

            $offre->setTitreOffre((string) $request->request->get('titre_offre'));
            $offre->setDescriptionOffre((string) $request->request->get('description_offre'));
            $offre->setCategorieOffre($categorie);
            $offre->setLieu($lieu);
            $offre->setStatutOffre($statut);

            $em->flush();

            $this->addFlash('success', 'Offre modifiée ✅');
            return $this->redirectToRoute('app_admin_jobs_list');
        }

        return $this->render('admin/jobs/form.html.twig', [
            'mode' => 'edit',
            'offre' => $offre,
        ]);
    }

    // ✅ DELETE
    #[Route('/{id}/delete', name: 'app_admin_jobs_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Offrejob $offre, Request $request, EntityManagerInterface $em): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if (! $this->isCsrfTokenValid('admin_jobs_delete_' . $offre->getId(), (string) $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_admin_jobs_list');
        }

        $em->remove($offre);
        $em->flush();

        $this->addFlash('success', 'Offre supprimée 🗑️');
        return $this->redirectToRoute('app_admin_jobs_list');
    }

    // ✅ VIEW CANDIDATURES FOR ONE OFFER
    #[Route('/{id}/candidatures', name: 'app_admin_jobs_candidatures')]
public function candidatures(
    Offrejob $offre,
    CandidatureJobRepository $repo
): Response
{
    // 1️⃣ récupérer candidatures de CETTE offre
    $cands = $repo->findBy(
        ['offre' => $offre],
        ['date_candidature' => 'DESC']
    );

    // 2️⃣ 👉 ICI EXACTEMENT le même code stats
    $stats = [
        'total' => count($cands),
        'enAttente' => 0,
        'acceptees' => 0,
        'refusees' => 0,
    ];

    foreach ($cands as $c) {
        $st = $c->getStatutCandidature();
        if ($st === 'EN_ATTENTE') $stats['enAttente']++;
        elseif ($st === 'ACCEPTEE') $stats['acceptees']++;
        elseif ($st === 'REFUSEE') $stats['refusees']++;
    }

    // 3️⃣ render Twig (même template que front)
    return $this->render('front/jobs/mes_candidatures.html.twig', [
        'candidatures' => $cands,
        'stats' => $stats,
        'admin_view' => true, // 🔑 clé magique
        'can_manage' => true,
        'manage_route' => 'app_admin_jobs_candidature_status',
        'offre' => $offre,
    ]);
}


    // ✅ ACCEPT / REFUSE
    #[Route('/candidature/{id}/status/{status}', name: 'app_admin_jobs_candidature_status', methods: ['POST'], requirements: ['id' => '\d+', 'status' => 'ACCEPTEE|REFUSEE'])]
    public function setCandidatureStatus(
        int $id,
        string $status,
        Request $request,
        CandidatureJobRepository $candRepo,
        EntityManagerInterface $em
    ): Response {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $cand = $candRepo->find($id);
        if (!$cand) throw $this->createNotFoundException();

        if (! $this->isCsrfTokenValid('cand_status_' . $cand->getId() . '_' . $status, (string) $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_admin_jobs_candidatures', ['id' => $cand->getOffre()->getId()]);
        }

        $cand->setStatutCandidature($status);
        $em->flush();

        $this->addFlash('success', 'Statut mis à jour ✅');
        return $this->redirectToRoute('app_admin_jobs_candidatures', ['id' => $cand->getOffre()->getId()]);
    }
}
