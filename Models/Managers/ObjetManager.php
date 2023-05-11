<?php

require_once 'connect.php';
require_once './Models/Entity/Objets.php';

class ObjetManager
{

    public static function afficheObjets()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM objets INNER JOIN categories ON id_cat = categories.nom_cat";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Objets'); 
        return $results;
    }
    public static function getObjetById($id)
    {
        $pdo = dbconnect();
        $sql = "SELECT * FROM objets WHERE id_obj=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Objets');
        $result = $stmt->fetch();
        return $result;
    }

    public static function addObjet(String $nomObj, String $description, String $imageObj)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO objets (image_obj, nom_obj, description_obj) VALUES (:nomObj, :descriptionObj, :imageObj)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':imageObj', $imageObj);
        $stmt->bindParam(':nomObj', $nomObj);
        $stmt->bindParam(':descriptionObj', $description);
        $stmt->execute();
        $newContact = $pdo->lastInsertId();
        return $newContact;
    }
    public static function deleteObjet($id)
    {
        $pdo = dbconnect();
        $sql = "DELETE FROM objets WHERE id_obj= :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez supprimer ' . $count . 'objet(s).');
    }
    public static function updateObjet($nom, $imageObj, $description)
    {
        $pdo = dbconnect();
        $sql = "UPDATE objets SET nom_obj= :nom, image_obj= :image_obj, description_obj= :descriptionObj WHERE nom_obj=:nom";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':imageObj', $imageObj);
        $stmt->bindParam(':descriptionObj', $description);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez mis à jour ' . $count . 'objet(s).');
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
