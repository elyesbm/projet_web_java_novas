<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_comm')]
    private ?int $id = null;

    #[ORM\Column(type: 'text')]
    private ?string $image = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date_creation = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: "Le commentaire ne peut pas être vide.")]
#[Assert\Length(
    min: 5,
    max: 1000,
    minMessage: "Le contenu doit contenir au moins {{ limit }} caractères.",
    maxMessage: "Le commentaire ne doit pas dépasser {{ limit }} caractères."
)]
    private ?string $contenu = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'commentaires')]
    #[ORM\JoinColumn(name: 'id_auteur', referencedColumnName: 'ID', nullable: false)]
    private ?User $auteur = null;

    #[ORM\ManyToOne(targetEntity: Publication::class, inversedBy: 'commentaires')]
    #[ORM\JoinColumn(name: 'id_pub', referencedColumnName: 'id_pub', nullable: false)]
    private ?Publication $publication = null;

    public function getId(): ?int { return $this->id; }
    public function getImage(): ?string { return $this->image; }
    public function setImage(string $image): static { $this->image = $image; return $this; }
    public function getDateCreation(): ?\DateTimeInterface { return $this->date_creation; }
    public function setDateCreation(\DateTimeInterface $date_creation): static { $this->date_creation = $date_creation; return $this; }
    public function getContenu(): ?string { return $this->contenu; }
    public function setContenu(?string $contenu): static { $this->contenu = $contenu; return $this; }
    public function getAuteur(): ?User { return $this->auteur; }
    public function setAuteur(?User $auteur): static { $this->auteur = $auteur; return $this; }
    public function getPublication(): ?Publication { return $this->publication; }
    public function setPublication(?Publication $publication): static { $this->publication = $publication; return $this; }
}
