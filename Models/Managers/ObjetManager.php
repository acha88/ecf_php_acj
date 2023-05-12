<?php

require_once 'connect.php';
require_once './Models/Entity/Objets.php';

class ObjetManager
{

    public static function afficheObjets()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM objets";
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

    public static function addObjet(String $nomObj, String $imageObj, String $descriptionObj, bool $disponibiliteObj, int $categorie, int $idUti)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO objets (nom_obj, image_obj, description_obj, disponibilite_obj, id_cat, id_uti) VALUES (:nomObj, :imageObj, :descriptionObj, :disponibiliteObj, :idCat, :idUti)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nomObj', $nomObj);
        $stmt->bindParam(':imageObj', $imageObj);
        $stmt->bindParam(':descriptionObj', $descriptionObj);
        $stmt->bindParam(':disponibiliteObj', $disponibiliteObj);
        $stmt->bindParam(':idCat', $categorie);
        $stmt->bindParam(':idUti', $idUti);
        $stmt->execute();
        $newObjet = $pdo->lastInsertId();
        return $newObjet;
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
    public static function updateObjet($nom, $imageObj, $descriptionObj)
    {
        $pdo = dbconnect();
        $sql = "UPDATE objets SET nom_obj= :nom, image_obj= :image_obj, description_obj= :descriptionObj WHERE nom_obj=:nom";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':imageObj', $imageObj);
        $stmt->bindParam(':descriptionObj', $descriptionObj);
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
