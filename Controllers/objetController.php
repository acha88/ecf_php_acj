<?php 
function addObjet() {
    require_once 'Models/Managers/CategorieManager.php';
    require_once 'Models/Managers/ObjetManager.php';
    require_once 'Models/Managers/UtilisateurManager.php';

    $cat = CategorieManager::afficheCategorie();
    $utilisateur = UtilisateurManager::afficheUtilisateur();


    var_dump($_SESSION['id_user']);
      
    if(!empty($_FILES)){
        $upload_dir = './uploads';
        if($_FILES['image']['error'] == 0){
            $currentLocation = $_FILES['image_obj']['nom_obj'];
            $nomObj = $_FILES['image_obj']['nom_obj'];
            $uploadLocation = "$upload_dir/$nomObj";
            move_uploaded_file($currentLocation, $uploadLocation);
        }
    }

    if (isset($_POST) && !empty($_POST)) {
        $imageObj = $_POST['image_obj'];
        $nomObj = $_POST['nom_obj'];
        $description = $_POST['description_obj'];
        $disponibilite = $_POST['disponibilite_obj'];
        $categorie = $_POST['nom_cat'];
        $uti = $_POST['id_uti'];
        //$uti2 = $_SESSION['id_user'];
        $nuId = ObjetManager::addObjet($nomObj, $imageObj, $description, $disponibilite, $categorie, $uti);
   
    }
    require_once 'Views/newObjetView.php';
} 

function showObjets() {
    require 'Models/Managers/ObjetManager.php';
    
    $resultat = ObjetManager::afficheObjets();
    require './Views/indexView.php';
}


function showObjet($id) {
    require 'Models/Managers/ObjetManager.php';
    $objet = ObjetManager::getObjetById($id);
    if($objet){
        foreach ($objet as $data) {

            //$id = $data->getIdObj();
            $imageObj = $data->getImageObj();
            $nom = $data->getNomObj();
            $description = $data->getDescriptionObj();
            $disponibilite = $data->getDisponibiliteObj();
        }
        require './Views/objetView.php';
    }
}
    function showInfo($devLog){
        if ($devLog){
            echo '<pre>';
            var_dump($_SESSION);
            echo '</pre>';
        
            echo '<pre>';
            var_dump($_GET);
            echo '</pre>';
        
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        }
    }


