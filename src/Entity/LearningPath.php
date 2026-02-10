<?php

namespace App\Entity;

use App\Repository\LearningPathRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LearningPathRepository::class)]
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
    #[ORM\JoinColumn(name: 'id_skill', referencedColumnName: 'id_skill', nullable: false, onDelete: 'CASCADE')]
    private ?Skill $skill = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePath(): ?string
    {
        return $this->titre_path;
    }

    public function setTitrePath(string $titre_path): static
    {
        $this->titre_path = $titre_path;
        return $this;
    }

    public function getDescriptionSkill(): ?string
    {
        return $this->description_skill;
    }

    public function setDescriptionSkill(string $description_skill): static
    {
        $this->description_skill = $description_skill;
        return $this;
    }

    public function getDureeEstimee(): ?int
    {
        return $this->duree_estimee;
    }

    public function setDureeEstimee(int $duree_estimee): static
    {
        $this->duree_estimee = $duree_estimee;
        return $this;
    }

    public function getContextePath(): ?int
    {
        return $this->contexte_path;
    }

    public function setContextePath(int $contexte_path): static
    {
        $this->contexte_path = $contexte_path;
        return $this;
    }

    public function getStatutPath(): ?int
    {
        return $this->statut_path;
    }

    public function setStatutPath(int $statut_path): static
    {
        $this->statut_path = $statut_path;
        return $this;
    }

    public function getNiveauPath(): ?int
    {
        return $this->niveau_path;
    }

    public function setNiveauPath(int $niveau_path): static
    {
        $this->niveau_path = $niveau_path;
        return $this;
    }

    public function getSkill(): ?Skill
    {
        return $this->skill;
    }

    public function setSkill(?Skill $skill): static
    {
        $this->skill = $skill;
        return $this;
    }
}
