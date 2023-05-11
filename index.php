<?php 
require_once './Controllers/loginController.php';
require_once './Controllers/registerController.php';
require_once './Controllers/objetController.php';

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
            case 'add':
                addObjet();
            case 'show':
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    showObjet($id);
                }
            default:
                
                break;
        }
    }
}else {
    showObjets();
}