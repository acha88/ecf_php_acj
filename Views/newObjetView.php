<?php
session_start();
require 'partials/header.php';
?>

<form action="" method="post">
    <fieldset>
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
    </fieldset>
    <fieldset>
        <div>
            <label for="nom_cat">Catégorie</label>
                <select name="nom_cat" id="nom_cat">
                    <?php foreach ($cat as $categorie) { ?>
                        <option value="<?php echo $categorie->getIdCat(); ?>"><?php echo $categorie->getNomCat(); ?></option>
                    <?php } ?>
                </select>
        </div>
        <div>
            <label for="id_uti">Vos nom et prénom</label>
                <select name="id_uti" id="id_uti">
                    <?php foreach ($utilisateur as $user) { ?> 
                        <option value="<?php echo $user->getIdUti(); ?>"><?php echo $user->getNomUti(); ?> <?php echo $user->getPrenomUti(); ?></option>
                    <?php } ?>
                </select>
        </div>
    </fieldset>
    <input type="submit" value="Ajouter">
</form>


<?php
require 'partials/footer.php';
?>