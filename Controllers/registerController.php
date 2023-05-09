<?php

require_once 'Models/Managers/UtilisateurManager.php';

if (isset($_POST) && !empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nuId = UtilisateurManager::insertUtilisateur($email, $password, $nom, $prenom);
    var_dump($nuId);
}


require_once 'Views/registerView.php';
