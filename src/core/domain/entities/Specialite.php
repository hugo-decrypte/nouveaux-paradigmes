<?php

namespace core\domain\entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Error;

class Specialite
{
    private int $id;
    private string $libelle;
    private string $description;
    protected Collection $praticiens;
    protected Collection $motif_visites;

    public function __construct()
    {
        $this->praticiens = new ArrayCollection();
        $this->motif_visites = new ArrayCollection();
    }

    public function getId(): int{
        return $this->id;
    }

    public function getLibelle(): string{
        return $this->libelle;
    }

    public function getDescription(): string{
        return $this->description;
    }

    public function setLibelle(string $libelle): void{
        $this->libelle = $libelle;
    }

    public function setDescription(string $description): void{
        $this->description = $description;
    }

    public function getPraticiens(): Collection{
        return $this->praticiens;
    }

    public function getMotifVisites(): Collection{
        return $this->motif_visites;
    }

    public function setPraticiens(Collection $praticiens): void{
        $this->praticiens = $praticiens;
    }

    public function setMotifVisites(Collection $motif_visites): void{
        $this->motif_visites = $motif_visites;
    }

}