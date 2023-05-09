<?php

class Ville
{
    private int $idRol;

    private String $libelleRol;


    // les getteurs
    public function getIdRol(): int
    {
        return $this->idRol;
    }

    public function getLibelleRol(): String
    {
        return $this->libelleRol;
    }

    // les setteurs
    public function setLibelleRol($libelleRol)
    {
        $this->libelleRol= $libelleRol;
    }
}