<?php

require_once 'connect.php';
require_once './Models/Entity/Categories.php';

class CategorieManager
{

    public static function afficheCategorie()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM categories";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Categories'); 
        return $results;
    }
    public static function getCategorieById($id)
    {
        $pdo = dbconnect();
        $sql = "SELECT * FROM categorie WHERE id_cat=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Categories');
        $result = $stmt->fetch();
        return $result;
    }

    public static function addCategorie(String $nomCat, String $codeCat, Int $valeurPointCat)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO categories (nom_cat, code_cat, valeur_point_cat) VALUES (:nomCat, :codeCat, :valeurPointCat)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nomCat', $nomCat);
        $stmt->bindParam(':codeCat', $codeCat);
        $stmt->bindParam(':valeurPointCat', $valeurPointCat);
        $stmt->execute();
        $newContact = $pdo->lastInsertId();
        return $newContact;
    }
    public static function deleteCategorie($id)
    {
        $pdo = dbconnect();
        $sql = "DELETE FROM categories WHERE id_cat= :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez supprimer ' . $count . 'categorie(s).');
    }
    public static function updateCategorie($nomCat, $code_cat, $valeurPointCat)
    {
        $pdo = dbconnect();
        $sql = "UPDATE categories SET nom_cat= :nom, code_cat= :codeCat, valeur_poin_cat= :valeurPointCat WHERE nom_cat=:nom";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nomCat', $nom);
        $stmt->bindParam(':codeCat', $code_cat);
        $stmt->bindParam(':valeurPointCat', $valeurPointCat);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez mis à jour ' . $count . 'categorie(s).');
    }
}
