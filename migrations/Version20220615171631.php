<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220615171631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE torrent ADD player LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD trailer VARCHAR(255) DEFAULT NULL, ADD poster VARCHAR(255) NOT NULL, ADD video_avc VARCHAR(255) NOT NULL, ADD video_hevc VARCHAR(255) NOT NULL, ADD video_hls VARCHAR(255) DEFAULT NULL, ADD video_dash VARCHAR(255) DEFAULT NULL, ADD features LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD captions VARCHAR(255) DEFAULT NULL, ADD pg LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD support LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE torrent DROP player, DROP trailer, DROP poster, DROP video_avc, DROP video_hevc, DROP video_hls, DROP video_dash, DROP features, DROP captions, DROP pg, DROP support');
    }
}
