<?php

namespace pratilib\core\domain\entities;

use Cassandra\Uuid;
use Error;

class Structure {
    private Uuid $id;
    private string $nom;
    private string $adresse;
    private String $ville;
    private string $code_postal;
    private string $telephone;
    public function __construct(
        UUID $id,
        string $nom,
        string $adresse,
        string $ville,
        string $code_postal,
        string $telephone
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->code_postal = $code_postal;
        $this->telephone = $telephone;
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