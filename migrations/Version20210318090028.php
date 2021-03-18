<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210318090028 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE escapade (id_esc INT AUTO_INCREMENT NOT NULL, price INT NOT NULL, histoire VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id_esc)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservationesc (ref INT AUTO_INCREMENT NOT NULL, escapade_id INT NOT NULL, nbrepers INT NOT NULL, dateres DATETIME NOT NULL, commentaire VARCHAR(255) NOT NULL, tel INT NOT NULL, INDEX IDX_BF8798D9F85F6E03 (escapade_id), PRIMARY KEY(ref)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, Username VARCHAR(20) NOT NULL, nom VARCHAR(20) NOT NULL, prenom VARCHAR(20) NOT NULL, Email VARCHAR(255) NOT NULL, Password VARCHAR(255) NOT NULL, Role VARCHAR(20) DEFAULT \'\'\'ROLE_USER\'\'\' NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservationesc ADD CONSTRAINT FK_BF8798D9F85F6E03 FOREIGN KEY (escapade_id) REFERENCES escapade (id_esc)');
        $this->addSql('ALTER TABLE reclamation MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE reclamation ADD id_user INT NOT NULL, DROP id, CHANGE id_reclamation id_reclamation INT AUTO_INCREMENT NOT NULL, CHANGE text_reclamation textReclamation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD PRIMARY KEY (id_reclamation)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationesc DROP FOREIGN KEY FK_BF8798D9F85F6E03');
        $this->addSql('DROP TABLE escapade');
        $this->addSql('DROP TABLE reservationesc');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE reclamation ADD id INT AUTO_INCREMENT NOT NULL, DROP id_user, CHANGE id_reclamation id_reclamation INT NOT NULL, CHANGE textreclamation text_reclamation VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}
