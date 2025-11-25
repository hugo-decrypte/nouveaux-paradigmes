<?php

namespace core\domain\entities;

use Cassandra\Uuid;
use Error;

class Praticien
{
    private UUID $id;
    private string $nom;
    private string $rpps_id;
    private string $prenom;
    private string $titre;
    private string $ville;
    private string $email;
    private string $telephone;
    private bool $organisation;
    private bool $accepte_nouveau_client;

    //constructor
    public function __construct(
        UUID $id,
        string $nom,
        string $rpps_id,
        string $prenom,
        string $titre,
        string $ville,
        string $email,
        string $telephone,
        bool $organisation,
        bool $accepte_nouveau_client
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->rpps_id = $rpps_id;
        $this->prenom = $prenom;
        $this->titre = $titre;
        $this->ville = $ville;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->organisation = $organisation;
        $this->accepte_nouveau_client = $accepte_nouveau_client;
    }

    //getter magique
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        throw new Error("Property not found");
    }

    //setter magique
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        throw new Error("Property not found");
    }
}