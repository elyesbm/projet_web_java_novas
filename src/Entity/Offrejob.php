<?php

namespace App\Entity;

use App\Repository\OffrejobRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffrejobRepository::class)]
class Offrejob
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_offre')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre_offre = null;

    #[ORM\Column(length: 255)]
    private ?string $description_offre = null;

    #[ORM\Column(length: 50)]
    private ?string $categorie_offre = null;

    #[ORM\Column(length: 50)]
    private ?string $lieu = null;

    #[ORM\Column(length: 50)]
    private ?string $statut_offre = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $date_creation_offre = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'offrejobs')]
    #[ORM\JoinColumn(name: 'createur_id', referencedColumnName: 'ID', nullable: false)]
    private ?User $createur = null;

    #[ORM\OneToMany(mappedBy: 'offre', targetEntity: CondidatureJob::class)]
    private Collection $condidatures;

    public function __construct()
    {
        $this->condidatures = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getTitreOffre(): ?string { return $this->titre_offre; }
    public function setTitreOffre(string $titre_offre): static { $this->titre_offre = $titre_offre; return $this; }
    public function getDescriptionOffre(): ?string { return $this->description_offre; }
    public function setDescriptionOffre(string $description_offre): static { $this->description_offre = $description_offre; return $this; }
    public function getCategorieOffre(): ?string { return $this->categorie_offre; }
    public function setCategorieOffre(string $categorie_offre): static { $this->categorie_offre = $categorie_offre; return $this; }
    public function getLieu(): ?string { return $this->lieu; }
    public function setLieu(string $lieu): static { $this->lieu = $lieu; return $this; }
    public function getStatutOffre(): ?string { return $this->statut_offre; }
    public function setStatutOffre(string $statut_offre): static { $this->statut_offre = $statut_offre; return $this; }
    public function getDateCreationOffre(): ?\DateTimeInterface { return $this->date_creation_offre; }
    public function setDateCreationOffre(\DateTimeInterface $date_creation_offre): static { $this->date_creation_offre = $date_creation_offre; return $this; }
    public function getCreateur(): ?User { return $this->createur; }
    public function setCreateur(?User $createur): static { $this->createur = $createur; return $this; }
    public function getCondidatures(): Collection { return $this->condidatures; }
}