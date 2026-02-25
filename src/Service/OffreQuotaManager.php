<?php

namespace App\Service;

use App\Entity\CandidatureJob;
use App\Enum\CandidatureStatus;
use App\Enum\OffreStatut;
use Doctrine\DBAL\LockMode;
use Doctrine\ORM\EntityManagerInterface;

class OffreQuotaManager
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    /**
     * @return array{ok: bool, message: string}
     */
    public function applyCandidatureStatus(CandidatureJob $candidature, string $newStatus): array
    {
        $connection = $this->entityManager->getConnection();
        $connection->beginTransaction();

        try {
            $candidature = $this->entityManager->find(
                CandidatureJob::class,
                $candidature->getId(),
                LockMode::PESSIMISTIC_WRITE
            );

            if (! $candidature) {
                $connection->rollBack();
                return ['ok' => false, 'message' => 'Candidature introuvable.'];
            }

            $offre = $candidature->getOffre();
            if (! $offre) {
                $connection->rollBack();
                return ['ok' => false, 'message' => 'Offre introuvable.'];
            }

            $this->entityManager->lock($offre, LockMode::PESSIMISTIC_WRITE);

            $previousStatus = $candidature->getStatutCandidature();
            if ($newStatus === CandidatureStatus::ACCEPTEE->value) {
                if ($offre->isExpired()) {
                    $offre->setStatutOffre(OffreStatut::EXPIREE);
                    $this->entityManager->flush();
                    $connection->commit();

                    return ['ok' => false, 'message' => 'Impossible d\'accepter: offre expiree.'];
                }

                if ($offre->getStatutOffre() !== OffreStatut::OUVERTE->value) {
                    $connection->rollBack();
                    return ['ok' => false, 'message' => 'Impossible d\'accepter: offre non ouverte.'];
                }

                if ($offre->getCapaciteRestante() <= 0) {
                    $offre->setCapaciteRestante(0);
                    $offre->setStatutOffre(OffreStatut::FERMEE);
                    $this->entityManager->flush();
                    $connection->commit();

                    return ['ok' => false, 'message' => 'Impossible d\'accepter: offre complete.'];
                }

                if ($previousStatus !== CandidatureStatus::ACCEPTEE->value) {
                    $offre->setCapaciteRestante($offre->getCapaciteRestante() - 1);
                }

                $candidature->setStatutCandidature(CandidatureStatus::ACCEPTEE);

                if ($offre->getCapaciteRestante() <= 0) {
                    $offre->setCapaciteRestante(0);
                    $offre->setStatutOffre(OffreStatut::FERMEE);
                }
            } elseif ($newStatus === CandidatureStatus::REFUSEE->value) {
                if (
                    $previousStatus === CandidatureStatus::ACCEPTEE->value
                    && $offre->getCapaciteRestante() < $offre->getCapaciteMax()
                ) {
                    $offre->setCapaciteRestante($offre->getCapaciteRestante() + 1);

                    if ($offre->getStatutOffre() === OffreStatut::FERMEE->value) {
                        $offre->setStatutOffre(OffreStatut::OUVERTE);
                    }
                }

                $candidature->setStatutCandidature(CandidatureStatus::REFUSEE);
            } else {
                $connection->rollBack();
                return ['ok' => false, 'message' => 'Statut de candidature invalide.'];
            }

            $this->entityManager->flush();
            $connection->commit();

            return ['ok' => true, 'message' => 'Statut mis a jour.'];
        } catch (\Throwable $e) {
            if ($connection->isTransactionActive()) {
                $connection->rollBack();
            }

            throw $e;
        }
    }
}
