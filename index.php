<?php 
require_once './Controllers/loginController.php';
require_once './Controllers/logoutController.php';
require_once './Controllers/registerController.php';
require_once './Controllers/objetController.php';
require_once './Controllers/empruntController.php';
session_start();

showInfo(false);

if(isset($_GET) && !empty($_GET)){
    if(isset($_GET['action']) && !empty($_GET['action'])){
        $action = $_GET['action'];
        switch($action){
            case 'register':
                register();
                break;
            case 'login':
                login();
                break;
            case 'logout':
                logout();
                break;
            case 'add':
                addObjet();
            case 'show':
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    showObjet($id);
                }
            case 'emprunt':
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    emprunterObjet($idObjet);
                }
            default:
                
                break;
        }
    }
}else {
    showObjets();
}