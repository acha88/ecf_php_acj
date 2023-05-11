<?php
require 'partials/header.php';
?>

<form action="" method="post">
    <fieldset>
        <legend>Votre identité</legend>
        <div>
            <label for="nom">Votre nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="prenom">Votre prénom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label for="datenaissance">Votre date de naissance</label>
            <input type="date" name="datenaissance" id="datenaissance">
        </div>
    </fieldset>
    <fieldset>
        <legend>Vos identifiants</legend>
        <div>
            <label for="email">Votre email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Votre Password</label>
            <input type="password" id="password" name="password" required>
        </div>
    </fieldset>
    <fieldset>
        <legend>Votre adresse</legend>
        <div>
            <label for="nom_ville">Le nom de votre ville</label>
            <input type="text" name="nom_ville" id="nom_ville">
        </div>
    </fieldset>
    <p>Ne jamais partager vos données avec une autre personne.</p>
    <p>Tous les champs sont obligatoire</p>
    <input type="submit" value="Créer">
</form>


<?php
require 'partials/footer.php';
?>