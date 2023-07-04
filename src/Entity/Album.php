<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\AlbumRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Album')]
#[ORM\Entity(repositoryClass: AlbumRepository::class)]
class Album
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'AlbumId', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(name: 'Title', type: 'string', length: 160)]
    private string $title;

    #[ORM\ManyToOne(targetEntity: Artist::class)]
    #[ORM\JoinColumn(name: 'ArtistId', referencedColumnName: 'ArtistId', nullable: false)]
    private Artist $artist;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getArtist(): Artist
    {
        return $this->artist;
    }

    public function setArtist(Artist $artist): self
    {
        $this->artist = $artist;

        return $this;
    }
}
