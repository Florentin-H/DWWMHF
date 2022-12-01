<?php ob_start() ?>

<?php
//créer une clase permmettaant de gérer des maisons. la classe est dans un fichier sé^paré de l'autre fichéi, un exo exercice et un fichier maison
//une maison contient un identifiant géré à chaque création, une date de création, nombre de chambre et une surface.
//pour générer l'id on doit utiliser un atribut static contenant l'identifiant du dernier élément crée.

require "class.maison.php";




?>
<table class="table table-hover container ">
    <thead>
        <tr class="table-primary">
            <th scope="col">ID</th>
            <th scope="col">date</th>
            <th scope="col">chambre</th>
            <th scope="col">surface</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tabMaison as $value) { ?>
            <tr class="table-active">
                <th scope="row"><?= $value->getID() ?></th>
                <td><?= $value->getDate() ?></td>
                <td><?= $value->getChambre() ?></td>
                <td><?= $value->getSurface() ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
$titre = "Construction de maison";
require "../home/template.php";
?>