<?php

namespace core\domain\entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Error;

class Moyenpaiement
{
    private int $id;
    private string $libelle;

    protected Collection $praticiens;

    public function __construct()
    {
        $this->praticiens = new ArrayCollection();
    }

    public function getId(): int{
        return $this->id;
    }

    public function getLibelle(): string{
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self{
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * @return Collection
     */

    public function getPraticiens(): Collection{
        return $this->praticiens;
    }

    public function setPraticiens(Collection $praticiens): void{
        $this->praticiens = $praticiens;
    }
}