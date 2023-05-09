<?php

require_once 'connect.php';
require_once './Models/Entity/Villes.php';

class VilleManager
{

    public static function afficheVille()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM villes";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Ville'); 
        return $results;
    }
   

    public static function addVille(String $nomVil)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO villes (nom_vil) VALUES (:NomVil)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':NomVil', $nomVil);
        $stmt->execute();
        $newContact = $pdo->lastInsertId();
        return $newContact;
    }
    public static function deleteVille($id)
    {
        $pdo = dbconnect();
        $sql = "DELETE FROM villes WHERE id_vil= :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez supprimer ' . $count . 'ville(s).');
    }
    public static function updateVille(String $nomVil)
    {
        $pdo = dbconnect();
        $sql = "UPDATE villes SET nom_vil= :nomVil WHERE nom_vil=:nomVil";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nomVil', $nomVil);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez mis à jour ' . $count . 'ville(s).');
    }
}
