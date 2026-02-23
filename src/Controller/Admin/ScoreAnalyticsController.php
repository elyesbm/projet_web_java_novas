<?php

namespace App\Controller\Admin;

use App\Entity\ScoreHistory;
use App\Repository\ScoreHistoryRepository;
use App\Service\ScoreHistoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/analytics', name: 'app_admin_analytics_')]
#[IsGranted('ROLE_ADMIN')]
class ScoreAnalyticsController extends AbstractController
{
    public function __construct(
        private ScoreHistoryService    $scoreHistoryService,
        private ScoreHistoryRepository $scoreHistoryRepo,
    ) {}

    /**
     * Page principale du tableau de bord analytique des scores.
     */
    #[Route('/', name: 'dashboard')]
    public function dashboard(Request $request): Response
    {
        $days    = max(7, min(30, (int) $request->query->get('days', 7)));
        $chart   = $this->scoreHistoryService->buildChartData($days);
        $recent  = $this->scoreHistoryRepo->findRecentEvents(15);

        return $this->render('admin/analytics/score_dashboard.html.twig', [
            'chart'       => $chart,
            'recent'      => $recent,
            'days'        => $days,
            'actionTypes' => ScoreHistory::ACTION_LABELS,
        ]);
    }

    /**
     * Endpoint JSON pour la mise à jour dynamique du graphe (fetch côté JS).
     */
    #[Route('/api/chart-data', name: 'api_chart', methods: ['GET'])]
    public function apiChartData(Request $request): JsonResponse
    {
        $days  = max(7, min(30, (int) $request->query->get('days', 7)));
        $chart = $this->scoreHistoryService->buildChartData($days);

        return $this->json($chart);
    }
}
