<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Structure
{
    private ?string $id = null;
    private string $nom;
    private string $adresse;
    private string $ville;
    private string $codePostal;
    private string $telephone;

    // Une structure possède plusieurs praticiens (1..*)
    protected Collection $praticiens;

    public function __construct(){
        $this->praticiens = new ArrayCollection();
    }

    public function getId(): ?string{
        return $this->id;
    }

    public function getNom(): string{
        return $this->nom;
    }

    public function setNom(string $nom): self{
        $this->nom = $nom;
        return $this;
    }

    public function getAdresse(): string{
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self{
        $this->adresse = $adresse;
        return $this;
    }

    public function getVille(): string{
        return $this->ville;
    }

    public function setVille(string $ville): self{
        $this->ville = $ville;
        return $this;
    }

    public function getCodePostal(): string{
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self{
        $this->codePostal = $codePostal;
        return $this;
    }

    public function getTelephone(): string{
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self{
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPraticiens(): Collection
    {
        return $this->praticiens;
    }

    public function setPraticiens(Collection $praticiens){
        $this->praticiens = $praticiens;
    }

}
