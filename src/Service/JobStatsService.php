<?php

namespace App\Service;

use App\Entity\CandidatureJob;
use App\Entity\Offrejob;
use App\Enum\CandidatureStatus;
use App\Enum\OffreCategorie;
use Doctrine\ORM\EntityManagerInterface;

class JobStatsService
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    /**
     * @return array{labels: string[], data: int[]}
     */
    public function getOffersPerCategory(): array
    {
        $rows = $this->entityManager->createQueryBuilder()
            ->select('o.categorie_offre AS category', 'COUNT(o.id) AS total')
            ->from(Offrejob::class, 'o')
            ->groupBy('o.categorie_offre')
            ->getQuery()
            ->getArrayResult();

        $totalsByCategory = [];
        foreach (OffreCategorie::cases() as $category) {
            $totalsByCategory[$category->value] = 0;
        }

        foreach ($rows as $row) {
            $key = $this->normalizeEnumValue($row['category'] ?? null);
            if ($key !== null) {
                $totalsByCategory[$key] = (int) ($row['total'] ?? 0);
            }
        }

        $labels = [];
        $data = [];
        foreach ($totalsByCategory as $category => $total) {
            $labels[] = $this->categoryLabel($category);
            $data[] = $total;
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    /**
     * @return array{labels: string[], data: int[]}
     */
    public function getApplicationsPerDayLastDays(int $days = 30): array
    {
        $start = (new \DateTimeImmutable('today'))
            ->modify(sprintf('-%d days', max(0, $days - 1)))
            ->setTime(0, 0, 0);

        $rows = $this->entityManager->createQueryBuilder()
            ->select('c.date_candidature AS appliedAt')
            ->from(CandidatureJob::class, 'c')
            ->where('c.date_candidature >= :start')
            ->setParameter('start', $start)
            ->orderBy('c.date_candidature', 'ASC')
            ->getQuery()
            ->getArrayResult();

        $dailyTotals = [];
        for ($i = 0; $i < $days; $i++) {
            $date = $start->modify(sprintf('+%d days', $i));
            $dailyTotals[$date->format('Y-m-d')] = 0;
        }

        foreach ($rows as $row) {
            $dateValue = $row['appliedAt'] ?? null;
            if ($dateValue instanceof \DateTimeInterface) {
                $key = $dateValue->format('Y-m-d');
            } elseif (is_string($dateValue) && $dateValue !== '') {
                $key = (new \DateTimeImmutable($dateValue))->format('Y-m-d');
            } else {
                continue;
            }

            if (array_key_exists($key, $dailyTotals)) {
                $dailyTotals[$key]++;
            }
        }

        $labels = [];
        $data = [];
        foreach ($dailyTotals as $dateString => $total) {
            $labels[] = (new \DateTimeImmutable($dateString))->format('d/m');
            $data[] = $total;
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    /**
     * @return array{labels: string[], data: int[]}
     */
    public function getApplicationsByStatus(): array
    {
        $rows = $this->entityManager->createQueryBuilder()
            ->select('c.statut_candidature AS status', 'COUNT(c.id) AS total')
            ->from(CandidatureJob::class, 'c')
            ->groupBy('c.statut_candidature')
            ->getQuery()
            ->getArrayResult();

        $totalsByStatus = [];
        foreach (CandidatureStatus::cases() as $status) {
            $totalsByStatus[$status->value] = 0;
        }

        foreach ($rows as $row) {
            $key = $this->normalizeEnumValue($row['status'] ?? null);
            if ($key !== null) {
                $totalsByStatus[$key] = (int) ($row['total'] ?? 0);
            }
        }

        $labels = [];
        $data = [];
        foreach ($totalsByStatus as $status => $total) {
            $labels[] = $this->statusLabel($status);
            $data[] = $total;
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    /**
     * @return array{totalOffers: int, totalApplications: int, applicationsLast30Days: int}
     */
    public function getSummary(int $days = 30): array
    {
        $start = (new \DateTimeImmutable('today'))
            ->modify(sprintf('-%d days', max(0, $days - 1)))
            ->setTime(0, 0, 0);

        $totalOffers = (int) $this->entityManager->createQueryBuilder()
            ->select('COUNT(o.id)')
            ->from(Offrejob::class, 'o')
            ->getQuery()
            ->getSingleScalarResult();

        $totalApplications = (int) $this->entityManager->createQueryBuilder()
            ->select('COUNT(c.id)')
            ->from(CandidatureJob::class, 'c')
            ->getQuery()
            ->getSingleScalarResult();

        $applicationsLastPeriod = (int) $this->entityManager->createQueryBuilder()
            ->select('COUNT(c.id)')
            ->from(CandidatureJob::class, 'c')
            ->where('c.date_candidature >= :start')
            ->setParameter('start', $start)
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'totalOffers' => $totalOffers,
            'totalApplications' => $totalApplications,
            'applicationsLast30Days' => $applicationsLastPeriod,
        ];
    }

    private function normalizeEnumValue(mixed $value): ?string
    {
        if ($value instanceof \BackedEnum) {
            return (string) $value->value;
        }

        if (is_string($value) && $value !== '') {
            return $value;
        }

        return null;
    }

    private function categoryLabel(string $category): string
    {
        return match ($category) {
            OffreCategorie::TUTORAT->value => 'Tutorat',
            OffreCategorie::AIDE->value => 'Aide academique',
            OffreCategorie::CREATION->value => 'Creation',
            default => $category,
        };
    }

    private function statusLabel(string $status): string
    {
        return match ($status) {
            CandidatureStatus::EN_ATTENTE->value => 'En attente',
            CandidatureStatus::ACCEPTEE->value => 'Acceptee',
            CandidatureStatus::REFUSEE->value => 'Refusee',
            default => $status,
        };
    }
}
