<?php
require 'partials/header.php';
?>

<form action="" method="post">
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
        <p>Ne jamais les partager avec une autre personne.</p>
    </fieldset>
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
        <legend>Votre adresse</legend>
        <div>
            <label for="num_rue">Le numéro de votre rue</label>
            <input type="number" name="num_rue" id="num_rue">
        </div>
        <div>
            <label for="nom_rue">Le nom de votre rue</label>
            <input type="text" name="nom_rue" id="nom_rue">
        </div>
        <div>
            <label for="code_postal">Votre code postal</label>
            <input type="number" name="code_postal" id="code_postal">
        </div>
        <div>
            <label for="nom_ville">Le nom de votre ville</label>
            <input type="text" name="nom_ville" id="nom_ville">
        </div>
    </fieldset>
    <input type="submit" value="Créer">
</form>


<?php
require 'partials/footer.php';
?>