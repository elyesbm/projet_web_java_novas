<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260208000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Rename condidature_job to candidature_job and normalize columns';
    }

    public function up(Schema $schema): void
    {
        if ($this->tableExists('condidature_job') && ! $this->tableExists('candidature_job')) {
            $this->addSql('RENAME TABLE condidature_job TO candidature_job');
        }

        if ($this->tableExists('candidature_job')) {
            if ($this->columnExists('candidature_job', 'id_condidature')) {
                $this->addSql('ALTER TABLE candidature_job CHANGE id_condidature id_candidature INT AUTO_INCREMENT NOT NULL');
            }
            if ($this->columnExists('candidature_job', 'message_condidature')) {
                $this->addSql('ALTER TABLE candidature_job CHANGE message_condidature message TEXT DEFAULT NULL');
            }
            if ($this->columnExists('candidature_job', 'statut_condidature')) {
                $this->addSql("ALTER TABLE candidature_job CHANGE statut_condidature statut ENUM('EN_ATTENTE','ACCEPTEE','REFUSEE') NOT NULL");
            }
            if ($this->columnExists('candidature_job', 'date_condidature')) {
                $this->addSql('ALTER TABLE candidature_job CHANGE date_condidature date_candidature DATETIME NOT NULL');
            }
            if ($this->columnExists('candidature_job', 'condidat_id')) {
                $this->addSql('ALTER TABLE candidature_job CHANGE condidat_id candidat_id INT NOT NULL');
            }

            if ($this->foreignKeyExists('candidature_job', 'FK_2F901D644CC8505A')) {
                $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY FK_2F901D644CC8505A');
            }
            if ($this->foreignKeyExists('candidature_job', 'FK_2F901D641619DB31')) {
                $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY FK_2F901D641619DB31');
            }

            if (! $this->indexExists('candidature_job', 'uniq_offre_candidat')) {
                $this->addSql('CREATE UNIQUE INDEX uniq_offre_candidat ON candidature_job (offre_id, candidat_id)');
            }
            if (! $this->indexExists('candidature_job', 'idx_offre')) {
                $this->addSql('CREATE INDEX idx_offre ON candidature_job (offre_id)');
            }
            if (! $this->indexExists('candidature_job', 'idx_candidat')) {
                $this->addSql('CREATE INDEX idx_candidat ON candidature_job (candidat_id)');
            }
        }
    }

    public function down(Schema $schema): void
    {
        if (! $this->tableExists('candidature_job')) {
            return;
        }

        if ($this->indexExists('candidature_job', 'uniq_offre_candidat')) {
            $this->addSql('DROP INDEX uniq_offre_candidat ON candidature_job');
        }
        if ($this->indexExists('candidature_job', 'idx_offre')) {
            $this->addSql('DROP INDEX idx_offre ON candidature_job');
        }
        if ($this->indexExists('candidature_job', 'idx_candidat')) {
            $this->addSql('DROP INDEX idx_candidat ON candidature_job');
        }

        if ($this->columnExists('candidature_job', 'id_candidature')) {
            $this->addSql('ALTER TABLE candidature_job CHANGE id_candidature id_condidature INT AUTO_INCREMENT NOT NULL');
        }
        if ($this->columnExists('candidature_job', 'message')) {
            $this->addSql('ALTER TABLE candidature_job CHANGE message message_condidature VARCHAR(255) NOT NULL');
        }
        if ($this->columnExists('candidature_job', 'statut')) {
            $this->addSql('ALTER TABLE candidature_job CHANGE statut statut_condidature VARCHAR(50) NOT NULL');
        }
        if ($this->columnExists('candidature_job', 'date_candidature')) {
            $this->addSql('ALTER TABLE candidature_job CHANGE date_candidature date_condidature DATE NOT NULL');
        }
        if ($this->columnExists('candidature_job', 'candidat_id')) {
            $this->addSql('ALTER TABLE candidature_job CHANGE candidat_id condidat_id INT NOT NULL');
        }

        if ($this->tableExists('candidature_job') && ! $this->tableExists('condidature_job')) {
            $this->addSql('RENAME TABLE candidature_job TO condidature_job');
        }
    }

    private function tableExists(string $table): bool
    {
        $count = (int) $this->connection->fetchOne(
            <<<'SQL'
SELECT COUNT(*)
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = DATABASE()
  AND TABLE_NAME = ?
SQL,
            [$table]
        );

        return $count > 0;
    }

    private function columnExists(string $table, string $column): bool
    {
        $count = (int) $this->connection->fetchOne(
            <<<'SQL'
SELECT COUNT(*)
FROM information_schema.COLUMNS
WHERE TABLE_SCHEMA = DATABASE()
  AND TABLE_NAME = ?
  AND COLUMN_NAME = ?
SQL,
            [$table, $column]
        );

        return $count > 0;
    }

    private function foreignKeyExists(string $table, string $constraint): bool
    {
        $count = (int) $this->connection->fetchOne(
            <<<'SQL'
SELECT COUNT(*)
FROM information_schema.TABLE_CONSTRAINTS
WHERE TABLE_SCHEMA = DATABASE()
  AND TABLE_NAME = ?
  AND CONSTRAINT_TYPE = 'FOREIGN KEY'
  AND CONSTRAINT_NAME = ?
SQL,
            [$table, $constraint]
        );

        return $count > 0;
    }

    private function indexExists(string $table, string $index): bool
    {
        $count = (int) $this->connection->fetchOne(
            <<<'SQL'
SELECT COUNT(*)
FROM information_schema.STATISTICS
WHERE TABLE_SCHEMA = DATABASE()
  AND TABLE_NAME = ?
  AND INDEX_NAME = ?
SQL,
            [$table, $index]
        );

        return $count > 0;
    }
}

