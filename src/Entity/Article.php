<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_article')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire.')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Le titre doit contenir au moins {{ limit }} caracteres.',
        maxMessage: 'Le titre ne doit pas depasser {{ limit }} caracteres.'
    )]
    private ?string $titre_article = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le contenu est obligatoire.')]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: 'Le contenu doit contenir au moins {{ limit }} caracteres.',
        maxMessage: 'Le contenu ne doit pas depasser {{ limit }} caracteres.'
    )]
    private ?string $contenue_article = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: "L'image est obligatoire.")]
    #[Assert\Length(max: 2000, maxMessage: "Le chemin de l'image est trop long.")]
    private ?string $image_article = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le type est obligatoire.')]
    #[Assert\Choice(
        choices: ['academic', 'commercial', 'service', 'other'],
        message: 'Type invalide.'
    )]
    private ?string $type_article = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'Le prix est obligatoire.')]
    #[Assert\PositiveOrZero(message: 'Le prix doit etre superieur ou egal a 0.')]
    #[Assert\LessThanOrEqual(value: 1000000, message: 'Le prix ne doit pas depasser {{ compared_value }}.')]
    private ?float $prix_article = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le statut est obligatoire.')]
    #[Assert\Choice(
        choices: ['disponible', 'vendu', 'reserve'],
        message: 'Statut invalide.'
    )]
    private ?string $statut_article = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'articles')]
    #[ORM\JoinColumn(name: 'id_etudiant', referencedColumnName: 'ID', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "L'auteur est obligatoire.")]
    private ?User $auteur = null;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'articles')]
    #[ORM\JoinColumn(name: 'id_categorie', referencedColumnName: 'id_categorie', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'La categorie est obligatoire.')]
    private ?Categorie $categorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreArticle(): ?string
    {
        return $this->titre_article;
    }

    public function setTitreArticle(?string $titre_article): static
    {
        $this->titre_article = $titre_article;

        return $this;
    }

    public function getContenueArticle(): ?string
    {
        return $this->contenue_article;
    }

    public function setContenueArticle(?string $contenue_article): static
    {
        $this->contenue_article = $contenue_article;

        return $this;
    }

    public function getImageArticle(): ?string
    {
        return $this->image_article;
    }

    public function setImageArticle(?string $image_article): static
    {
        $this->image_article = $image_article;

        return $this;
    }

    public function getTypeArticle(): ?string
    {
        return $this->type_article;
    }

    public function setTypeArticle(?string $type_article): static
    {
        $this->type_article = $type_article;

        return $this;
    }

    public function getPrixArticle(): ?float
    {
        return $this->prix_article;
    }

    public function setPrixArticle(?float $prix_article): static
    {
        $this->prix_article = $prix_article;

        return $this;
    }

    public function getStatutArticle(): ?string
    {
        return $this->statut_article;
    }

    public function setStatutArticle(?string $statut_article): static
    {
        $this->statut_article = $statut_article;

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }
}
