<?php

namespace App\Repository;

use App\Entity\Atelier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
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

        return $qb->getQuery()->getResult();
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
