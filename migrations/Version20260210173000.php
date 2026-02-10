<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260210173000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Normalize foreign key names for offrejob and candidature_job to match Doctrine naming.';
    }

    public function up(Schema $schema): void
    {
        if ($this->tableExists('condidature_job') && ! $this->tableExists('candidature_job')) {
            $this->addSql('RENAME TABLE condidature_job TO candidature_job');
        }

        if ($this->tableExists('candidature_job')) {
            if (! $this->columnExists('candidature_job', 'id_candidature') && $this->columnExists('candidature_job', 'id_condidature')) {
                $this->addSql('ALTER TABLE candidature_job CHANGE id_condidature id_candidature INT AUTO_INCREMENT NOT NULL');
            }
            if (! $this->columnExists('candidature_job', 'message') && $this->columnExists('candidature_job', 'message_condidature')) {
                $this->addSql('ALTER TABLE candidature_job CHANGE message_condidature message TEXT DEFAULT NULL');
            }
            if (! $this->columnExists('candidature_job', 'statut') && $this->columnExists('candidature_job', 'statut_condidature')) {
                $this->addSql("ALTER TABLE candidature_job CHANGE statut_condidature statut ENUM('EN_ATTENTE','ACCEPTEE','REFUSEE') NOT NULL");
            }
            if (! $this->columnExists('candidature_job', 'date_candidature') && $this->columnExists('candidature_job', 'date_condidature')) {
                $this->addSql('ALTER TABLE candidature_job CHANGE date_condidature date_candidature DATETIME NOT NULL');
            }
            if (! $this->columnExists('candidature_job', 'candidat_id') && $this->columnExists('candidature_job', 'condidat_id')) {
                $this->addSql('ALTER TABLE candidature_job CHANGE condidat_id candidat_id INT NOT NULL');
            }
        }

        if ($this->foreignKeyExists('candidature_job', 'fk_candidature_offre')) {
            $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY fk_candidature_offre');
        }

        if ($this->foreignKeyExists('candidature_job', 'fk_candidature_user')) {
            $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY fk_candidature_user');
        }

        if (! $this->foreignKeyExists('candidature_job', 'FK_E40B48E44CC8505A')) {
            $this->addSql('ALTER TABLE candidature_job ADD CONSTRAINT FK_E40B48E44CC8505A FOREIGN KEY (offre_id) REFERENCES offrejob (id_offre)');
        }

        if (! $this->foreignKeyExists('candidature_job', 'FK_E40B48E48D0EB82')) {
            $this->addSql('ALTER TABLE candidature_job ADD CONSTRAINT FK_E40B48E48D0EB82 FOREIGN KEY (candidat_id) REFERENCES user (ID)');
        }

        if ($this->foreignKeyExists('offrejob', 'fk_offrejob_createur')) {
            $this->addSql('ALTER TABLE offrejob DROP FOREIGN KEY fk_offrejob_createur');
        }

        if (! $this->foreignKeyExists('offrejob', 'FK_D151759273A201E5')) {
            $this->addSql('ALTER TABLE offrejob ADD CONSTRAINT FK_D151759273A201E5 FOREIGN KEY (createur_id) REFERENCES user (ID)');
        }
    }

    public function down(Schema $schema): void
    {
        if ($this->foreignKeyExists('candidature_job', 'FK_E40B48E44CC8505A')) {
            $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY FK_E40B48E44CC8505A');
        }

        if ($this->foreignKeyExists('candidature_job', 'FK_E40B48E48D0EB82')) {
            $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY FK_E40B48E48D0EB82');
        }

        if (! $this->foreignKeyExists('candidature_job', 'fk_candidature_offre')) {
            $this->addSql('ALTER TABLE candidature_job ADD CONSTRAINT fk_candidature_offre FOREIGN KEY (offre_id) REFERENCES offrejob (id_offre)');
        }

        if (! $this->foreignKeyExists('candidature_job', 'fk_candidature_user')) {
            $this->addSql('ALTER TABLE candidature_job ADD CONSTRAINT fk_candidature_user FOREIGN KEY (candidat_id) REFERENCES user (ID)');
        }

        if ($this->foreignKeyExists('offrejob', 'FK_D151759273A201E5')) {
            $this->addSql('ALTER TABLE offrejob DROP FOREIGN KEY FK_D151759273A201E5');
        }

        if (! $this->foreignKeyExists('offrejob', 'fk_offrejob_createur')) {
            $this->addSql('ALTER TABLE offrejob ADD CONSTRAINT fk_offrejob_createur FOREIGN KEY (createur_id) REFERENCES user (ID)');
        }
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
}

