<?php

ob_start() ?>

<table class="table text-center">
    <tr class="table-white">
        <th>Image</th>
        <th>titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    for ($i = 0; $i < count($livres); $i++) { ?>
        <tr>
            <td class="align-middle"><img src="public/images/<?= $livres[$i]->getImage() ?>" width="60px;" alt=""></td>
            <td class="align-middle"><a href="<?= URL ?>livres/l/<?= $livres[$i]->getID() ?>"><?= $livres[$i]->getTitre() ?></td>
            <td class="align-middle"><?= $livres[$i]->getNbPages() ?></td>
            <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
            <td class=" align-middle"><a href="" class="btn btn-danger">supprimer</a></td>
            </td>
        </tr>
    <?php } ?>

</table>
<a href="<?= URL ?>livres/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "les livres";
require "template.php";