<?php

namespace App\Entity;

use App\Repository\LearningPathRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LearningPathRepository::class)]
#[ORM\HasLifecycleCallbacks]
class LearningPath
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_learning')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre_path = null;

    #[ORM\Column(length: 255)]
    private ?string $description_skill = null;

    #[ORM\Column]
    private ?int $duree_estimee = null;

    #[ORM\Column]
    private ?int $contexte_path = null;

    #[ORM\Column]
    private ?int $statut_path = null;

    #[ORM\Column]
    private ?int $niveau_path = null;

    #[ORM\ManyToOne(targetEntity: Skill::class, inversedBy: 'learningPaths')]
    #[ORM\JoinColumn(name: 'id_skill', referencedColumnName: 'id_skill', nullable: false)]
    private ?Skill $skill = null;

    /** @var Collection<int, LearningPathEtape> */
    #[ORM\OneToMany(mappedBy: 'learningPath', targetEntity: LearningPathEtape::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    #[ORM\OrderBy(['ordre' => 'ASC'])]
    private Collection $etapes;

    public function __construct()
    {
        $this->etapes = new ArrayCollection();
    }

    /** @return Collection<int, LearningPathEtape> */
    public function getEtapes(): Collection { return $this->etapes; }
    public function addEtape(LearningPathEtape $etape): static
    {
        if (!$this->etapes->contains($etape)) {
            $this->etapes->add($etape);
            $etape->setLearningPath($this);
        }
        return $this;
    }
    public function removeEtape(LearningPathEtape $etape): static
    {
        if ($this->etapes->removeElement($etape) && $etape->getLearningPath() === $this) {
            $etape->setLearningPath(null);
        }
        return $this;
    }

    /** Étapes filtrées par niveau du parcours (débutant=1 voit niveau 1, intermédiaire=2 voit 1+2, avancé=3 voit tout) */
    public function getEtapesPourNiveau(): Collection
    {
        $niveau = $this->niveau_path ?? 1;
        return $this->etapes->filter(fn(LearningPathEtape $e) => ($e->getNiveauMin() ?? 1) <= $niveau);
    }

    public function getId(): ?int { return $this->id; }
    public function getTitrePath(): ?string { return $this->titre_path; }
    public function setTitrePath(string $titre_path): static { $this->titre_path = $titre_path; return $this; }
    public function getDescriptionSkill(): ?string { return $this->description_skill; }
    public function setDescriptionSkill(?string $description_skill): static { $this->description_skill = $description_skill ?? ''; return $this; }

    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function ensureDescriptionNotNull(): void
    {
        if ($this->description_skill === null) {
            $this->description_skill = '';
        }
    }
    public function getDureeEstimee(): ?int { return $this->duree_estimee; }
    public function setDureeEstimee(int $duree_estimee): static { $this->duree_estimee = $duree_estimee; return $this; }
    public function getContextePath(): ?int { return $this->contexte_path; }
    public function setContextePath(int $contexte_path): static { $this->contexte_path = $contexte_path; return $this; }
    public function getStatutPath(): ?int { return $this->statut_path; }
    public function setStatutPath(int $statut_path): static { $this->statut_path = $statut_path; return $this; }
    public function getNiveauPath(): ?int { return $this->niveau_path; }
    public function setNiveauPath(int $niveau_path): static { $this->niveau_path = $niveau_path; return $this; }
    public function getSkill(): ?Skill { return $this->skill; }
    public function setSkill(?Skill $skill): static { $this->skill = $skill; return $this; }
}