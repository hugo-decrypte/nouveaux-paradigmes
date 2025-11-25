<?php

namespace core\domain\entities;

use Error;

class Specialite
{
    private int $id;
    private string $libelle;
    private string $description;
    public function __construct(int $id, string $libelle, string $description)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->description = $description;
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