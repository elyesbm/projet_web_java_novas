<?php

namespace App\Controller\Front;

use App\Repository\LearningPathRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

/**
 * API JSON pour le système de notifications in-app (cloche).
 * Aucune entité supplémentaire : on compare les IDs max actuels
 * avec les IDs stockés côté client (localStorage).
 */
#[Route('/notifications')]
class NotificationController extends AbstractController
{
    public function __construct(
        private SkillRepository $skillRepository,
        private LearningPathRepository $learningPathRepository,
    ) {
    }

    /**
     * Retourne le nombre de nouveaux skills/parcours + la liste des 10 plus récents.
     * Le client envoie ses derniers IDs vus en query params.
     */
    #[Route('/check', name: 'app_notifications_check', methods: ['GET'])]
    public function check(Request $request): JsonResponse
    {
        $lastSkillId = max(0, (int) $request->query->get('lastSkillId', 0));
        $lastPathId  = max(0, (int) $request->query->get('lastPathId', 0));

        // Nouveaux skills (id > lastSkillId)
        $newSkills = $this->skillRepository->createQueryBuilder('s')
            ->where('s.id > :lastId')
            ->setParameter('lastId', $lastSkillId)
            ->orderBy('s.id', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        // Nouveaux parcours actifs (id > lastPathId)
        $newPaths = $this->learningPathRepository->createQueryBuilder('lp')
            ->leftJoin('lp.skill', 's')
            ->addSelect('s')
            ->where('lp.id > :lastId')
            ->andWhere('lp.statut_path = 1')
            ->setParameter('lastId', $lastPathId)
            ->orderBy('lp.id', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        // Compter le total (peut être > 10)
        $totalNewSkills = $this->skillRepository->createQueryBuilder('s')
            ->select('COUNT(s.id)')
            ->where('s.id > :lastId')
            ->setParameter('lastId', $lastSkillId)
            ->getQuery()
            ->getSingleScalarResult();

        $totalNewPaths = $this->learningPathRepository->createQueryBuilder('lp')
            ->select('COUNT(lp.id)')
            ->where('lp.id > :lastId')
            ->andWhere('lp.statut_path = 1')
            ->setParameter('lastId', $lastPathId)
            ->getQuery()
            ->getSingleScalarResult();

        // Sérialiser
        $items = [];

        foreach ($newSkills as $skill) {
            $items[] = [
                'id'    => $skill->getId(),
                'type'  => 'skill',
                'title' => $skill->getNomSkill(),
                'desc'  => mb_substr($skill->getDescriptionSkill() ?: '', 0, 80),
                'cat'   => $skill->getCategorie(),
                'ctx'   => $skill->getContexteSkill(),
                'link'  => $this->generateUrl('app_skills_index'),
            ];
        }

        foreach ($newPaths as $lp) {
            $items[] = [
                'id'    => $lp->getId(),
                'type'  => 'path',
                'title' => $lp->getTitrePath(),
                'desc'  => mb_substr($lp->getDescriptionSkill() ?: '', 0, 80),
                'skill' => $lp->getSkill()?->getNomSkill() ?? '',
                'niveau'=> $lp->getNiveauPath(),
                'link'  => $this->generateUrl('app_learning_path_detail', ['id' => $lp->getId()]),
            ];
        }

        // IDs max actuels (pour que le client puisse mettre à jour son localStorage)
        $maxSkillId = (int) $this->skillRepository->createQueryBuilder('s')
            ->select('MAX(s.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $maxPathId = (int) $this->learningPathRepository->createQueryBuilder('lp')
            ->select('MAX(lp.id)')
            ->getQuery()
            ->getSingleScalarResult();

        return $this->json([
            'totalNew'   => (int) $totalNewSkills + (int) $totalNewPaths,
            'newSkills'  => (int) $totalNewSkills,
            'newPaths'   => (int) $totalNewPaths,
            'maxSkillId' => $maxSkillId,
            'maxPathId'  => $maxPathId,
            'items'      => $items,
        ]);
    }
}
