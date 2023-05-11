<?php

class Emprunts
{
    private int $idEmps;

    private String $dateDebutEmps;

    private String $dateFinEmps;

    private bool $rendu;

    private int $idUti;

    private int $idObj;



    // les getteurs 
    public function getIdEmps(): int
    {
        return $this->idEmps;
    }

    public function getDateDebutEmps(): String
    {
        return $this->dateDebutEmps;
    }

    public function getDateFinEmps(): String
    {
        return $this->dateFinEmps;
    }

    public function getRendu(): bool
    {
        return $this->rendu;
    }

    public function getIdUti(): int
    {
        return $this->idUti;
    }

    public function getIdObj(): int
    {
        return $this->idObj;
    }


    // les setteurs 
    public function setDateDebutEmps($dateDebutEmps)
    {
        $this->dateDebutEmps =$dateDebutEmps;
    }

    public function setDateFinEmps($dateFinEmps)
    {
        $this->dateFinEmps = $dateFinEmps;
    }

    public function setRendu($rendu)
    {
        $this->rendu = $rendu;
    }

    public function setIdUti($idUti)
    {
        $this->idUti = $idUti;
    }

    public function setIdObj($idObj)
    {
        $this->idObj = $idObj;
    }
}
