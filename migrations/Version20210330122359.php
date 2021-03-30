<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330122359 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenement (id_event INT AUTO_INCREMENT NOT NULL, nom_event VARCHAR(255) NOT NULL, start_at DATE NOT NULL, end_at DATE NOT NULL, ville VARCHAR(255) NOT NULL, description VARCHAR(600) NOT NULL, image VARCHAR(255) NOT NULL, rating INT NOT NULL, PRIMARY KEY(id_event)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsor (ref_sponsor INT AUTO_INCREMENT NOT NULL, cin INT NOT NULL, budget DOUBLE PRECISION NOT NULL, message VARCHAR(256) NOT NULL, id_user INT NOT NULL, nom_event VARCHAR(255) NOT NULL, PRIMARY KEY(ref_sponsor)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE locationv CHANGE voiture_id voiture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE Role Role VARCHAR(20) DEFAULT \'\'\'ROLE_USER\'\'\' NOT NULL, CHANGE reset_token reset_token VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE sponsor');
        $this->addSql('ALTER TABLE locationv CHANGE voiture_id voiture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE Role Role VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'\'\'\'\'\'\'ROLE_USER\'\'\'\'\'\'\' NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE reset_token reset_token VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
