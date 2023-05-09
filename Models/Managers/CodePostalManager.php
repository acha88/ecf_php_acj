<?php

require_once 'connect.php';
require_once './Models/Entity/CodePostal.php';

class CodePostalManager
{

    public static function afficheCodePostal()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM code_postal";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'CodePostal'); 
        return $results;
    }
   

    public static function addCodePostal(String $codePostal)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO code_postal (code_postal) VALUES (:CoP)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':CoP', $codePostal);
        $stmt->execute();
        $newContact = $pdo->lastInsertId();
        return $newContact;
    }
    public static function deleteCodePostal($id)
    {
        $pdo = dbconnect();
        $sql = "DELETE FROM code_postal WHERE id_code_postal= :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez supprimer ' . $count . 'code(s)-postal(aux).');
    }
    public static function updateCodePostal(String $codePostal)
    {
        $pdo = dbconnect();
        $sql = "UPDATE code_postal SET code_postal= :CoP WHERE code_postal=:CoP";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':CoP', $codePostal);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez mis à jour ' . $count . 'code(s)-postal(aux).');
    }
}
