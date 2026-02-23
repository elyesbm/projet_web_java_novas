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
     */
    public function searchAndFilterQueryBuilder(?string $q, ?string $type, ?string $categorie)
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

        return $qb;
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
        return $this->searchAndFilterQueryBuilder($q, $type, $categorie)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte les compétences par tendance marché (pour graphique admin).
     *
     * @return array{en_hausse: int, stable: int, en_baisse: int, sans_tendance: int}
     */
    public function getCountByTendance(): array
    {
        $qb = $this->createQueryBuilder('s')
            ->select('s.tendanceMarche', 'COUNT(s.id) as cnt')
            ->groupBy('s.tendanceMarche');

        $result = $qb->getQuery()->getResult();
        $out = ['en_hausse' => 0, 'stable' => 0, 'en_baisse' => 0, 'sans_tendance' => 0];

        foreach ($result as $row) {
            $t = $row['tendanceMarche'];
            $cnt = (int) $row['cnt'];
            if ($t === 'en_hausse') {
                $out['en_hausse'] = $cnt;
            } elseif ($t === 'stable') {
                $out['stable'] = $cnt;
            } elseif ($t === 'en_baisse') {
                $out['en_baisse'] = $cnt;
            } else {
                $out['sans_tendance'] += $cnt;
            }
        }
        return $out;
    }

    /**
     * Compétences avec statistiques marché (pour courbe nombre d'offres).
     *
     * @return Skill[]
     */
    public function findWithMarketStats(): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.nombreOffresAssociees IS NOT NULL')
            ->orderBy('s.nombreOffresAssociees', 'DESC')
            ->setMaxResults(30)
            ->getQuery()
            ->getResult();
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
