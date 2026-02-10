<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
     * Search articles by a free-text query (id, titre, statut) with optional exact criteria and ordering.
     *
     * @param string|null $q
     * @param array $criteria
     * @param array $order
     * @return Article[]
     */
    public function search(?string $q, array $criteria = [], array $order = []): array
    {
        $qb = $this->createQueryBuilder('a');

        if (!empty($criteria['categorie'])) {
            $qb->andWhere('a.categorie = :cat')->setParameter('cat', $criteria['categorie']);
        }
        if (!empty($criteria['type_article'])) {
            $qb->andWhere('a.type_article = :type')->setParameter('type', $criteria['type_article']);
        }
        if (!empty($criteria['statut_article'])) {
            $qb->andWhere('a.statut_article = :statut')->setParameter('statut', $criteria['statut_article']);
        }

        if ($q !== null && $q !== '') {
            $qTrim = trim($q);
            $orX = $qb->expr()->orX();
            // Search by id when q is numeric
            if (is_numeric($qTrim)) {
                $orX->add('a.id = :id');
                $qb->setParameter('id', (int) $qTrim);
            }
            $orX->add('LOWER(a.titre_article) LIKE :like');
            $orX->add('LOWER(a.statut_article) LIKE :like');
            $qb->andWhere($orX)
               ->setParameter('like', '%'.mb_strtolower($qTrim).'%');
        }

        // Apply ordering
        foreach ($order as $field => $dir) {
            // Map possible fields to entity fields
            $fieldMap = [
                'id' => 'a.id',
                'prix_article' => 'a.prix_article',
                'date' => 'a.id',
            ];
            $fieldExpr = $fieldMap[$field] ?? 'a.id';
            $qb->addOrderBy($fieldExpr, strtoupper($dir) === 'ASC' ? 'ASC' : 'DESC');
        }

        return $qb->getQuery()->getResult();
    }

//    /**
//     * @return Article[] Returns an array of Article objects
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

//    public function findOneBySomeField($value): ?Article
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
