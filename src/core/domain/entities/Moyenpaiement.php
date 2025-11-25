<?php

namespace pratilib\core\domain\entities;

use Error;

class Moyenpaiement
{
    private int $id;
    private string $libelle;

    public function __construct(int $id, string $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    //getter magique
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        throw new Error("Property not found");
    }

    //setter magique
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        throw new Error("Property not found");
    }
}