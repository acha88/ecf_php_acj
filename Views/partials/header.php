<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY LOC</title>
    <link rel="stylesheet" href="Style/style.css">
</head>

<body>
    <header>
        <h1>Le service MY LOC</h1>
        <nav>
            <!-- 
            // gestion -> a farire 
            /*if($_SESSION['id_user'] === 'admin') {
                echo "<a href='gestion.php'>GESTIONNAIRE</a>";
            }*/
            -->
            <a href='index.php'>Produit</a>
            <a href="index.php?action=add">Ajouter un produit</a>
            <a href="index.php?action=emprunt">Emprunter</a>
            <?php if ($_SESSION['id_user']) : ?>
                <a href="index.php?action=logout">Deconnexion </a>
            <?php else : ?>
            <a href="index.php?action=login">Se connecter</a>
            <?php endif ?>
        </nav>
    </header>