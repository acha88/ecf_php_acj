<?php
require 'partials/header.php';
?>

<form action="" method="post">
    <div>
        <label for="email">Votre email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>
    <input type="submit" value="Se connecter">
</form>

<div>
    <p>Pas de compte ? Créer-en un : <a class="btn-add" href="index.php?action=register">ici</a></p>
</div>

<?php
require 'partials/footer.php';
?>