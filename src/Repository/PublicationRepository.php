<?php

namespace App\Repository;

use App\Entity\Publication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Publication>
 */
class PublicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Publication::class);
    }

    /**
     * @return list<Publication>
     */
    public function findActiveWithFilters(?string $q, ?int $contexteFilter, string $sort = 'created_desc'): array
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.auteur', 'a')
            ->addSelect('a')
            ->andWhere('p.statut = :statut')
            ->setParameter('statut', 1);

        if ($contexteFilter !== null && \in_array($contexteFilter, [1, 2], true)) {
            $qb->andWhere('p.contexte = :contexte')
                ->setParameter('contexte', $contexteFilter);
        }

        $needle = trim((string) $q);
        if ($needle !== '') {
            $qb->andWhere(
                'LOWER(p.titre) LIKE :q 
                 OR LOWER(p.contenu) LIKE :q 
                 OR LOWER(a.NOM) LIKE :q 
                 OR LOWER(a.PRENOM) LIKE :q'
            )->setParameter('q', '%' . mb_strtolower($needle) . '%');
        }

        switch ($sort) {
            case 'updated_desc':
                $qb->addOrderBy('p.date_modification', 'DESC')
                    ->addOrderBy('p.date_creation', 'DESC');
                break;
            case 'created_desc':
            default:
                $qb->addOrderBy('p.date_creation', 'DESC');
                break;
        }

        /** @var list<Publication> $result */
        $result = $qb->getQuery()->getResult();

        return $result;
    }
}
