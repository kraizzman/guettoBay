<?php

namespace App\Entity;

use App\Repository\FireArmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FireArmRepository::class)]
class FireArm
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $caliber = null;

    #[ORM\Column]
    private ?int $capacity = null;

    #[ORM\Column]
    private ?int $fireRate = null;

    #[ORM\ManyToMany(targetEntity: AmmunitionsType::class, inversedBy: 'fireArms')]
    private Collection $ammunitions;

    public function __construct()
    {
        $this->ammunitions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCaliber(): ?string
    {
        return $this->caliber;
    }

    public function setCaliber(string $caliber): static
    {
        $this->caliber = $caliber;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): static
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getFireRate(): ?int
    {
        return $this->fireRate;
    }

    public function setFireRate(int $fireRate): static
    {
        $this->fireRate = $fireRate;

        return $this;
    }

    /**
     * @return Collection<int, AmmunitionsType>
     */
    public function getAmmunitions(): Collection
    {
        return $this->ammunitions;
    }

    public function addAmmunition(AmmunitionsType $ammunition): static
    {
        if (!$this->ammunitions->contains($ammunition)) {
            $this->ammunitions->add($ammunition);
        }

        return $this;
    }

    public function removeAmmunition(AmmunitionsType $ammunition): static
    {
        $this->ammunitions->removeElement($ammunition);

        return $this;
    }
}
