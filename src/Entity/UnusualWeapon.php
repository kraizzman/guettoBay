<?php

namespace App\Entity;

use App\Repository\UnusualWeaponRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UnusualWeaponRepository::class)]
class UnusualWeapon extends Weapon
{
    #[ORM\Column(length: 255)]
    private ?string $specialEffect = null;

    public function getSpecialEffect(): ?string
    {
        return $this->specialEffect;
    }

    public function setSpecialEffect(string $specialEffect): static
    {
        $this->specialEffect = $specialEffect;

        return $this;
    }
}
