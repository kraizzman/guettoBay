<?php

namespace App\Entity;

use App\Repository\GrenadeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GrenadeRepository::class)]
class Grenade
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $explosionRadius = null;

    #[ORM\Column]
    private ?int $detonationTime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExplosionRadius(): ?float
    {
        return $this->explosionRadius;
    }

    public function setExplosionRadius(float $explosionRadius): static
    {
        $this->explosionRadius = $explosionRadius;

        return $this;
    }

    public function getDetonationTime(): ?int
    {
        return $this->detonationTime;
    }

    public function setDetonationTime(int $detonationTime): static
    {
        $this->detonationTime = $detonationTime;

        return $this;
    }
}
