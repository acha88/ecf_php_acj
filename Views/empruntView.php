<?php
//session_start();
require 'partials/header.php';

$objet = EmpruntManager::getEmpruntById($_GET["id"]);
?>
    <h1>Emprunter un objet</h1>
    <form method="post">
      <fieldset>
        <label for="date_debut">La date du début</label>
        <input type="date" name="date_debut" id="date_debut">
        <label for="date_fin">La date de fin</label>
        <input type="date" name="date_fin" id="date_fin">
      </fieldset>
      <fieldset>
        <label for="rendu">Rendu</label>
        <input type="checkbox" name="rendu" id="rendu">
      </fieldset>
      <fieldset>
        <label for="id_obj">Confirmer l'objet</label>
        <select name="id_obj" id="id_obj">
          <?php foreach($affiche as $objet) { ?>
            <option value="<?php echo $objet->getIdObj(); ?>"><?php echo $objet->getNomObj(); ?></option>   
          <?php } ?>
        </select>
    </fieldset>
    <fieldset>
      <label for="id_uti">Vos nom et prénom</label>
        <select name="id_uti" id="id_uti">
          <?php foreach ($utilisateur as $user) { ?> 
            <option value="<?php echo $user->getIdUti(); ?>"><?php echo $user->getNomUti(); ?> <?php echo $user->getPrenomUti(); ?></option>
          <?php } ?>
        </select>
    </fieldset>
      <input type="submit" value="Emprunter">
    </form>

<?php
require 'partials/footer.php';
?>