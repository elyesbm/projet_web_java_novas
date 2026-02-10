<?php

namespace App\Entity;

use App\Enum\OffreCategorie;
use App\Enum\OffreLieu;
use App\Enum\OffreStatut;
use App\Repository\OffrejobRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\Column(type: Types::TEXT, length: 65535)]
    private ?string $description_offre = null;

    #[ORM\Column(
        type: Types::ENUM,
        enumType: OffreCategorie::class,
        options: ['values' => ['TUTORAT', 'CREATION', 'AIDE']]
    )]
    private ?OffreCategorie $categorie_offre = null;

    #[ORM\Column(
        type: Types::ENUM,
        enumType: OffreLieu::class,
        options: ['values' => ['EN_LIGNE', 'PRESENTIEL']]
    )]
    private ?OffreLieu $lieu = null;

    #[ORM\Column(
        type: Types::ENUM,
        enumType: OffreStatut::class,
        options: ['values' => ['OUVERTE', 'FERMEE'], 'default' => 'OUVERTE']
    )]
    private ?OffreStatut $statut_offre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $date_creation_offre = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'offrejobs')]
    #[ORM\JoinColumn(name: 'createur_id', referencedColumnName: 'ID', nullable: false)]
    private ?User $createur = null;

    #[ORM\OneToMany(mappedBy: 'offre', targetEntity: CandidatureJob::class)]
    private Collection $candidatures;

    public function __construct()
    {
        $this->candidatures = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getTitreOffre(): ?string { return $this->titre_offre; }
    public function setTitreOffre(string $titre_offre): static { $this->titre_offre = $titre_offre; return $this; }
    public function getDescriptionOffre(): ?string { return $this->description_offre; }
    public function setDescriptionOffre(string $description_offre): static { $this->description_offre = $description_offre; return $this; }
    public function getCategorieOffre(): ?string { return $this->categorie_offre?->value; }
    public function getCategorieOffreEnum(): ?OffreCategorie { return $this->categorie_offre; }
    public function setCategorieOffre(OffreCategorie|string $categorie_offre): static
    {
        $this->categorie_offre = $categorie_offre instanceof OffreCategorie
            ? $categorie_offre
            : OffreCategorie::from($categorie_offre);
        return $this;
    }
    public function getLieu(): ?string { return $this->lieu?->value; }
    public function getLieuEnum(): ?OffreLieu { return $this->lieu; }
    public function setLieu(OffreLieu|string $lieu): static
    {
        $this->lieu = $lieu instanceof OffreLieu ? $lieu : OffreLieu::from($lieu);
        return $this;
    }
    public function getStatutOffre(): ?string { return $this->statut_offre?->value; }
    public function getStatutOffreEnum(): ?OffreStatut { return $this->statut_offre; }
    public function setStatutOffre(OffreStatut|string $statut_offre): static
    {
        $this->statut_offre = $statut_offre instanceof OffreStatut
            ? $statut_offre
            : OffreStatut::from($statut_offre);
        return $this;
    }
    public function getDateCreationOffre(): ?\DateTimeInterface { return $this->date_creation_offre; }
    public function setDateCreationOffre(\DateTimeInterface $date_creation_offre): static { $this->date_creation_offre = $date_creation_offre; return $this; }
    public function getCreateur(): ?User { return $this->createur; }
    public function setCreateur(?User $createur): static { $this->createur = $createur; return $this; }
    public function getCandidatures(): Collection { return $this->candidatures; }
}
