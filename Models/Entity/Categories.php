<?php

class Categories
{
    private int $idCat;

    private String $nomCat;

    private decimal $codeCat;

    private decimal $valeurPointCat;


    /* public function __construct(String $nomCat)
    {
        $this->nomCat = $nomCat;
    }*/

    // les getteurs
    public function getIdCat(): int
    {
        return $this->idCat;
    }

    public function getNomCat(): String
    {
        return $this->nomCat;
    }

    public function getCodeCat(): decimal
    {
        return $this->codeCat;;
    }

    public function getValeurPointCat(): decimal
    {
        return $this->valeurPointCat;
    }

    // les setteurs
    public function setNomCat($nomCat)
    {
        $this->nomCat = $nomCat;
    }

    public function setCodeCat($codeCat)
    {
        $this->codeCat = $codeCat;
    }
    public function setValeurPointCat($valeurPointCat)
    {
        $this->valeurPointCat = $valeurPointCat;
    }

}
