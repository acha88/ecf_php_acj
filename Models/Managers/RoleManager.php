<?php

require_once 'connect.php';
require_once './Models/Entity/Roles.php';

class RoleManager
{

    public static function afficheRole()
    {
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM public.roles";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Roles'); 
        return $results;
    }
   

    public static function addRole(String $libelleRol)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO public.roles (libelle_rol) VALUES (:libelleRol)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':libelleRol', $libelleRol);
        $stmt->execute();
        $newContact = $pdo->lastInsertId();
        return $newContact;
    }
    public static function deleteRole($id)
    {
        $pdo = dbconnect();
        $sql = "DELETE FROM public.roles WHERE id_rol= :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez supprimer ' . $count . 'role(s).');
    }
    public static function updateRole(String $libelleRol)
    {
        $pdo = dbconnect();
        $sql = "UPDATE public.roles SET libelle_rol= :libelleRol WHERE libelle_rol=:libelleRol";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':libelleRol', $libelleRol);
        $stmt->execute();
        $count = $stmt->rowCount();
        print('Vous avez mis à jour ' . $count . 'ville(s).');
    }
}
