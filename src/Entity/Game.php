<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $launch = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $lastPlayedDate = null;

    #[ORM\Column(nullable: true)]
    private ?int $playCount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gotFrom = null;

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

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLaunch(): ?\DateTimeInterface
    {
        return $this->launch;
    }

    public function setLaunch(\DateTimeInterface $launch): self
    {
        $this->launch = $launch;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getLastPlayedDate(): ?\DateTimeInterface
    {
        return $this->lastPlayedDate;
    }

    public function setLastPlayedDate(\DateTimeInterface $lastPlayedDate): self
    {
        $this->lastPlayedDate = $lastPlayedDate;

        return $this;
    }

    public function getPlayCount(): ?int
    {
        return $this->playCount;
    }

    public function setPlayCount(?int $playCount): self
    {
        $this->playCount = $playCount;

        return $this;
    }

    public function getGotFrom(): ?string
    {
        return $this->gotFrom;
    }

    public function setGotFrom(?string $gotFrom): self
    {
        $this->gotFrom = $gotFrom;

        return $this;
    }
}
