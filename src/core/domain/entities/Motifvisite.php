<?php

namespace pratilib\core\domain\entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

class Motifvisite
{

    private int $id;
    private string $libelle;

    private Specialite $specialite;

    protected Collection $praticiens;

    public function __construct(){
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
    public function getPraticiens()
    {
        return $this->praticiens;
    }
}
