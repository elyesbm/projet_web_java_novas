<?php

namespace App\Repository;

use App\Entity\LearningPath;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LearningPath>
 */
class LearningPathRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LearningPath::class);
    }

    /**
     * Recherche et filtre pour l'admin parcours.
     *
     * @param string|null $q       Recherche dans titre, description, nom de la compétence
     * @param int|null    $niveau  1=débutant, 2=intermédiaire, 3=avancé
     * @param int|null    $statut  0=inactif, 1=actif
     * @return LearningPath[]
     */
    public function searchAndFilter(?string $q, ?int $niveau, ?int $statut): array
    {
        $qb = $this->createQueryBuilder('lp')
            ->leftJoin('lp.skill', 's')
            ->addSelect('s')
            ->orderBy('lp.titre_path', 'ASC');

        if ($q !== null && $q !== '') {
            $qb->andWhere('lp.titre_path LIKE :q OR lp.description_skill LIKE :q OR s.nom_skill LIKE :q')
                ->setParameter('q', '%' . $q . '%');
        }

        if ($niveau !== null && $niveau >= 1 && $niveau <= 3) {
            $qb->andWhere('lp.niveau_path = :niveau')
                ->setParameter('niveau', $niveau);
        }

        if ($statut !== null && in_array($statut, [0, 1], true)) {
            $qb->andWhere('lp.statut_path = :statut')
                ->setParameter('statut', $statut);
        }

        return $qb->getQuery()->getResult();
    }

    //    /**
    //     * @return LearningPath[] Returns an array of LearningPath objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?LearningPath
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
