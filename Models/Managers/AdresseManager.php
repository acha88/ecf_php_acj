<?php

require_once 'connect.php';
require_once './Models/Entity/Adresses.php';

class AdresseManager
{

    public static function afficheAdresse()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM adresses";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Adresses'); 
        return $results;
    }
   

    public static function addAdresse(int $numRueAdr, String $nomRueAdr, int $idCodePostal, int $idVil)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO adresses (num_rue_adr, nom_rue_adr, id_code_postal, id_vil) VALUES (:numAdr, :nomAdr, :idCoP, :idVil)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':numAdr', $numRueAdr);
        $stmt->bindParam(':nomAdr', $nomRueAdr);

        // EST CE QU IL FAUT PAS PRENDRE LES TABLES CODE POSTAL ET VILLE EN +++ ?????
        $stmt->bindParam(':idCoP', $idCodePostal);
        $stmt->bindParam(':idVil', $idVil);
        $stmt->execute();
        $newContact = $pdo->lastInsertId();
        return $newContact;
    }
    public static function deleteAdresse($id)
    {
        $pdo = dbconnect();
        $sql = "DELETE FROM adresses WHERE id_adr= :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez supprimer ' . $count . 'adresse(s).');
    }
    public static function updateAdresse(int $numRueAdr, String $nomRueAdr, int $idCodePostal, int $idVil)
    {
        $pdo = dbconnect();
        $sql = "UPDATE adresses SET num_rue_adr= :numAdr, nom_rue_adr= :nomAdr, id_code_postal= :idCoP, id_vil= :idVil WHERE nom_rue_adr=:nomAdr";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':numAdr', $numRueAdr);
        $stmt->bindParam(':nomAdr', $nomRueAdr);

        // EST CE QU IL FAUT PAS PRENDRE LES TABLES CODE POSTAL ET VILLE EN +++ ?????
        $stmt->bindParam(':idCoP', $idCodePostal);
        $stmt->bindParam(':idVil', $idVil);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez mis à jour ' . $count . 'adresse(s).');
    }
}
