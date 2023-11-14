<?php

namespace App\Entity;

use App\Repository\AmmunitionsTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AmmunitionsTypeRepository::class)]
class AmmunitionsType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $size = null;

    #[ORM\ManyToMany(targetEntity: FireArm::class, mappedBy: 'ammunitions')]
    private Collection $fireArms;

    public function __construct()
    {
        $this->fireArms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): static
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return Collection<int, FireArm>
     */
    public function getFireArms(): Collection
    {
        return $this->fireArms;
    }

    public function addFireArm(FireArm $fireArm): static
    {
        if (!$this->fireArms->contains($fireArm)) {
            $this->fireArms->add($fireArm);
            $fireArm->addAmmunition($this);
        }

        return $this;
    }

    public function removeFireArm(FireArm $fireArm): static
    {
        if ($this->fireArms->removeElement($fireArm)) {
            $fireArm->removeAmmunition($this);
        }

        return $this;
    }
}
