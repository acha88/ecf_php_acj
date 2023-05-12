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
        return $results;
    }

    public static function addUtilisateur(String $nom, String $prenom, $datenaissance, String $email, String $password, int $ville, int $idRol)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $pdo = dbconnect();
        $sql = "INSERT INTO utilisateurs (nom_uti, prenom_uti, datenaissance_uti, email_uti, password_uti, id_vil, id_rol) VALUES (:nom, :prenom, :datenaissance, :email, :password, :idVil, :idRol)";
        $stmt = $pdo->prepare($sql);  
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':datenaissance', $datenaissance);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':idVil', $ville);
        $stmt->bindParam(':idRol', $idRol);
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
            $registeredPassword = $user->getPasswordUti();
            $verifiedUser = password_verify($password, $registeredPassword);
            if ($verifiedUser) {
                $_SESSION['id_user'] = [
                    'id' => $user->getIdUti(),
                    //'email' => $user->getEmailUti()
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
