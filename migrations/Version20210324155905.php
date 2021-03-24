<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210324155905 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE locationv (id INT AUTO_INCREMENT NOT NULL, voiture_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, numerodetelephone INT NOT NULL, startat DATE NOT NULL, endat DATE NOT NULL, heuredebut TIME NOT NULL, heurefin TIME NOT NULL, permis VARCHAR(255) NOT NULL, INDEX IDX_678CBE35181A8BA (voiture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voiture (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(255) NOT NULL, boite_ma VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, disponible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE locationv ADD CONSTRAINT FK_678CBE35181A8BA FOREIGN KEY (voiture_id) REFERENCES voiture (id)');
        $this->addSql('ALTER TABLE user CHANGE Role Role VARCHAR(20) DEFAULT \'\'\'ROLE_USER\'\'\' NOT NULL, CHANGE reset_token reset_token VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locationv DROP FOREIGN KEY FK_678CBE35181A8BA');
        $this->addSql('DROP TABLE locationv');
        $this->addSql('DROP TABLE voiture');
        $this->addSql('ALTER TABLE user CHANGE Role Role VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'\'\'\'\'\'\'ROLE_USER\'\'\'\'\'\'\' NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE reset_token reset_token VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
