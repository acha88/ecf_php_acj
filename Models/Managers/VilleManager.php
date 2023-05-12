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
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Villes'); 
        return $results;
    }
}
