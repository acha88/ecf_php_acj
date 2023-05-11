<?php

class Utilisateur
{
    private int $idUti;

    private String $emailUti;

    private String $passwordUti;

    private String $nomUti;

    private String $prenomUti;

    private String $datenaissanceUti;

    private int $pointCumulerUti;

    private int $idVil;

    private int $idRol;

    /* public function __construct(String $emailUti, String $passwordUti)
    {
        $this->emailUti = $emailUti;
        $this->passwordUti = $passwordUti;
    }*/


    // les getteurs 
    public function getIdUti(): int
    {
        return $this->idUti;
    }

    public function getNomUti(): String
    {
        return $this->nomUti;
    }

    public function getPrenomUti(): String
    {
        return $this->prenomUti;
    }

    public function getDatenaissance(): String
    {
        return $this->datenaissanceUti;
    }

    public function getEmailUti(): String
    {
        return $this->emailUti;
    }

    public function getPasswordUti(): String
    {
        return $this->passwordUti;
    }

    public function getPointCumulerUti(): int
    {
        return $this->pointCumulerUti;
    }
    public function getIdVil(): int
    {
        return $this->idVil;
    }
    public function getIdRol(): int
    {
        return $this->idRol;
    }


    // les setteurs 
    public function setNomUti($nomUti)
    {
        $this->nomUti = $nomUti;
    }

    public function setPrenomUti($prenomUti)
    {
        $this->prenomUti = $prenomUti;
    }

    public function setDatenaissanceUti($datenaissanceUti)
    {
        $this->datenaissanceUti = $datenaissanceUti;
    }

    public function setEmailUti($emailUti)
    {
        $this->emailUti = $emailUti;
    }

    public function setPasswordUti($passwordUti)
    {
        $this->passwordUti = $passwordUti;
    }

    public function setPointCumulerUti($pointCumulerUti)
    {
        $this->pointCumulerUti = $pointCumulerUti;
    }
    public function setIdVil($idVil)
    {
        $this->idVil = $idVil;
    }
    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }

    // check si le email existe (il retourne 1 si oui)
    public function checkEmail()
    {
        $db = dbconnect();
        $checkIfExist = $db->prepare('SELECT 1 FROM `public.utilisateurs` WHERE `email_uti` = ?');
        $checkIfExist->bindValue(1, $this->emailUti, PDO::PARAM_STR);
        $checkIfExist->execute();
        return  $checkIfExist->fetchColumn();
    }

    // recherche du password dans le BDD pour la comparée avec le password entré dans le login
    public function returnPw()
    {
        $db = dbconnect();
        $checkIfExist = $db->prepare("SELECT * FROM `public.utilisateurs` WHERE `email_uti` = ?");
        $checkIfExist->bindValue(1, $this->emailUti, PDO::PARAM_STR);
        $checkIfExist->execute();
        $result = $checkIfExist->fetchAll();
        return $result['password_uti'];
    }
}
