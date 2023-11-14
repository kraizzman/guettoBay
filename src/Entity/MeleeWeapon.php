<?php

namespace App\Entity;

use App\Repository\MeleeWeaponRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MeleeWeaponRepository::class)]
class MeleeWeapon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $length = null;

    #[ORM\ManyToOne(inversedBy: 'meleeWeapons')]
    private ?Material $materiel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(float $length): static
    {
        $this->length = $length;

        return $this;
    }

    public function getMateriel(): ?Material
    {
        return $this->materiel;
    }

    public function setMateriel(?Material $materiel): static
    {
        $this->materiel = $materiel;

        return $this;
    }
}
