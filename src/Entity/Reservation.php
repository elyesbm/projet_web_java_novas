<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_reservation')]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nom_user = null;

    #[ORM\Column]
    private ?int $email_user = null;

    #[ORM\Column(length: 255)]
    private ?string $commentaire_reservation = null;

    #[ORM\Column]
    private ?int $statut_reservation = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'ID', nullable: false, onDelete: 'CASCADE')]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Atelier::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'id_atelier', referencedColumnName: 'id_atelier', nullable: false, onDelete: 'CASCADE')]
    private ?Atelier $atelier = null;

    public function getId(): ?int { return $this->id; }
    public function getNomUser(): ?int { return $this->nom_user; }
    public function setNomUser(int $nom_user): static { $this->nom_user = $nom_user; return $this; }
    public function getEmailUser(): ?int { return $this->email_user; }
    public function setEmailUser(int $email_user): static { $this->email_user = $email_user; return $this; }
    public function getCommentaireReservation(): ?string { return $this->commentaire_reservation; }
    public function setCommentaireReservation(string $commentaire_reservation): static { $this->commentaire_reservation = $commentaire_reservation; return $this; }
    public function getStatutReservation(): ?int { return $this->statut_reservation; }
    public function setStatutReservation(int $statut_reservation): static { $this->statut_reservation = $statut_reservation; return $this; }
    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): static { $this->user = $user; return $this; }
    public function getAtelier(): ?Atelier { return $this->atelier; }
    public function setAtelier(?Atelier $atelier): static { $this->atelier = $atelier; return $this; }
}
