<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201120071839 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE author1 (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_quote1 (category_id INT NOT NULL, quote1_id INT NOT NULL, INDEX IDX_368F620212469DE2 (category_id), INDEX IDX_368F6202886954CC (quote1_id), PRIMARY KEY(category_id, quote1_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quote1 (id INT AUTO_INCREMENT NOT NULL, author_id INT DEFAULT NULL, content LONGTEXT DEFAULT NULL, INDEX IDX_3967A879F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag_quote1 (tag_id INT NOT NULL, quote1_id INT NOT NULL, INDEX IDX_D026E155BAD26311 (tag_id), INDEX IDX_D026E155886954CC (quote1_id), PRIMARY KEY(tag_id, quote1_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category_quote1 ADD CONSTRAINT FK_368F620212469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_quote1 ADD CONSTRAINT FK_368F6202886954CC FOREIGN KEY (quote1_id) REFERENCES quote1 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quote1 ADD CONSTRAINT FK_3967A879F675F31B FOREIGN KEY (author_id) REFERENCES author1 (id)');
        $this->addSql('ALTER TABLE tag_quote1 ADD CONSTRAINT FK_D026E155BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_quote1 ADD CONSTRAINT FK_D026E155886954CC FOREIGN KEY (quote1_id) REFERENCES quote1 (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quote1 DROP FOREIGN KEY FK_3967A879F675F31B');
        $this->addSql('ALTER TABLE category_quote1 DROP FOREIGN KEY FK_368F620212469DE2');
        $this->addSql('ALTER TABLE category_quote1 DROP FOREIGN KEY FK_368F6202886954CC');
        $this->addSql('ALTER TABLE tag_quote1 DROP FOREIGN KEY FK_D026E155886954CC');
        $this->addSql('ALTER TABLE tag_quote1 DROP FOREIGN KEY FK_D026E155BAD26311');
        $this->addSql('DROP TABLE author1');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE category_quote1');
        $this->addSql('DROP TABLE quote1');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE tag_quote1');
    }
}
