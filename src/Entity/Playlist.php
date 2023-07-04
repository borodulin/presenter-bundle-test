<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'Playlist')]
#[ORM\Entity]
class Playlist
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'PlaylistId', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(name: 'Name', type: 'string', length: 120)]
    private string $name;

    #[ORM\JoinTable(name: 'PlaylistTrack')]
    #[ORM\JoinColumn(name: 'PlaylistId', referencedColumnName: 'PlaylistId')]
    #[ORM\InverseJoinColumn(name: 'TrackId', referencedColumnName: 'TrackId')]
    #[ORM\ManyToMany(targetEntity: Track::class)]
    private Collection $tracks;

    public function __construct()
    {
        $this->tracks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTracks(): Collection
    {
        return $this->tracks;
    }

    public function setTracks(Collection $tracks): self
    {
        $this->tracks = $tracks;

        return $this;
    }
}
