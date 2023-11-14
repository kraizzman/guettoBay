<?php

namespace App\Entity;

use App\Repository\GrenadeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GrenadeRepository::class)]
class Grenade extends Weapon
{
    #[ORM\Column]
    private ?float $explosionRadius = null;

    #[ORM\Column]
    private ?int $detonationTime = null;

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
