<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210323183302 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP id, CHANGE id_reclamation id_reclamation INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id_reclamation)');
        $this->addSql('ALTER TABLE user ADD reset_token VARCHAR(255) DEFAULT NULL, CHANGE Role Role VARCHAR(20) DEFAULT \'\'\'ROLE_USER\'\'\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation MODIFY id_reclamation INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE reclamation ADD id INT NOT NULL, CHANGE id_reclamation id_reclamation INT NOT NULL');
        $this->addSql('ALTER TABLE user DROP reset_token, CHANGE Role Role VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'\'\'\'\'\'\'ROLE_USER\'\'\'\'\'\'\' NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
