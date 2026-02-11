<?php

namespace App\Repository;

use App\Entity\Skill;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Skill>
 */
class SkillRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Skill::class);
    }

    /**
     * @return Skill[]
     */
    public function findByCreateur(User $user): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.createur = :user')
            ->setParameter('user', $user)
            ->orderBy('s.nom_skill', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche et filtre pour le catalogue front.
     *
     * @param string|null $q        Recherche dans nom et description (LIKE)
     * @param string|null $type     'hard' ou 'soft' (contexte_skill)
     * @param string|null $categorie Nom de catégorie exact
     * @return Skill[]
     */
    public function searchAndFilter(?string $q, ?string $type, ?string $categorie): array
    {
        $qb = $this->createQueryBuilder('s')
            ->orderBy('s.nom_skill', 'ASC');

        if ($q !== null && $q !== '') {
            $qb->andWhere('s.nom_skill LIKE :q OR s.description_skill LIKE :q')
                ->setParameter('q', '%' . $q . '%');
        }

        if ($type !== null && $type !== '' && \in_array($type, ['hard', 'soft'], true)) {
            $qb->andWhere('s.contexte_skill = :type')
                ->setParameter('type', $type);
        }

        if ($categorie !== null && $categorie !== '') {
            $qb->andWhere('s.categorie = :categorie')
                ->setParameter('categorie', $categorie);
        }

        return $qb->getQuery()->getResult();
    }

    //    /**
    //     * @return Skill[] Returns an array of Skill objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Skill
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
