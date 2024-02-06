<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240206141720 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66BCF5E72D');
        $this->addSql('DROP INDEX UNIQ_23A0E66BCF5E72D ON article');
        $this->addSql('ALTER TABLE article DROP categorie_id');
        $this->addSql('ALTER TABLE category ADD article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C17294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_64C19C17294869C ON category (article_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66BCF5E72D FOREIGN KEY (categorie_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_23A0E66BCF5E72D ON article (categorie_id)');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C17294869C');
        $this->addSql('DROP INDEX UNIQ_64C19C17294869C ON category');
        $this->addSql('ALTER TABLE category DROP article_id');
    }
}
