<?php

class Objets
{
    private int $id_obj;

    private String $image_obj;

    private String $nom_obj;

    private String $description_obj;

    private bool $disponibilite_obj;

    private int $id_cat;

    private int $id_uti;


    // les getteurs
    public function getIdObj(): int
    {
        return $this->id_obj;
    }

    public function getImageObj(): String
    {
        return $this->image_obj;
    }

    public function getNomObj(): String
    {
        return $this->nom_obj;
    }

    public function getDesciptionObj(): String
    {
        return $this->description_obj;
    }

    public function getDisponibiliteObj(): bool
    {
        return $this->disponibilite_obj;
    }

    public function getIdCat(): int
    {
        return $this->id_cat;
    }

    public function getIdUti(): int
    {
        return $this->id_uti;
    }
   // les setteurs
    public function setImageObj($imageObj)
    {
        $this->image_obj = $imageObj;
    }

    public function setNomObj($nomObj)
    {
        $this->nom_obj = $nomObj;
    }
    
    public function setDescriptionObj($descriptionObj)
    {
        $this->description_obj = $descriptionObj;
    }

    public function setDisponibiliteObj($disponibiliteObj)
    {
        $this->disponibilite_obj = $disponibiliteObj;
    }

    public function setIdCat($idCat)
    {
        $this->id_cat = $idCat;
    }
    
    public function setIdUti($idUti)
    {
        $this->id_uti = $idUti;
    }
}
