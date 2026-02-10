<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260210213000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add ON DELETE CASCADE to foreign keys';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY `FK_23A0E6621A5CE76`');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY `FK_23A0E66C9486A13`');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6621A5CE76 FOREIGN KEY (id_etudiant) REFERENCES user (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY `FK_E40B48E44CC8505A`');
        $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY `FK_E40B48E48D0EB82`');
        $this->addSql('ALTER TABLE candidature_job ADD CONSTRAINT FK_E40B48E44CC8505A FOREIGN KEY (offre_id) REFERENCES offrejob (id_offre) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidature_job ADD CONSTRAINT FK_E40B48E48D0EB82 FOREIGN KEY (candidat_id) REFERENCES user (ID) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY `FK_67F068BC236D04AD`');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY `FK_67F068BCC4E0D4DF`');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC236D04AD FOREIGN KEY (id_auteur) REFERENCES user (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC4E0D4DF FOREIGN KEY (id_pub) REFERENCES publication (id_pub) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE learning_path DROP FOREIGN KEY `FK_4D04C797B0B8A547`');
        $this->addSql('ALTER TABLE learning_path ADD CONSTRAINT FK_4D04C797B0B8A547 FOREIGN KEY (id_skill) REFERENCES skill (id_skill) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE offrejob DROP FOREIGN KEY `FK_D151759273A201E5`');
        $this->addSql('ALTER TABLE offrejob ADD CONSTRAINT FK_D151759273A201E5 FOREIGN KEY (createur_id) REFERENCES user (ID) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY `FK_AF3C6779236D04AD`');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779236D04AD FOREIGN KEY (id_auteur) REFERENCES user (ID) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY `FK_42C849553F26B153`');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY `FK_42C849556B3CA4B`');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849553F26B153 FOREIGN KEY (id_atelier) REFERENCES atelier (id_atelier) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849556B3CA4B FOREIGN KEY (id_user) REFERENCES user (ID) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY `FK_23A0E6621A5CE76`');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY `FK_23A0E66C9486A13`');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6621A5CE76 FOREIGN KEY (id_etudiant) REFERENCES user (ID)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie)');

        $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY `FK_E40B48E44CC8505A`');
        $this->addSql('ALTER TABLE candidature_job DROP FOREIGN KEY `FK_E40B48E48D0EB82`');
        $this->addSql('ALTER TABLE candidature_job ADD CONSTRAINT FK_E40B48E44CC8505A FOREIGN KEY (offre_id) REFERENCES offrejob (id_offre)');
        $this->addSql('ALTER TABLE candidature_job ADD CONSTRAINT FK_E40B48E48D0EB82 FOREIGN KEY (candidat_id) REFERENCES user (ID)');

        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY `FK_67F068BC236D04AD`');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY `FK_67F068BCC4E0D4DF`');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC236D04AD FOREIGN KEY (id_auteur) REFERENCES user (ID)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC4E0D4DF FOREIGN KEY (id_pub) REFERENCES publication (id_pub)');

        $this->addSql('ALTER TABLE learning_path DROP FOREIGN KEY `FK_4D04C797B0B8A547`');
        $this->addSql('ALTER TABLE learning_path ADD CONSTRAINT FK_4D04C797B0B8A547 FOREIGN KEY (id_skill) REFERENCES skill (id_skill)');

        $this->addSql('ALTER TABLE offrejob DROP FOREIGN KEY `FK_D151759273A201E5`');
        $this->addSql('ALTER TABLE offrejob ADD CONSTRAINT FK_D151759273A201E5 FOREIGN KEY (createur_id) REFERENCES user (ID)');

        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY `FK_AF3C6779236D04AD`');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779236D04AD FOREIGN KEY (id_auteur) REFERENCES user (ID)');

        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY `FK_42C849553F26B153`');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY `FK_42C849556B3CA4B`');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849553F26B153 FOREIGN KEY (id_atelier) REFERENCES atelier (id_atelier)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849556B3CA4B FOREIGN KEY (id_user) REFERENCES user (ID)');
    }
}

