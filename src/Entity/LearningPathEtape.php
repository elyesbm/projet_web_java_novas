<?php

namespace App\Entity;

use App\Repository\LearningPathEtapeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LearningPathEtapeRepository::class)]
class LearningPathEtape
{
    public const TYPE_POST = 'post';
    public const TYPE_VIDEO = 'video';
    public const TYPE_EXERCICE = 'exercice';
    public const TYPE_QUIZ = 'quiz';

    public const NIVEAU_DEBUTANT = 1;
    public const NIVEAU_INTERMEDIAIRE = 2;
    public const NIVEAU_AVANCE = 3;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_etape')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private ?string $type_etape = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $url = null;

    #[ORM\Column]
    private ?int $duree_minutes = null;

    #[ORM\Column]
    private ?int $ordre = null;

    /** 1=débutant (contenu accessible à tous), 2=intermédiaire+, 3=avancé uniquement */
    #[ORM\Column]
    private ?int $niveau_min = 1;

    #[ORM\ManyToOne(targetEntity: LearningPath::class, inversedBy: 'etapes')]
    #[ORM\JoinColumn(name: 'id_learning', referencedColumnName: 'id_learning', onDelete: 'CASCADE')]
    private ?LearningPath $learningPath = null;

    public function getId(): ?int { return $this->id; }
    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(string $titre): static { $this->titre = $titre; return $this; }
    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): static { $this->description = $description; return $this; }
    public function getTypeEtape(): ?string { return $this->type_etape; }
    public function setTypeEtape(string $type_etape): static { $this->type_etape = $type_etape; return $this; }
    public function getUrl(): ?string { return $this->url; }
    public function setUrl(?string $url): static { $this->url = $url; return $this; }
    public function getDureeMinutes(): ?int { return $this->duree_minutes; }
    public function setDureeMinutes(int $duree_minutes): static { $this->duree_minutes = $duree_minutes; return $this; }
    public function getOrdre(): ?int { return $this->ordre; }
    public function setOrdre(int $ordre): static { $this->ordre = $ordre; return $this; }
    public function getNiveauMin(): ?int { return $this->niveau_min; }
    public function setNiveauMin(int $niveau_min): static { $this->niveau_min = $niveau_min; return $this; }
    public function getLearningPath(): ?LearningPath { return $this->learningPath; }
    public function setLearningPath(?LearningPath $learningPath): static { $this->learningPath = $learningPath; return $this; }
}
