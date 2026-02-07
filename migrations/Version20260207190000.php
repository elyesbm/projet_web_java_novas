<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260207190000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Change date_creation from DATE to DATETIME for publication and commentaire (heure réelle)';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE publication CHANGE date_creation date_creation DATETIME NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE date_creation date_creation DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE publication CHANGE date_creation date_creation DATE NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE date_creation date_creation DATE NOT NULL');
    }
}
