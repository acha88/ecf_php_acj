<?php  
  function emprunterObjet($id) {
    require_once 'Models/Managers/ObjetManager.php';
    require_once 'Models/Managers/EmpruntManager.php';
    require_once 'Models/Managers/UtilisateurManager.php';


    $objet = ObjetManager::getObjetById($id);
    $affiche = ObjetManager::afficheObjets();
    $utilisateur = UtilisateurManager::afficheUtilisateur();
    
    // Vérifier si l'objet est disponible
    if (isset($_POST) && !empty($_POST)) {
      $datedebut = $_POST['date_debut'];
      $datefin = $_POST['date_fin'];
      $rendu = $_POST['rendu'];
      $id = $_POST['id_obj'];
      $uti = $_POST['id_uti'];
      $nuId = EmpruntManager::reservation($datedebut, $datefin, $rendu, $id, $uti);

    
    }
    require_once 'Views/empruntView.php';
}
