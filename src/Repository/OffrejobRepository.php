<?php

namespace App\Repository;

use App\Entity\Offrejob;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

class OffrejobRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offrejob::class);
    }

    /** Front: offres visibles (recherche + filtres + tri) */
    public function searchAndSort(
        ?string $q,
        ?string $categorie,
        ?string $lieu,
        ?string $statut,
        string $sort = 'date',
        string $dir = 'desc'
    ): array
    {
        return $this->searchAndSortQueryBuilder($q, $categorie, $lieu, $statut, $sort, $dir)
            ->getQuery()
            ->getResult();
    }

    /** Front: same filters/sort, but query builder for pagination */
    public function searchAndSortQueryBuilder(
        ?string $q,
        ?string $categorie,
        ?string $lieu,
        ?string $statut,
        string $sort = 'date',
        string $dir = 'desc'
    ): QueryBuilder {
        $qb = $this->createQueryBuilder('o');

        if ($q) {
            $qb->andWhere('LOWER(o.titre_offre) LIKE :q
                        OR LOWER(o.description_offre) LIKE :q
                        OR LOWER(o.categorie_offre) LIKE :q
                        OR LOWER(o.lieu) LIKE :q')
               ->setParameter('q', '%'.mb_strtolower($q).'%');
        }

        $this->applyFilters($qb, $categorie, $lieu, $statut);

        $map = [
            'date' => 'o.date_creation_offre',
            'titre' => 'o.titre_offre',
            'categorie' => 'o.categorie_offre',
            'lieu' => 'o.lieu',
            'statut' => 'o.statut_offre',
        ];

        $sortCol = $map[$sort] ?? $map['date'];
        $dir = strtolower($dir) === 'asc' ? 'ASC' : 'DESC';

        return $qb->orderBy($sortCol, $dir);
    }

    /** Créateur: mes offres (recherche + filtres + tri) */
    public function searchMine(
        int $creatorId,
        ?string $q,
        ?string $categorie,
        ?string $lieu,
        ?string $statut,
        string $sort = 'date',
        string $dir = 'desc'
    ): array
    {
        $qb = $this->createQueryBuilder('o')
            ->andWhere('o.createur = :cid')
            ->setParameter('cid', $creatorId);

        if ($q) {
            $qb->andWhere('LOWER(o.titre_offre) LIKE :q
                        OR LOWER(o.description_offre) LIKE :q
                        OR LOWER(o.categorie_offre) LIKE :q
                        OR LOWER(o.lieu) LIKE :q')
               ->setParameter('q', '%'.mb_strtolower($q).'%');
        }

        $this->applyFilters($qb, $categorie, $lieu, $statut);

        $map = [
            'date' => 'o.date_creation_offre',
            'titre' => 'o.titre_offre',
            'categorie' => 'o.categorie_offre',
            'lieu' => 'o.lieu',
            'statut' => 'o.statut_offre',
        ];

        $sortCol = $map[$sort] ?? $map['date'];
        $dir = strtolower($dir) === 'asc' ? 'ASC' : 'DESC';

        return $qb->orderBy($sortCol, $dir)->getQuery()->getResult();
    }

    private function applyFilters($qb, ?string $categorie, ?string $lieu, ?string $statut): void
    {
        if ($categorie) {
            $qb->andWhere('o.categorie_offre = :categorie')
               ->setParameter('categorie', $categorie);
        }

        if ($lieu) {
            $qb->andWhere('o.lieu = :lieu')
               ->setParameter('lieu', $lieu);
        }

        if ($statut) {
            $qb->andWhere('o.statut_offre = :statut')
               ->setParameter('statut', $statut);
        }
    }
}
