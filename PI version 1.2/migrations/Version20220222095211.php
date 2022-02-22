<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222095211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_880E0D76AA08CB10 ON admin (login)');
        $this->addSql('ALTER TABLE agent_service CHANGE login login VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_33CEF878AA08CB10 ON agent_service (login)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7440455AA08CB10 ON client (login)');
        $this->addSql('ALTER TABLE facture CHANGE dateentrer dateentrer DATETIME NOT NULL');
        $this->addSql('ALTER TABLE fourriere CHANGE flatitude flatitude DOUBLE PRECISION NOT NULL, CHANGE flongitude flongitude DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE parking CHANGE platitude platitude DOUBLE PRECISION NOT NULL, CHANGE plongitude plongitude DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_880E0D76AA08CB10 ON admin');
        $this->addSql('ALTER TABLE admin DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE admin DROP roles, CHANGE id id INT NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE numtel numtel VARCHAR(8) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE login login VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX UNIQ_33CEF878AA08CB10 ON agent_service');
        $this->addSql('ALTER TABLE agent_service CHANGE nom nom VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE numtel numtel VARCHAR(8) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE login login VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX UNIQ_C7440455AA08CB10 ON client');
        $this->addSql('ALTER TABLE client CHANGE nom nom VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE numtel numtel VARCHAR(8) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE voitmat voitmat VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE login login VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE status status VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE facture CHANGE dateentrer dateentrer DATE NOT NULL');
        $this->addSql('ALTER TABLE fourriere CHANGE nomf nomf VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE flatitude flatitude VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE flongitude flongitude VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE parking CHANGE nomp nomp VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE platitude platitude VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE plongitude plongitude VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE objet objet VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE etat etat VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reponse CHANGE rps rps VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
