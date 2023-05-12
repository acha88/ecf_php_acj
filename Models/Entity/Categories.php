<?php

class Categories
{
    private int $id_cat;

    private String $nom_cat;

    private String $libelle_cat;

    private String $code_cat;

    private  int $valeur_point_cat;


    // les getteurs
    public function getIdCat(): int
    {
        return $this->id_cat;
    }

    public function getNomCat(): String
    {
        return $this->nom_cat;
    }

    public function getLibelleCat(): String
    {
        return $this->libelle_cat;
    }

    public function getCodeCat(): String
    {
        return $this->code_cat;;
    }

    public function getValeurPointCat(): int
    {
        return $this->valeur_point_cat;
    }

    // les setteurs
    public function setNomCat($nomCat)
    {
        $this->nom_cat = $nomCat;
    }

    public function setLibelleCat($libelleCat)
    {
        $this->libelle_cat = $libelleCat;
    }

    public function setCodeCat($codeCat)
    {
        $this->code_cat = $codeCat;
    }
    public function setValeurPointCat($valeurPointCat)
    {
        $this->valeur_point_cat = $valeurPointCat;
    }

}
