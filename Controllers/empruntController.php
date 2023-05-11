<?php
require_once 'model/ObjetManager.php';
require_once 'model/EmpruntManager.php';

class EmpruntController {
  
  private $objetManager;
  private $empruntManager;
  
  public function __construct() {
    $this->objetManager = new ObjetManager();
    $this->empruntManager = new EmpruntManager();
  }
  public function verifierAuthentification() {
    // Vérifier si l'utilisateur est connecté
    if (!isset($_SESSION['id_uti'])) {
      // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
      header('Location: index.php?action=login');
      exit;
    }
  }
  
  public function emprunterObjet($idObjet) {
    // Récupérer l'objet à emprunter
    $objet = $this->objetManager->getObjetById($idObjet);
    
    // Vérifier si l'objet est disponible
    if (!$objet['disponibilite_obj']) {
      // Si l'objet n'est pas disponible, afficher un message d'erreur
      print("L'objet \"$objet[nom_obj]\" n'est pas disponible pour le moment.");
    }
    
    // Ajouter un nouvel emprunt
    $this->empruntManager->reservation($idObjet, $_SESSION['id_uti'], date('Y-m-d H:i:s'));
    
    // Mettre à jour l'état de l'objet
    //$this->objetManager->rendu($idObjet, false);
    
    // Afficher un message de succès
    print("Vous avez emprunté l'objet \"$objet[nom]\".");
    
  }
  
}

?>