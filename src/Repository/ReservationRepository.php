<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    /**
     * Vérifie si l'utilisateur a déjà une réservation pour cet atelier (contrôle côté serveur).
     */
    public function existsForUserAndAtelier(\App\Entity\User $user, \App\Entity\Atelier $atelier): bool
    {
        return $this->createQueryBuilder('r')
            ->select('1')
            ->where('r.user = :user')
            ->andWhere('r.atelier = :atelier')
            ->setParameter('user', $user)
            ->setParameter('atelier', $atelier)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult() !== null;
    }

    /**
     * Compte les réservations par contexte d'atelier (Soft / Hard) pour les stats admin.
     *
     * @return array{soft:int,hard:int}
     */
    public function countByContexte(): array
    {
        $qb = $this->createQueryBuilder('r')
            ->select('a.contexte_atelier AS contexte, COUNT(r.id) AS total')
            ->leftJoin('r.atelier', 'a')
            ->groupBy('a.contexte_atelier');

        $rows = $qb->getQuery()->getResult();

        $stats = ['soft' => 0, 'hard' => 0];
        foreach ($rows as $row) {
            // contexte: 0 = Soft Skill, 1 = Hard Skill
            if ($row['contexte'] === 0 || $row['contexte'] === '0') {
                $stats['soft'] = (int) $row['total'];
            } elseif ($row['contexte'] === 1 || $row['contexte'] === '1') {
                $stats['hard'] = (int) $row['total'];
            }
        }

        return $stats;
    }

    /**
     * Recherche et filtre les réservations d'un utilisateur par nom d'atelier et statut.
     * 
     * @param \App\Entity\User $user L'utilisateur propriétaire des réservations
     * @param string|null $search Terme de recherche (nom d'atelier)
     * @param int|null $statut Filtre par statut : 0 = En attente, 1 = Confirmée, null = tous
     * @return Reservation[]
     */
    public function searchAndFilterByUser(\App\Entity\User $user, ?string $search = null, ?int $statut = null): array
    {
        $qb = $this->createQueryBuilder('r')
            ->leftJoin('r.atelier', 'a')
            ->where('r.user = :user')
            ->setParameter('user', $user);

        // Recherche par nom d'atelier (insensible à la casse)
        if ($search !== null && $search !== '') {
            $qb->andWhere('LOWER(a.titre_atelier) LIKE LOWER(:search)')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut (0 = En attente, 1 = Confirmée)
        if ($statut !== null) {
            $qb->andWhere('r.statut_reservation = :statut')
               ->setParameter('statut', $statut);
        }

        // Tri par date d'atelier (ateliers à venir en premier)
        $qb->orderBy('a.date_atelier', 'ASC');

        return $qb->getQuery()->getResult();
    }

    /**
     * Recherche, filtre et tri les réservations pour l'admin.
     * 
     * @param string|null $search Terme de recherche (nom d'atelier ou nom/email utilisateur)
     * @param int|null $statut Filtre par statut : 0 = En attente, 1 = Confirmée, 2 = Refusée, null = tous
     * @param string|null $sort Tri : 'id_desc', 'id_asc', 'date_asc', 'date_desc', 'nom_asc', 'nom_desc', null = id_desc par défaut
     * @return Reservation[]
     */
    public function searchFilterAndSort(?string $search = null, ?int $statut = null, ?string $sort = null): array
    {
        $qb = $this->createQueryBuilder('r')
            ->leftJoin('r.atelier', 'a');

        // Recherche par nom d'atelier, nom utilisateur ou email (insensible à la casse)
        if ($search !== null && $search !== '') {
            $qb->andWhere('LOWER(a.titre_atelier) LIKE LOWER(:search) 
                OR LOWER(r.nom_user) LIKE LOWER(:search) 
                OR LOWER(r.email_user) LIKE LOWER(:search)')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut
        if ($statut !== null) {
            $qb->andWhere('r.statut_reservation = :statut')
               ->setParameter('statut', $statut);
        }

        // Tri selon le paramètre
        switch ($sort) {
            case 'id_asc':
                $qb->orderBy('r.id', 'ASC');
                break;
            case 'date_asc':
                $qb->orderBy('a.date_atelier', 'ASC');
                break;
            case 'date_desc':
                $qb->orderBy('a.date_atelier', 'DESC');
                break;
            case 'nom_asc':
                $qb->orderBy('r.nom_user', 'ASC');
                break;
            case 'nom_desc':
                $qb->orderBy('r.nom_user', 'DESC');
                break;
            case 'id_desc':
            default:
                $qb->orderBy('r.id', 'DESC');
                break;
        }

        return $qb->getQuery()->getResult();
    }

    //    /**
    //     * @return Reservation[] Returns an array of Reservation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Reservation
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
