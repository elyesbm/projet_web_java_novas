<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260217214500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add two factor authentication fields to user table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user ADD two_factor_secret VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD two_factor_enabled_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD backup_codes JSON DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user DROP COLUMN two_factor_secret');
        $this->addSql('ALTER TABLE user DROP COLUMN two_factor_enabled_at');
        $this->addSql('ALTER TABLE user DROP COLUMN backup_codes');
    }
}
