<!DOCTYPE html>
<html>
  <head>
    <title>Emprunter un objet</title>
  </head>
  <body>
    <h1>Emprunter un objet</h1>
    <p>Voulez-vous vraiment emprunter l'objet "<?php echo $objet['nom_obj']; ?>" ?</p>
    <form method="post" action="index.php?action=emprunterObjet&idObjet=<?php echo $objet['id_obj']; ?>">
      <input type="submit" value="Emprunter">
    </form>
  </body>
</html>