<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260221100000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add face_encoding column to user table for facial recognition login';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user ADD face_encoding JSON DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user DROP COLUMN face_encoding');
    }
}
