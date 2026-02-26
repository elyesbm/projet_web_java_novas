<?php

namespace App\Repository;

use App\Entity\Commande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Commande>
 */
class CommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commande::class);
    }

    /**
     * @return int[]
     */
    public function findPurchasedArticleIdsForUser(int $userId): array
    {
        $rows = $this->createQueryBuilder('c')
            ->select('IDENTITY(c.article) AS article_id')
            ->andWhere('IDENTITY(c.user) = :uid')
            ->setParameter('uid', $userId)
            ->groupBy('c.article')
            ->getQuery()
            ->getArrayResult();

        return array_values(array_unique(array_map(static fn (array $row): int => (int) ($row['article_id'] ?? 0), $rows)));
    }

    /**
     * @return int[]
     */
    public function findTopCategoryIdsForUser(int $userId, int $limit = 3): array
    {
        $rows = $this->createQueryBuilder('c')
            ->select('IDENTITY(a.categorie) AS category_id, COUNT(c.id) AS total')
            ->innerJoin('c.article', 'a')
            ->andWhere('IDENTITY(c.user) = :uid')
            ->setParameter('uid', $userId)
            ->groupBy('a.categorie')
            ->orderBy('total', 'DESC')
            ->setMaxResults(max(1, $limit))
            ->getQuery()
            ->getArrayResult();

        return array_values(array_map(static fn (array $row): int => (int) ($row['category_id'] ?? 0), $rows));
    }
}

