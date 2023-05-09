<?php

class Adresses
{
    private int $idAdr;

    private int $numRueAdr;

    private String $nomRueAdr;

    private int $idCodePostal;

    private int $idVil;


    // les getteurs
    public function getIdAdr(): int
    {
        return $this->idAdr;
    }

    public function getNumRueAdr(): int
    {
        return $this->numRueAdr;
    }

    public function getNomRueAdr(): String
    {
        return $this->nomRueAdr;
    }
    public function getIdCodePostal(): int
    {
        return $this->idCodePostal;
    }
    public function getIdVil(): int
    {
        return $this->idVil;
    }

    // les setteurs
    public function setNumRueAdr($numRueAdr)
    {
        $this->numRueAdr = $numRueAdr;
    }

    public function setNomRueAdr($nomRueAdr)
    {
        $this->nomRueAdr = $nomRueAdr;
    }
    public function setIdCodePostal($idCodePostal)
    {
        $this->idCodePostal = $idCodePostal;
    }
    public function setIdVil($idVil)
    {
        $this->idVil = $idVil;
    }
}
