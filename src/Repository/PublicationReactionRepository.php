<?php

namespace App\Repository;

use App\Entity\PublicationReaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PublicationReaction>
 */
class PublicationReactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PublicationReaction::class);
    }

    /**
     * @param int[] $publicationIds
     *
     * @return array<int, array<int, array<string, mixed>>>
     */
    public function findLikersByPublicationIds(array $publicationIds): array
    {
        $publicationIds = array_values(array_filter(array_map('intval', $publicationIds)));
        if ($publicationIds === []) {
            return [];
        }

        $rows = $this->createQueryBuilder('r')
            ->select(
                'IDENTITY(r.publication) AS publicationId',
                'u.id AS userId',
                'u.PRENOM AS prenom',
                'u.NOM AS nom',
                'u.IMAGE AS image',
                'r.dateCreation AS likedAt'
            )
            ->join('r.user', 'u')
            ->andWhere('r.value = :likeValue')
            ->andWhere('IDENTITY(r.publication) IN (:publicationIds)')
            ->setParameter('likeValue', 1)
            ->setParameter('publicationIds', $publicationIds)
            ->orderBy('r.dateCreation', 'DESC')
            ->getQuery()
            ->getArrayResult();

        $grouped = [];
        foreach ($rows as $row) {
            $publicationId = (int) ($row['publicationId'] ?? 0);
            if ($publicationId <= 0) {
                continue;
            }

            $grouped[$publicationId][] = $row;
        }

        return $grouped;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function findLikersByPublicationId(int $publicationId): array
    {
        if ($publicationId <= 0) {
            return [];
        }

        $grouped = $this->findLikersByPublicationIds([$publicationId]);

        return $grouped[$publicationId] ?? [];
    }
}
