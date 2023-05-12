<?php

class Utilisateurs
{
    private int $id_uti;

    private String $nom_uti;

    private String $prenom_uti;

    private String $datenaissance_uti;

    private String $email_uti;

    private String $password_uti;


    private ?int $point_cumuler_uti;

    private int $id_vil;

    private int $id_rol;


    // les getteurs 
    public function getIdUti(): int
    {
        return $this->id_uti;
    }

    public function getNomUti(): String
    {
        return $this->nom_uti;
    }

    public function getPrenomUti(): String
    {
        return $this->prenom_uti;
    }

    public function getDatenaissance(): String
    {
        return $this->datenaissance_uti;
    }

    public function getEmailUti(): String
    {
        return $this->email_uti;
    }

    public function getPasswordUti(): String
    {
        return $this->password_uti;
    }

    public function getPointCumulerUti(): int
    {
        return $this->point_cumuler_uti;
    }
    public function getIdVil(): int
    {
        return $this->id_vil;
    }
    public function getIdRol(): int
    {
        return $this->id_rol;
    }


    // les setteurs 
    public function setNomUti($nomUti)
    {
        $this->nom_uti = $nomUti;
    }

    public function setPrenomUti($prenomUti)
    {
        $this->prenom_uti = $prenomUti;
    }

    public function setDatenaissanceUti($datenaissanceUti)
    {
        $this->datenaissance_uti = $datenaissanceUti;
    }

    public function setEmailUti($emailUti)
    {
        $this->email_uti = $emailUti;
    }

    public function setPasswordUti($passwordUti)
    {
        $this->password_uti = $passwordUti;
    }

    public function setPointCumulerUti($pointCumulerUti)
    {
        $this->point_cumuler_uti = $pointCumulerUti;
    }
    public function setIdVil($idVil)
    {
        $this->id_vil = $idVil;
    }
    public function setIdRol($idRol)
    {
        $this->id_rol = $idRol;
    }

    // check si le email existe (il retourne 1 si oui)
    public function checkEmail()
    {
        $db = dbconnect();
        $checkIfExist = $db->prepare('SELECT 1 FROM `utilisateurs` WHERE `email_uti` = ?');
        $checkIfExist->bindValue(1, $this->email_uti, PDO::PARAM_STR);
        $checkIfExist->execute();
        return  $checkIfExist->fetchColumn();
    }

    // recherche du password dans le BDD pour la comparée avec le password entré dans le login
    public function returnPw()
    {
        $db = dbconnect();
        $checkIfExist = $db->prepare("SELECT * FROM `utilisateurs` WHERE `email_uti` = ?");
        $checkIfExist->bindValue(1, $this->email_uti, PDO::PARAM_STR);
        $checkIfExist->execute();
        $result = $checkIfExist->fetchAll();
        return $result['password_uti'];
    }
}
