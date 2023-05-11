<?php
require 'partials/header.php';
?>

<form action="" method="post">
    <div>
        <label for="categorie">Catégorie</label>
        <select name="" id="">
            <option value=""></option>
        </select>
    </div>
    <div>
        <label for="image_obj">Image</label>
        <input type="file" name="image_obj" id="image_obj">
    </div>
    <div>
        <label for="nom_obj">Nom</label>
        <input type="text" id="nom_obj" name="nom_obj">
    </div>
    <div>
        <label for="description_obj">Description</label>
        <textarea name="description_obj" id="description_obj" cols="50" rows="10"></textarea>
    </div>
    <div>
        <label for="disponibilite_obj">Disponibilité</label>
        <input type="checkbox" name="disponibilite_obj" id="disponibilite_obj">
    </div>
    <input type="submit" value="Ajouter">
</form>


<?php
require 'partials/footer.php';
?>