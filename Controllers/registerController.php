<?php

function register() {
    require_once 'Models/Managers/UtilisateurManager.php';
    require_once 'Models/Managers/VilleManager.php';

    $resultat = VilleManager::afficheVille();

    if (isset($_POST) && !empty($_POST)) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $datenaissance = $_POST['datenaissance'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ville = $_POST['nom_vil'];
        $nuId = UtilisateurManager::addUtilisateur($nom, $prenom, $datenaissance, $email, $password, $ville, 1);
    }


    require_once 'Views/registerView.php';
}
