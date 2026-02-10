<?php

namespace App\Entity;

use App\Repository\PublicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublicationRepository::class)]
class Publication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_pub')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: 'text')]
    private ?string $contenu = null;

    #[ORM\Column(type: 'text')]
    private ?string $image_auteur = null;

    #[ORM\Column]
    private ?int $statut = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $date_creation = null;

    #[ORM\Column]
    private ?int $contexte = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'publications')]
    #[ORM\JoinColumn(name: 'id_auteur', referencedColumnName: 'ID', nullable: false)]
    private ?User $auteur = null;

    #[ORM\OneToMany(mappedBy: 'publication', targetEntity: Commentaire::class)]
    private Collection $commentaires;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(string $titre): static { $this->titre = $titre; return $this; }
    public function getContenu(): ?string { return $this->contenu; }
    public function setContenu(string $contenu): static { $this->contenu = $contenu; return $this; }
    public function getImageAuteur(): ?string { return $this->image_auteur; }
    public function setImageAuteur(string $image_auteur): static { $this->image_auteur = $image_auteur; return $this; }
    public function getStatut(): ?int { return $this->statut; }
    public function setStatut(int $statut): static { $this->statut = $statut; return $this; }
    public function getDateCreation(): ?\DateTimeInterface { return $this->date_creation; }
    public function setDateCreation(\DateTimeInterface $date_creation): static { $this->date_creation = $date_creation; return $this; }
    public function getContexte(): ?int { return $this->contexte; }
    public function setContexte(int $contexte): static { $this->contexte = $contexte; return $this; }
    public function getAuteur(): ?User { return $this->auteur; }
    public function setAuteur(?User $auteur): static { $this->auteur = $auteur; return $this; }
    public function getCommentaires(): Collection { return $this->commentaires; }
}