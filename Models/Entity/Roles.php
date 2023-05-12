<?php

class Roles
{
    private int $id_rol;

    private String $libelle_rol;


    // les getteurs
    public function getIdRol(): int
    {
        return $this->id_rol;
    }

    public function getLibelleRol(): String
    {
        return $this->libelle_rol;
    }

    // les setteurs
    public function setLibelleRol($libelleRol)
    {
        $this->libelle_rol= $libelleRol;
    }
}