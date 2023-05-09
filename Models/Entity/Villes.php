<?php

class Ville
{
    private int $idVil;

    private String $nomVil;


    // les getteurs
    public function getIdVil(): int
    {
        return $this->idVil;
    }

    public function getNomVil(): String
    {
        return $this->nomVil;
    }

    // les setteurs
    public function setNomVil($nomVil)
    {
        $this->nomVil = $nomVil;
    }
}