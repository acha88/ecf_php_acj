<?php

class Contact
{
    private int $idObj;

    private String $imageObj;

    private String $nomObj;

    private String $descriptionObj;

    private bool $disponibiliteObj;

    private int $idCat;

    private int $idUti;


    // les getteurs
    public function getIdObj(): int
    {
        return $this->idObj;
    }

    public function getImageObj(): String
    {
        return $this->imageObj;
    }

    public function getNomObj(): String
    {
        return $this->nomObj;
    }

    public function getDesciptionObj(): String
    {
        return $this->descriptionObj;
    }

    public function getDisponibiliteObj(): bool
    {
        return $this->disponibiliteObj;
    }

    public function getIdCat(): int
    {
        return $this->idCat;
    }

    public function getIdUti(): int
    {
        return $this->idUti;
    }
   // les setteurs
    public function setImageObj($imageObj)
    {
        $this->imageObj = $imageObj;
    }

    public function setNomObj($nomObj)
    {
        $this->nomObj = $nomObj;
    }
    
    public function setDescriptionObj($descriptionObj)
    {
        $this->descriptionObj = $descriptionObj;
    }

    public function setDisponibiliteObj($disponibiliteObj)
    {
        $this->disponibiliteObj = $disponibiliteObj;
    }

    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;
    }
    
    public function setIdUti($idUti)
    {
        $this->idUti = $idUti;
    }
}
