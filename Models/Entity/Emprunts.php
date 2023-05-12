<?php

class Emprunts
{
    private int $id_emps;

    private String $date_debut_emps;

    private String $date_fin_emps;

    private bool $rendu;

    private int $id_uti;

    private int $id_obj;



    // les getteurs 
    public function getIdEmps(): int
    {
        return $this->id_emps;
    }

    public function getDateDebutEmps(): String
    {
        return $this->date_debut_emps;
    }

    public function getDateFinEmps(): String
    {
        return $this->date_fin_emps;
    }

    public function getRendu(): bool
    {
        return $this->rendu;
    }

    public function getIdUti(): int
    {
        return $this->id_uti;
    }

    public function getIdObj(): int
    {
        return $this->id_obj;
    }


    // les setteurs 
    public function setDateDebutEmps($dateDebutEmps)
    {
        $this->date_debut_emps =$dateDebutEmps;
    }

    public function setDateFinEmps($dateFinEmps)
    {
        $this->date_fin_emps = $dateFinEmps;
    }

    public function setRendu($rendu)
    {
        $this->rendu = $rendu;
    }

    public function setIdUti($idUti)
    {
        $this->id_uti = $idUti;
    }

    public function setIdObj($idObj)
    {
        $this->id_obj = $idObj;
    }
}
