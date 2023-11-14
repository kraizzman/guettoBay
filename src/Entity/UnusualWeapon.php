<?php

namespace App\Entity;

use App\Repository\UnusualWeaponRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UnusualWeaponRepository::class)]
class UnusualWeapon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $specialEffect = null;

    public function getId(): ?int
    {
        return $this->id;
    }

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
