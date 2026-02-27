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

    /**
     * Nombre total de réactions de type signal (value = 2).
     */
    public function countSignals(): int
    {
        return (int) $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->andWhere('r.value = :signalValue')
            ->setParameter('signalValue', 2)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Utilisateurs qui ont signalé chaque publication (value = 2).
     *
     * @param int[] $publicationIds
     * @return array<int, array<int, array<string, mixed>>>
     */
    public function findSignalersByPublicationIds(array $publicationIds): array
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
                'r.dateCreation AS signaledAt',
                'r.signalReason AS signalReason'
            )
            ->join('r.user', 'u')
            ->andWhere('r.value = :signalValue')
            ->andWhere('IDENTITY(r.publication) IN (:publicationIds)')
            ->setParameter('signalValue', 2)
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
    public function findSignalersByPublicationId(int $publicationId): array
    {
        if ($publicationId <= 0) {
            return [];
        }
        $grouped = $this->findSignalersByPublicationIds([$publicationId]);
        return $grouped[$publicationId] ?? [];
    }
}
