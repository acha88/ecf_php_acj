<?php 
require 'partials/header.php';
?>

<?php foreach($datas as $objet){ ?>
    <a href="index.php?action=show&id=<?= $objet->getId()?>">
        <article>
            <img src="./uploads/<?=$objet->getImageObj()?>" alt="<?= $objet->getNomObj() ?>">
            <h2><?= $objet->getNomObj()?></h2>
            <p><?= $objet->getDesciptionObj() ?></p>
            <p><?= $objet->getDisponibiliteObj() ?></p>
        </article>
    </a>
<?php } ?>

<?php
require 'partials/footer.php';
?>