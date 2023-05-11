<?php

function register() {
    require_once 'Models/Managers/UtilisateurManager.php';
    require_once 'Models/Managers/VilleManager.php';


    if (isset($_POST) && !empty($_POST)) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $datenaissance = $_POST['datenaissance'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nomVil = $_POST['nom_ville'];
        $nuId = UtilisateurManager::addUtilisateur($nom, $prenom, $datenaissance, $email, $password);
        $nuId2 = VilleManager::addVille($nuId, $nomVil);
        var_dump($nuId);
    }


    require_once 'Views/registerView.php';
}
