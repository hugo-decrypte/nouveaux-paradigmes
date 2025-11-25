<?php

namespace pratilib\core\domain\entities;

use pratilib\core\domain\entities;
use Cassandra\Uuid;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Praticien
{
    private Uuid $id;
    private string $nom;
    private string $rpps_id;
    private string $prenom;
    private string $titre;
    private string $ville;
    private string $email;
    private string $telephone;
    private bool $organisation;
    private bool $accepte_nouveau_client;

    private Specialite $specialite;
    private Structure $structure;
    protected Collection $motif_visites;
    protected Collection $moyens_paiement;

    public function __construct()
    {
        $this->motif_visites = new ArrayCollection();
        $this->moyens_paiement = new ArrayCollection();
    }

    public function getId(): UUID{
        return $this->id;
    }

    public function setId(UUID $id): self{
        $this->id = $id;
        return $this;
    }

    public function getNom(): string{
        return $this->nom;
    }

    public function setNom(string $nom): self{
        $this->nom = $nom;
        return $this;
    }

    public function getRppsId(): string{
        return $this->rpps_id;
    }

    public function setRppsId(string $rpps_id): self{
        $this->rpps_id = $rpps_id;
        return $this;
    }

    public function getPrenom(): string{
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self{
        $this->prenom = $prenom;
        return $this;
    }

    public function getTitre(): string{
        return $this->titre;
    }

    public function setTitre(string $titre): self{
        $this->titre = $titre;
        return $this;
    }

    public function getVille(): string{
        return $this->ville;
    }

    public function setVille(string $ville): self{
        $this->ville = $ville;
        return $this;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function setEmail(string $email): self{
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): string{
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self{
        $this->telephone = $telephone;
        return $this;
    }

    public function getOrganisation(): bool{
        return $this->organisation;
    }

    public function setOrganisation(bool $organisation): self{
        $this->organisation = $organisation;
        return $this;
    }

    public function getAccepteNouveauClient(): bool{
        return $this->accepte_nouveau_client;
    }

    public function setAccepteNouveauClient(bool $accepte): self{
        $this->accepte_nouveau_client = $accepte;
        return $this;
    }

    public function getSpecialite(): Specialite{
        return $this->specialite;
    }

    public function setSpecialite(Specialite $specialite): self{
        $this->specialite = $specialite;
        return $this;
    }

    public function getStructure(): Structure{
        return $this->structure;
    }

    public function setStructure(Structure $structure): self{
        $this->structure = $structure;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getMotifVisites(): Collection{
        return $this->motif_visites;
    }

    public function addMotifVisite(MotifVisite $motif): self{
        if (!$this->motif_visites->contains($motif)) {
            $this->motif_visites->add($motif);
        }
        return $this;
    }

    public function removeMotifVisite(MotifVisite $motif): self{
        $this->motif_visites->removeElement($motif);
        return $this;
    }

    /**
     * @return Collection
     */
    public function getMoyensPaiement(): Collection{
        return $this->moyens_paiement;
    }

    public function addMoyenPaiement(MoyenPaiement $moyen): self{
        if (!$this->moyens_paiement->contains($moyen)) {
            $this->moyens_paiement->add($moyen);
        }
        return $this;
    }

    public function removeMoyenPaiement(MoyenPaiement $moyen): self{
        $this->moyens_paiement->removeElement($moyen);
        return $this;
    }
}
