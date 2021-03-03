<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210303194356 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, id_reclamation INT NOT NULL, text_reclamation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article CHANGE id_article id_article INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE id_com id_com INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE escapade CHANGE id_escapade id_escapade INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE location_voiture CHANGE num_reservation num_reservation INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE maison_hote CHANGE id_maison id_maison INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation_escapade CHANGE ref_escapade ref_escapade INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation_maison CHANGE ref_reservation ref_reservation INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE voiture CHANGE matricule matricule VARCHAR(90) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('ALTER TABLE article CHANGE id_article id_article INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE id_com id_com INT NOT NULL');
        $this->addSql('ALTER TABLE escapade CHANGE id_escapade id_escapade INT NOT NULL');
        $this->addSql('ALTER TABLE location_voiture CHANGE num_reservation num_reservation INT NOT NULL');
        $this->addSql('ALTER TABLE maison_hote CHANGE id_maison id_maison INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_escapade CHANGE ref_escapade ref_escapade INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_maison CHANGE ref_reservation ref_reservation INT NOT NULL');
        $this->addSql('ALTER TABLE voiture CHANGE matricule matricule VARCHAR(90) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
