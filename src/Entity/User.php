<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'ID')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $NOM = null;

    #[ORM\Column(length: 255)]
    private ?string $PRENOM = null;

    #[ORM\Column(length: 255)]
    private ?string $EMAIL = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $IMAGE = null;

    #[ORM\Column(nullable: true)]
    private ?int $NUMERO = null;

    #[ORM\Column(length: 255)]
    private ?string $ROLE = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    // 🔗 RELATIONS
    #[ORM\OneToMany(mappedBy: 'auteur', targetEntity: Article::class)]
    private Collection $articles;

    #[ORM\OneToMany(mappedBy: 'auteur', targetEntity: Commentaire::class)]
    private Collection $commentaires;

    #[ORM\OneToMany(mappedBy: 'auteur', targetEntity: Publication::class)]
    private Collection $publications;

    #[ORM\OneToMany(mappedBy: 'createur', targetEntity: Offrejob::class)]
    private Collection $offrejobs;

    #[ORM\OneToMany(mappedBy: 'condidat', targetEntity: CondidatureJob::class)]
    private Collection $condidatureJobs;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->publications = new ArrayCollection();
        $this->offrejobs = new ArrayCollection();
        $this->condidatureJobs = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    // Getters et setters basiques...
    public function getId(): ?int { return $this->id; }
    public function getNOM(): ?string { return $this->NOM; }
    public function setNOM(string $NOM): static { $this->NOM = $NOM; return $this; }
    public function getPRENOM(): ?string { return $this->PRENOM; }
    public function setPRENOM(string $PRENOM): static { $this->PRENOM = $PRENOM; return $this; }
    public function getEMAIL(): ?string { return $this->EMAIL; }
    public function setEMAIL(string $EMAIL): static { $this->EMAIL = $EMAIL; return $this; }
    public function getIMAGE(): ?string { return $this->IMAGE; }
    public function setIMAGE(?string $IMAGE): static { $this->IMAGE = $IMAGE; return $this; }
    public function getNUMERO(): ?int { return $this->NUMERO; }
    public function setNUMERO(?int $NUMERO): static { $this->NUMERO = $NUMERO; return $this; }
    public function getROLE(): ?string { return $this->ROLE; }
    public function setROLE(string $ROLE): static { $this->ROLE = $ROLE; return $this; }

    public function getPassword(): ?string { return $this->password; }
    public function setPassword(string $password): static { $this->password = $password; return $this; }

    public function getRoles(): array
    {
        $role = $this->ROLE ?? 'ROLE_USER';
        return [$role];
    }

    public function eraseCredentials(): void
    {
        // rien à effacer si on ne stocke jamais le mot de passe en clair
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->EMAIL;
    }

    // Getters pour les collections
    public function getArticles(): Collection { return $this->articles; }
    public function getCommentaires(): Collection { return $this->commentaires; }
    public function getPublications(): Collection { return $this->publications; }
    public function getOffrejobs(): Collection { return $this->offrejobs; }
    public function getCondidatureJobs(): Collection { return $this->condidatureJobs; }
    public function getReservations(): Collection { return $this->reservations; }
}