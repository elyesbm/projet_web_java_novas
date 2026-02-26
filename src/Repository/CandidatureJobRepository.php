<?php

namespace App\Repository;

use App\Entity\CandidatureJob;
use App\Enum\ModerationStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CandidatureJob>
 */
class CandidatureJobRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CandidatureJob::class);
    }

    /**
     * @return CandidatureJob[]
     */
    public function findPendingModeration(): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.moderationStatus = :pending')
            ->setParameter('pending', ModerationStatus::PENDING)
            ->orderBy('c.date_candidature', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
