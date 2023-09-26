<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230926210007 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, producto_id INT NOT NULL, orden_id INT NOT NULL, cantidad INT NOT NULL, INDEX IDX_1F1B251E7645698E (producto_id), INDEX IDX_1F1B251E9750851F (orden_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orden (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, cantidad INT NOT NULL, iniciada DATETIME NOT NULL, confirmada DATETIME NOT NULL, INDEX IDX_E128CFD7DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251E7645698E FOREIGN KEY (producto_id) REFERENCES producto (id)');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251E9750851F FOREIGN KEY (orden_id) REFERENCES orden (id)');
        $this->addSql('ALTER TABLE orden ADD CONSTRAINT FK_E128CFD7DB38439E FOREIGN KEY (usuario_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251E7645698E');
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251E9750851F');
        $this->addSql('ALTER TABLE orden DROP FOREIGN KEY FK_E128CFD7DB38439E');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE orden');
    }
}
