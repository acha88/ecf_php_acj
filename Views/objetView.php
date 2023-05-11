<?php
require 'partials/header.php';

$objet = ObjetManager::getObjetById($_GET["id"]);
?>

<h1>Détail du produit</h1>
<table>
    <tr class="hidden">
        <td>Id :</td>
        <td><?= $id ?></td>
    </tr>
    <tr>
        <td>Nom :</td>
        <td><?= $objet->getNomObj() ?></td>
    </tr>
    <tr>
        <td>Description :</td>
        <td><?= $objet->getDesciptionObj() ?></td>
    </tr>
    <tr>
        <td>Disponibilité :</td>
        <td><?= $objet->getDisponibiliteObj() ?></td>
    </tr>
    <!--
    <tr>
        <td>Options :</td>
        <td>
            <button><a class="btn-add" href="deleteContact.php?id=/ < ?php echo $contact->getId() ?>">Supprime le produit</a></button>
            <button><a class="btn-add" href="updateContact.php">Mettre à jour le produit</a></button>
        </td>
    </tr>
    -->
</table>



<?php
require 'partials/footer.php';
?>