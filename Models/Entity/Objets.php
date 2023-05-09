<?php

class Contact
{
    private int $idObj;

    private String $nomObj;

    private String $imageObj;

    private String $descriptionObj;

    private bool $disponibiliteObj;

    private int $idCat;

    private int $idUti;


    /* public function __construct(String $nom)
    {
        $this->nom = $nom;
    }*/

    // les getteurs
    public function getIdObj(): int
    {
        return $this->idObj;
    }

    public function getNomObj(): String
    {
        return $this->nomObj;
    }
    public function getImageObj(): String
    {
        return $this->imageObj;
    }

    public function getDesciptionObj(): String
    {
        return $this->descriptionObj;
    }

    public function getDisponibiliteObj(): bool
    {
        return $this->disponibiliteObj;
    }

    // les setteurs
    public function setNomObj($nomObj)
    {
        $this->nomObj = $nomObj;
    }
    public function setImageObj($imageObj)
    {
        $this->imageObj = $imageObj;
    }
    public function setDescriptionObj($descriptionObj)
    {
        $this->descriptionObj = $descriptionObj;
    }
    public function setDisponibiliteObj($disponibiliteObj)
    {
        $this->disponibiliteObj = $disponibiliteObj;
    }

}
