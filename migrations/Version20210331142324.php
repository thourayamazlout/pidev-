<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210331142324 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locationv CHANGE voiture_id voiture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY fk_user');
        $this->addSql('DROP INDEX fk_user ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD iduser INT DEFAULT NULL, DROP id_user');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064045E5C27E9 FOREIGN KEY (iduser) REFERENCES user (id_user)');
        $this->addSql('CREATE INDEX fn_entreprise ON reclamation (iduser)');
        $this->addSql('ALTER TABLE reservationmaison CHANGE maisondhote_id maisondhote_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE Role Role VARCHAR(20) DEFAULT \'\'\'ROLE_USER\'\'\' NOT NULL, CHANGE reset_token reset_token VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locationv CHANGE voiture_id voiture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064045E5C27E9');
        $this->addSql('DROP INDEX fn_entreprise ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD id_user INT NOT NULL, DROP iduser');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT fk_user FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('CREATE INDEX fk_user ON reclamation (id_user)');
        $this->addSql('ALTER TABLE reservationmaison CHANGE maisondhote_id maisondhote_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE Role Role VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'\'\'\'\'\'\'ROLE_USER\'\'\'\'\'\'\' NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE reset_token reset_token VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
