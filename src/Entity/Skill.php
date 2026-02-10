<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_skill')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_skill = null;

    #[ORM\Column(length: 255)]
    private ?string $description_skill = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $contexte_skill = null;

    #[ORM\OneToMany(mappedBy: 'skill', targetEntity: LearningPath::class)]
    private Collection $learningPaths;

    public function __construct()
    {
        $this->learningPaths = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getNomSkill(): ?string { return $this->nom_skill; }
    public function setNomSkill(string $nom_skill): static { $this->nom_skill = $nom_skill; return $this; }
    public function getDescriptionSkill(): ?string { return $this->description_skill; }
    public function setDescriptionSkill(string $description_skill): static { $this->description_skill = $description_skill; return $this; }
    public function getCategorie(): ?string { return $this->categorie; }
    public function setCategorie(string $categorie): static { $this->categorie = $categorie; return $this; }
    public function getContexteSkill(): ?string { return $this->contexte_skill; }
    public function setContexteSkill(string $contexte_skill): static { $this->contexte_skill = $contexte_skill; return $this; }
    public function getLearningPaths(): Collection { return $this->learningPaths; }
}