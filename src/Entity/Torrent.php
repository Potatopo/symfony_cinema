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

    public function __construct($name, $filename, $description, $keywords)
    {
        $this->name = $name;
        $this->filename = $filename;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->save_as = $filename;
        $this->size = 123123;
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
}
