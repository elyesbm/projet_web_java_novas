<?php

namespace App\Repository;

use App\Entity\HistoriqueVue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HistoriqueVue>
 */
class HistoriqueVueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoriqueVue::class);
    }

    /**
     * @return int[]
     */
    public function findTopCategoryIdsForUser(int $userId, int $limit = 3): array
    {
        $rows = $this->createQueryBuilder('hv')
            ->select('IDENTITY(a.categorie) AS category_id, COUNT(hv.id) AS total')
            ->innerJoin('hv.article', 'a')
            ->andWhere('IDENTITY(hv.user) = :uid')
            ->setParameter('uid', $userId)
            ->groupBy('a.categorie')
            ->orderBy('total', 'DESC')
            ->setMaxResults(max(1, $limit))
            ->getQuery()
            ->getArrayResult();

        return array_values(array_map(static fn (array $row): int => (int) ($row['category_id'] ?? 0), $rows));
    }

    public function findLastViewedCategoryIdForUser(int $userId): ?int
    {
        $row = $this->createQueryBuilder('hv')
            ->select('IDENTITY(a.categorie) AS category_id')
            ->innerJoin('hv.article', 'a')
            ->andWhere('IDENTITY(hv.user) = :uid')
            ->setParameter('uid', $userId)
            ->orderBy('hv.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if (!is_array($row) || !isset($row['category_id'])) {
            return null;
        }

        $categoryId = (int) $row['category_id'];
        return $categoryId > 0 ? $categoryId : null;
    }

    public function findLastViewedArticleIdForUser(int $userId): ?int
    {
        $row = $this->createQueryBuilder('hv')
            ->select('IDENTITY(hv.article) AS article_id')
            ->andWhere('IDENTITY(hv.user) = :uid')
            ->setParameter('uid', $userId)
            ->orderBy('hv.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if (!is_array($row) || !isset($row['article_id'])) {
            return null;
        }

        $articleId = (int) $row['article_id'];
        return $articleId > 0 ? $articleId : null;
    }
}
