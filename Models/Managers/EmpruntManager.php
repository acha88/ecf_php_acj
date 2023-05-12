<?php

require_once 'connect.php';
require_once './Models/Entity/Emprunts.php';

class EmpruntManager
{

    public static function afficheEmprunt()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM emprunts";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Emprunts'); 
        return $results;
    }
    public static function getEmpruntById($id)
    {
        $pdo = dbconnect();
        $sql = "SELECT * FROM emprunts WHERE id_emps=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Emprunts');
        $result = $stmt->fetch();
        return $result;
    }

    public static function reservation($dateDebutEmps, $dateFinEmps, bool $rendu, int $idUti, int $idObj)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO emprunts (date_debut_emps, date_fin_emps, rendu, id_uti, id_obj) VALUES (:dateDebutEmps, :dateFinEmps, :rendu, :idUti, :idObj)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':dateDebutEmps', $dateDebutEmps);
        $stmt->bindParam(':dateFinEmps', $dateFinEmps);
        $stmt->bindParam(':rendu', $rendu);
        $stmt->bindParam(':idUti', $idUti);
        $stmt->bindParam(':idObj', $idObj);
        $stmt->execute();
        $newContact = $pdo->lastInsertId();
        return $newContact;
    }
   
    public static function rendu($rendu)
    {
        $pdo = dbconnect();
        $sql = "UPDATE emprunts SET rendu= :rendu WHERE id_obj=:idObj";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':rendu', $rendu);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez rendu ' . $count . 'objet(s).');
    }


    // AMELIORATION DE L'APPLICATION
    public static function empruntable()
    {
        // todo : A FAIRE !
        /*
            la disponibilité par défaut est true ; quand un user use emprunter() il passe a false et à true quand l'user le passe en rendre() 
        */
    }
}
