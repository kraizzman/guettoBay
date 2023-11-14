<?php

namespace App\Entity;

use App\Repository\MaterialRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MaterialRepository::class)]
class Material
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\OneToMany(mappedBy: 'materiel', targetEntity: MeleeWeapon::class)]
    private Collection $meleeWeapons;

    public function __construct()
    {
        $this->meleeWeapons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, MeleeWeapon>
     */
    public function getMeleeWeapons(): Collection
    {
        return $this->meleeWeapons;
    }

    public function addMeleeWeapon(MeleeWeapon $meleeWeapon): static
    {
        if (!$this->meleeWeapons->contains($meleeWeapon)) {
            $this->meleeWeapons->add($meleeWeapon);
            $meleeWeapon->setMateriel($this);
        }

        return $this;
    }

    public function removeMeleeWeapon(MeleeWeapon $meleeWeapon): static
    {
        if ($this->meleeWeapons->removeElement($meleeWeapon)) {
            // set the owning side to null (unless already changed)
            if ($meleeWeapon->getMateriel() === $this) {
                $meleeWeapon->setMateriel(null);
            }
        }

        return $this;
    }
}
