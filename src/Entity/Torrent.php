<?php

namespace App\Entity;

use App\Repository\TorrentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TorrentRepository::class)]
class Torrent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $filename;

    #[ORM\Column(type: 'string', length: 255)]
    private $save_as;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'text')]
    private $keywords;

    #[ORM\Column(type: 'bigint')]
    private $size;

    #[ORM\Column(type: 'integer')]
    private $player = [];

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $trailer;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $poster;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $video_avc;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $video_hevc;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $video_hls;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $video_dash;

    #[ORM\Column(type: 'array', nullable: true)]
    private $features = [];

    #[ORM\Column(type: 'text', nullable: true)]
    private $captions;

    #[ORM\Column(type: 'array')]
    private $pg = [];

    #[ORM\Column(type: 'array')]
    private $support = [];

    #[ORM\Column(type: 'text', nullable: true)]
    private $extra_info;

    public function __construct($name, $filename, $description, $keywords, $player, $trailer, $poster, $video_avc, $video_hevc,
    $video_dash, $video_hls, $features, $captions, $pg, $support, $extra_info)
    {
        $this->name = $name;
        $this->filename = $filename;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->save_as = $filename;
        $this->size = 123123;
        $this->player = $player;
        $this->trailer = $trailer;
        $this->poster = $poster;
        $this->video_avc = $video_avc;
        $this->video_hevc = $video_hevc;
        $this->video_dash = $video_dash;
        $this->video_hls = $video_hls;
        $this->features = $features;
        $this->captions = $captions;
        $this->pg = $pg;
        $this->support = $support;
        $this->extra_info = $extra_info;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getSaveAs(): ?string
    {
        return $this->save_as;
    }

    public function setSaveAs(string $save_as): self
    {
        $this->save_as = $save_as;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getPlayer(): ?int
    {
        return $this->player;
    }

    public function setPlayer(int $player): self
    {
        $this->player = $player;

        return $this;
    }

    public function getTrailer(): ?string
    {
        return $this->trailer;
    }

    public function setTrailer(?string $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    public function getVideoAvc(): ?string
    {
        return $this->video_avc;
    }

    public function setVideoAvc(string $video_avc): self
    {
        $this->video_avc = $video_avc;

        return $this;
    }

    public function getVideoHevc(): ?string
    {
        return $this->video_hevc;
    }

    public function setVideoHevc(string $video_hevc): self
    {
        $this->video_hevc = $video_hevc;

        return $this;
    }

    public function getVideoHls(): ?string
    {
        return $this->video_hls;
    }

    public function setVideoHls(?string $video_hls): self
    {
        $this->video_hls = $video_hls;

        return $this;
    }

    public function getVideoDash(): ?string
    {
        return $this->video_dash;
    }

    public function setVideoDash(?string $video_dash): self
    {
        $this->video_dash = $video_dash;

        return $this;
    }

    public function getFeatures(): ?array
    {
        return $this->features;
    }

    public function setFeatures(?array $features): self
    {
        $this->features = $features;

        return $this;
    }

    public function getCaptions(): ?string
    {
        return $this->captions;
    }

    public function setCaptions(?string $captions): self
    {
        $this->captions = $captions;

        return $this;
    }

    public function getPg(): ?array
    {
        return $this->pg;
    }

    public function setPg(array $pg): self
    {
        $this->pg = $pg;

        return $this;
    }

    public function getSupport(): ?array
    {
        return $this->support;
    }

    public function setSupport(array $support): self
    {
        $this->support = $support;

        return $this;
    }

    public function getExtraInfo(): ?string
    {
        return $this->extra_info;
    }

    public function setExtraInfo(?string $extra_info): self
    {
        $this->extra_info = $extra_info;

        return $this;
    }
}
