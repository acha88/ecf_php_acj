<?php

require_once 'Models/Managers/UtilisateurManager.php';


if (isset($_POST) && !empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = UtilisateurManager::connectUtilisateur($email, $password);
}


require_once 'Views/loginView.php';