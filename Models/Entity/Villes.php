<?php

class Villes
{
    private int $id_vil;

    private String $nom_vil;


    // les getteurs
    public function getIdVil(): int
    {
        return $this->id_vil;
    }

    public function getNomVil(): String
    {
        return $this->nom_vil;
    }

    // les setteurs
    public function setNomVil($nomVil)
    {
        $this->nom_vil = $nomVil;
    }
}