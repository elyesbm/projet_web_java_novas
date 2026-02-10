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
}

