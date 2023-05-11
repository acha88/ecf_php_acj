<?php

require_once 'connect.php';
require_once './Models/Entity/Villes.php';

class VilleManager
{

    public static function afficheVille()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM public.villes";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Villes'); 
        return $results;
    }
   

    public static function addVille(String $nomVil)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO public.villes (nom_vil) VALUES (:NomVil)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':NomVil', $nomVil);
        $stmt->execute();
        $newContact = $pdo->lastInsertId();
        return $newContact;
    }
    public static function deleteVille($id)
    {
        $pdo = dbconnect();
        $sql = "DELETE FROM public.villes WHERE id_vil= :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez supprimer ' . $count . 'ville(s).');
    }
}
