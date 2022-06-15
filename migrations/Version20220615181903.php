<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220615181903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE torrent CHANGE player player INT NOT NULL, CHANGE poster poster VARCHAR(255) DEFAULT NULL, CHANGE video_avc video_avc VARCHAR(255) DEFAULT NULL, CHANGE video_hevc video_hevc VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE torrent CHANGE player player LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE poster poster VARCHAR(255) NOT NULL, CHANGE video_avc video_avc VARCHAR(255) NOT NULL, CHANGE video_hevc video_hevc VARCHAR(255) NOT NULL');
    }
}
