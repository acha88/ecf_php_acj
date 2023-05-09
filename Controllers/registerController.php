<?php

require_once 'Models/Managers/UtilisateurManager.php';
require_once 'Models/Managers/AdresseManager.php';
require_once 'Models/Managers/CodePostalManager.php';
require_once 'Models/Managers/VilleManager.php';


if (isset($_POST) && !empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $datenaissance = $_POST['datenaissance'];
    $num_rue = $_POST['num_rue'];
    $nom_rue = $_POST['nom_rue'];
    $code_postal = $_POST['code_postal'];
    $nom_ville = $_POST['nom_ville'];
    $nuId = UtilisateurManager::addUtilisateur($email, $password, $nom, $prenom, $datenaissance);
    $nuId2 = AdresseManager::addAdresse($num_rue, $nom_rue, $code_postal, $nom_ville);
    $nuId3 = CodePostalManager::addCodePostal($code_postal);
    $nuId4 = VilleManager::addVille($nom_ville);
    var_dump($nuId);
}


require_once 'Views/registerView.php';
