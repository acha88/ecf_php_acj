<?php 
require_once './Models/Managers/ObjetManager.php';

function showObjets() {
    $datas = ObjetManager::afficheObjets();
    require './Views/indexView.php';
}

function showObjet($id) {
    $objet = ObjetManager::getObjetById($id);
    if($objet){
        foreach ($objet as $data) {

            $id = $data->getId();
            $imageObj = $data->getImageObj();
            $nom = $data->getNomObj();
            $description = $data->getDescriptionObj();
            $disponibilite = $data->getDisponibiliteObj();
        }
        require './Views/objetView.php';
    }
}

function addObjet() {
    require './Views/newObjetView.php';

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
        $nomObj = $_POST['nom_obj'];
        $description = $_POST['description_obj'];
        $disponibilite = $_POST['disponibilite_obj'];
        $imageObj = $_POST['image_obj'];
        $nuId = ObjetManager::addObjet($nomObj, $description, $imageObj);
    
        header("Location:Views/homeView.php");
    }
    
    
    require_once 'Views/addContactView.php';
}