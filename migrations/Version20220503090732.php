<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503090732 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE LOCATION CHANGE IDTRAJET IDTRAJET CHAR(32) DEFAULT NULL');
        $this->addSql('ALTER TABLE LOCATIONAVECCHAUFFEUR CHANGE IDFORMULE IDFORMULE INT DEFAULT NULL');
        $this->addSql('ALTER TABLE LOCATIONSANSCHAUFFEUR CHANGE IDFORMULE IDFORMULE INT DEFAULT NULL');
        $this->addSql('ALTER TABLE RESTITUTION CHANGE NUMLOCATION NUMLOCATION INT DEFAULT NULL');
        $this->addSql('ALTER TABLE TARIFICATION CHANGE IDFORMULE IDFORMULE INT DEFAULT NULL, CHANGE IDMODELE IDMODELE INT DEFAULT NULL');
        $this->addSql('ALTER TABLE UTILISATEUR ADD roles JSON NOT NULL');
        $this->addSql('ALTER TABLE STOCKER RENAME INDEX i_fk_stocker_utilisateur TO IDX_AD495DFD9111F9');
        $this->addSql('ALTER TABLE STOCKER RENAME INDEX i_fk_stocker_historiquemdp TO IDX_AD495DF3C4BBE8');
        $this->addSql('ALTER TABLE VEHICULE CHANGE IDMODELE IDMODELE INT DEFAULT NULL, CHANGE IDPARTIEVEHICULE IDPARTIEVEHICULE INT DEFAULT NULL, CHANGE NUMLOCATION NUMLOCATION INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE LOCATION CHANGE IDTRAJET IDTRAJET CHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE LOCATIONAVECCHAUFFEUR CHANGE IDFORMULE IDFORMULE INT NOT NULL');
        $this->addSql('ALTER TABLE LOCATIONSANSCHAUFFEUR CHANGE IDFORMULE IDFORMULE INT NOT NULL');
        $this->addSql('ALTER TABLE RESTITUTION CHANGE NUMLOCATION NUMLOCATION INT NOT NULL');
        $this->addSql('ALTER TABLE stocker RENAME INDEX idx_ad495dfd9111f9 TO I_FK_STOCKER_UTILISATEUR');
        $this->addSql('ALTER TABLE stocker RENAME INDEX idx_ad495df3c4bbe8 TO I_FK_STOCKER_HISTORIQUEMDP');
        $this->addSql('ALTER TABLE TARIFICATION CHANGE IDFORMULE IDFORMULE INT NOT NULL, CHANGE IDMODELE IDMODELE INT NOT NULL');
        $this->addSql('ALTER TABLE UTILISATEUR DROP roles');
        $this->addSql('ALTER TABLE VEHICULE CHANGE NUMLOCATION NUMLOCATION INT NOT NULL, CHANGE IDPARTIEVEHICULE IDPARTIEVEHICULE INT NOT NULL, CHANGE IDMODELE IDMODELE INT NOT NULL');
    }
}
