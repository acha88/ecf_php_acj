<?php

require_once 'connect.php';
require_once './Models/Entity/Utilisateurs.php';

class UtilisateurManager
{

    public static function afficheUtilisateur()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM utilisateurs";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Utilisateurs');
    }

    public static function addUtilisateur(String $email, String $password, String $nom, String $prenom, String $datenaissance)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $pdo = dbconnect();
        $sql = "INSERT INTO utilisateurs (email_uti, password, nom_uti, prenom_uti, datenaissance_uti) VALUES (:nom, :prenom, :email, :password, :datenaissance)";
        $stmt = $pdo->prepare($sql);  
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->execute();
        $newUser = $pdo->lastInsertId();
        return $newUser;
    }



    public static function connectUtilisateur($email, $password)
    {
        $pdo = dbconnect();
        $sql = "SELECT * FROM utilisateurs WHERE email_uti= :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Utilisateurs');
        $user = $stmt->fetch();
        if ($user) {
            $registeredPassword = $user->getPassword();
            $verifiedUser = password_verify($password, $registeredPassword);
            if ($verifiedUser) {
                session_start(); 
                $_SESSION['utilisateurs'] = [
                    'id' => $user->getIdUti(),
                    'email' => $user->getEmailUti()
                ];
            }
        } else {
            return false;
        }
    }

    public static function calculPoint() 
    {
        // todo : à faire !
        /*
            point cumuler = ajouter la valeurPointCat de l'objet attitrer à chaque emprunt
        */

    }

    // AMELIORATION
    /*
        PENSEZ A UN SYSTEME VIP, OU CERTAIN OBJET (COUTEUX A L ACHAT) SERAIT DISPONIBLE A PARTIR D'UN CERTAIN NOMBRE DE POINT.
    */

}
