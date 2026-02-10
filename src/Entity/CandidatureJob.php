<?php

namespace App\Entity;

use App\Enum\CandidatureStatus;
use App\Repository\CandidatureJobRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatureJobRepository::class)]
#[ORM\Table(name: 'candidature_job')]
#[ORM\UniqueConstraint(name: 'uniq_offre_candidat', columns: ['offre_id', 'candidat_id'])]
#[ORM\Index(name: 'idx_offre', columns: ['offre_id'])]
#[ORM\Index(name: 'idx_candidat', columns: ['candidat_id'])]
class CandidatureJob
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_candidature')]
    private ?int $id = null;

    #[ORM\Column(name: 'message', type: Types::TEXT, length: 65535, nullable: true)]
    private ?string $message_candidature = null;

    #[ORM\Column(
        name: 'statut',
        type: Types::ENUM,
        enumType: CandidatureStatus::class,
        options: ['values' => ['EN_ATTENTE', 'ACCEPTEE', 'REFUSEE'], 'default' => 'EN_ATTENTE']
    )]
    private ?CandidatureStatus $statut_candidature = null;

    #[ORM\Column(name: 'date_candidature', type: Types::DATETIME_MUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $date_candidature = null;

    #[ORM\ManyToOne(targetEntity: Offrejob::class, inversedBy: 'candidatures')]
    #[ORM\JoinColumn(name: 'offre_id', referencedColumnName: 'id_offre', nullable: false)]
    private ?Offrejob $offre = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'candidatureJobs')]
    #[ORM\JoinColumn(name: 'candidat_id', referencedColumnName: 'ID', nullable: false)]
    private ?User $candidat = null;

    public function getId(): ?int { return $this->id; }
    public function getMessageCandidature(): ?string { return $this->message_candidature; }
    public function setMessageCandidature(string $message_candidature): static { $this->message_candidature = $message_candidature; return $this; }
    public function getStatutCandidature(): ?string { return $this->statut_candidature?->value; }
    public function getStatutCandidatureEnum(): ?CandidatureStatus { return $this->statut_candidature; }
    public function setStatutCandidature(CandidatureStatus|string $statut_candidature): static
    {
        $this->statut_candidature = $statut_candidature instanceof CandidatureStatus
            ? $statut_candidature
            : CandidatureStatus::from($statut_candidature);
        return $this;
    }
    public function getDateCandidature(): ?\DateTimeInterface { return $this->date_candidature; }
    public function setDateCandidature(\DateTimeInterface $date_candidature): static { $this->date_candidature = $date_candidature; return $this; }
    public function getOffre(): ?Offrejob { return $this->offre; }
    public function setOffre(?Offrejob $offre): static { $this->offre = $offre; return $this; }
    public function getCandidat(): ?User { return $this->candidat; }
    public function setCandidat(?User $candidat): static { $this->candidat = $candidat; return $this; }
}
