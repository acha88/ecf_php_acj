<?php

class Categories
{
    private int $idCat;

    private String $nomCat;

    private String $codeCat;

    private  int $valeurPointCat;


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

    public function getCodeCat(): String
    {
        return $this->codeCat;;
    }

    public function getValeurPointCat(): int
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
