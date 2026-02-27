<?php

namespace App\Controller\Front;

use App\Repository\LearningPathRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/learning-paths')]
class LearningPathController extends AbstractController
{
    public function __construct(
        private LearningPathRepository $learningPathRepository,
        private SkillRepository $skillRepository,
    ) {
    }

    // ─────────────────────────────────────
    // CATALOGUE (liste de tous les parcours)
    // ─────────────────────────────────────

    #[Route('/', name: 'app_learning_paths_index')]
    public function index(Request $request): Response
    {
        $q        = trim((string) $request->query->get('q', ''));
        $niveau   = $request->query->has('niveau') ? (int) $request->query->get('niveau') : null;
        $type     = $request->query->get('type', '');
        $skillId  = $request->query->has('skill_id') ? (int) $request->query->get('skill_id') : null;

        $qb = $this->learningPathRepository->createQueryBuilder('lp')
            ->leftJoin('lp.skill', 's')
            ->addSelect('s')
            ->where('lp.statut_path = 1')
            ->orderBy('lp.titre_path', 'ASC');

        if ($q !== '') {
            $qb->andWhere('lp.titre_path LIKE :q OR lp.description_skill LIKE :q OR s.nom_skill LIKE :q')
               ->setParameter('q', '%' . $q . '%');
        }
        if ($niveau !== null && in_array($niveau, [1, 2, 3], true)) {
            $qb->andWhere('lp.niveau_path = :niveau')->setParameter('niveau', $niveau);
        }
        if ($type === 'hard' || $type === 'soft') {
            $qb->andWhere('s.contexte_skill = :type')->setParameter('type', $type);
        }
        if ($skillId !== null && $skillId > 0) {
            $qb->andWhere('s.id = :skillId')->setParameter('skillId', $skillId);
        }

        $allParcours = $qb->getQuery()->getResult();
        $totalFiltered = count($allParcours);

        // Pagination: 4 parcours per page
        $perPage     = 4;
        $totalPages  = max(1, (int) ceil($totalFiltered / $perPage));
        $currentPage = max(1, min($totalPages, (int) $request->query->get('page', 1)));
        $offset      = ($currentPage - 1) * $perPage;
        $parcours    = array_slice($allParcours, $offset, $perPage);

        $skills      = $this->skillRepository->findBy([], ['nom_skill' => 'ASC']);
        $totalActifs = $this->learningPathRepository->count(['statut_path' => 1]);

        return $this->render('front/learning_path/index.html.twig', [
            'parcours'          => $parcours,
            'skills'            => $skills,
            'totalActifs'       => $totalActifs,
            'totalFiltered'     => $totalFiltered,
            'search_q'          => $q,
            'search_niveau'     => $niveau,
            'search_type'       => $type,
            'search_skill_id'   => $skillId,
            'has_filters'       => $q !== '' || $niveau !== null || $type !== '' || ($skillId !== null && $skillId > 0),
            'current_page'      => $currentPage,
            'total_pages'       => $totalPages,
        ]);
    }

    // ─────────────────────────────────────
    // PLAYLISTS (grouped by Skill)
    // ─────────────────────────────────────

    /**
     * Liste toutes les playlists (un skill = une playlist)
     */
    #[Route('/playlists', name: 'app_learning_paths_playlists')]
    public function playlists(): Response
    {
        $playlists = $this->skillRepository->findSkillsWithPlaylists();

        return $this->render('front/learning_path/playlists.html.twig', [
            'playlists' => $playlists,
        ]);
    }

    /**
     * Détail d'une playlist : tous les parcours du skill, triés débutant → avancé
     */
    #[Route('/playlists/{skillId}', name: 'app_learning_path_playlist_detail', requirements: ['skillId' => '\d+'])]
    public function playlistDetail(int $skillId, Request $request): Response
    {
        $skill = $this->skillRepository->find($skillId);
        if (!$skill) {
            throw $this->createNotFoundException('Compétence introuvable.');
        }

        // Paths: active only, ordered by niveau then titre
        $allParcours = $this->learningPathRepository->createQueryBuilder('lp')
            ->where('lp.skill = :skill')
            ->andWhere('lp.statut_path = 1')
            ->setParameter('skill', $skill)
            ->orderBy('lp.niveau_path', 'ASC')
            ->addOrderBy('lp.titre_path', 'ASC')
            ->getQuery()
            ->getResult();

        $nbTotal = count($allParcours);

        // Totals computed on ALL parcours (before pagination)
        $dureeTotale = array_sum(array_map(
            fn ($lp) => $lp->getDureeEstimee(),
            $allParcours
        ));

        $niveauxPresents = array_unique(array_map(
            fn ($lp) => $lp->getNiveauPath(),
            $allParcours
        ));
        sort($niveauxPresents);

        // Pagination: 4 parcours per page
        $perPage     = 4;
        $totalPages  = max(1, (int) ceil($nbTotal / $perPage));
        $currentPage = max(1, min($totalPages, (int) $request->query->get('page', 1)));
        $offset      = ($currentPage - 1) * $perPage;
        $parcours    = array_slice($allParcours, $offset, $perPage);

        // Recompute niveaux_presents for the current page slice
        $niveauxPresentsPage = array_unique(array_map(
            fn ($lp) => $lp->getNiveauPath(),
            $parcours
        ));
        sort($niveauxPresentsPage);

        return $this->render('front/learning_path/playlist_detail.html.twig', [
            'skill'            => $skill,
            'parcours'         => $parcours,
            'duree_totale'     => $dureeTotale,
            'niveaux_presents' => $niveauxPresentsPage,
            'nb_total'         => $nbTotal,
            'current_page'     => $currentPage,
            'total_pages'      => $totalPages,
        ]);
    }

    // ─────────────────────────────────────
    // DÉTAIL d'un parcours
    // ─────────────────────────────────────

    #[Route('/{id}/detail', name: 'app_learning_path_detail', requirements: ['id' => '\d+'])]
    public function detail(int $id): Response
    {
        $parcours = $this->learningPathRepository->find($id);
        if (!$parcours) {
            throw $this->createNotFoundException('Parcours introuvable.');
        }

        return $this->render('front/learning_path/detail.html.twig', [
            'parcours' => $parcours,
        ]);
    }
}
