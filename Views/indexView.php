<?php 
require 'partials/header.php';
?>
<section class="_article">
    <?php foreach($resultat as $objet){ ?>
            <article class="card">
                <a href="index.php?action=show&id=<?= $objet->getIdObj()?>">
                    <img src="./uploads/<?=$objet->getImageObj()?>" alt="<?= $objet->getNomObj() ?>">
                    <h2><?= $objet->getNomObj()?></h2>
                    <p><?= $objet->getDesciptionObj() ?></p>
                    <p><?= $objet->getDisponibiliteObj() ?></p>
                </a>
            </article>
    <?php } ?>
</section>
<?php
require 'partials/footer.php';
?>