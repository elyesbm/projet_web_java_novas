<?php

namespace App\Repository;

use App\Entity\Atelier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Atelier>
 */
class AtelierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Atelier::class);
    }

    /**
     * Recherche et filtre les ateliers par nom et contexte.
     * 
     * @param string|null $search Terme de recherche (nom d'atelier)
     * @param int|null $contexte Filtre par contexte : 0 = Soft Skill, 1 = Hard Skill, null = tous
     * @param string|null $sort Tri : 'date_asc', 'date_desc', 'titre_asc', 'titre_desc', null = date_asc par défaut
     * @return Atelier[]
     */
    public function searchAndFilter(?string $search = null, ?int $contexte = null, ?string $sort = null): array
    {
        return $this->searchAndFilterQueryBuilder($search, $contexte, $sort)
            ->getQuery()
            ->getResult();
    }

    /**
     * Construit la requête pour la recherche et le filtre des ateliers.
     *
     * @param string|null $search Terme de recherche (nom d'atelier)
     * @param int|null $contexte Filtre par contexte : 0 = Soft Skill, 1 = Hard Skill, null = tous
     * @param string|null $sort Tri : 'date_asc', 'date_desc', 'titre_asc', 'titre_desc', null = date_asc par défaut
     */
    public function searchAndFilterQueryBuilder(?string $search = null, ?int $contexte = null, ?string $sort = null): QueryBuilder
    {
        $qb = $this->createQueryBuilder('a');

        // Recherche par nom d'atelier (insensible à la casse)
        if ($search !== null && $search !== '') {
            $qb->andWhere('LOWER(a.titre_atelier) LIKE LOWER(:search)')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par contexte (Soft Skill = 0, Hard Skill = 1)
        if ($contexte !== null) {
            $qb->andWhere('a.contexte_atelier = :contexte')
               ->setParameter('contexte', $contexte);
        }

        // Tri selon le paramètre
        switch ($sort) {
            case 'date_desc':
                $qb->orderBy('a.date_atelier', 'DESC');
                break;
            case 'titre_asc':
                $qb->orderBy('a.titre_atelier', 'ASC');
                break;
            case 'titre_desc':
                $qb->orderBy('a.titre_atelier', 'DESC');
                break;
            case 'date_asc':
            default:
                $qb->orderBy('a.date_atelier', 'ASC');
                break;
        }

        return $qb;
    }

    /**
     * Recherche, filtre et tri les ateliers pour l'admin.
     * 
     * @param string|null $search Terme de recherche (nom d'atelier)
     * @param int|null $contexte Filtre par contexte : 0 = Soft Skill, 1 = Hard Skill, null = tous
     * @param string|null $sort Tri : 'date_asc', 'date_desc', 'titre_asc', 'titre_desc', 'id_desc', null = id_desc par défaut
     * @return Atelier[]
     */
    public function searchFilterAndSort(?string $search = null, ?int $contexte = null, ?string $sort = null): array
    {
        $qb = $this->createQueryBuilder('a');

        // Recherche par nom d'atelier (insensible à la casse)
        if ($search !== null && $search !== '') {
            $qb->andWhere('LOWER(a.titre_atelier) LIKE LOWER(:search)')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par contexte
        if ($contexte !== null) {
            $qb->andWhere('a.contexte_atelier = :contexte')
               ->setParameter('contexte', $contexte);
        }

        // Tri selon le paramètre
        switch ($sort) {
            case 'date_asc':
                $qb->orderBy('a.date_atelier', 'ASC');
                break;
            case 'date_desc':
                $qb->orderBy('a.date_atelier', 'DESC');
                break;
            case 'titre_asc':
                $qb->orderBy('a.titre_atelier', 'ASC');
                break;
            case 'titre_desc':
                $qb->orderBy('a.titre_atelier', 'DESC');
                break;
            case 'id_desc':
            default:
                $qb->orderBy('a.id', 'DESC');
                break;
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Count ateliers by contexte.
     *
     * @return array{soft:int,hard:int}
     */
    public function countByContexte(): array
    {
        $rows = $this->createQueryBuilder('a')
            ->select('a.contexte_atelier AS contexte, COUNT(a.id) AS total')
            ->groupBy('a.contexte_atelier')
            ->getQuery()
            ->getResult();

        $stats = ['soft' => 0, 'hard' => 0];
        foreach ($rows as $row) {
            $contexte = (string) $row['contexte'];
            if ($contexte === '0') {
                $stats['soft'] = (int) $row['total'];
            } elseif ($contexte === '1') {
                $stats['hard'] = (int) $row['total'];
            }
        }

        return $stats;
    }

    public function findNextUpcomingAtelier(): ?Atelier
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.date_atelier >= :today')
            ->setParameter('today', new \DateTimeImmutable('today'))
            ->orderBy('a.date_atelier', 'ASC')
            ->addOrderBy('a.id', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    //    /**
    //     * @return Atelier[] Returns an array of Atelier objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Atelier
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
