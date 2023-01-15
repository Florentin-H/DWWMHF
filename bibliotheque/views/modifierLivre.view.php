<?php
ob_start();
?>

<form method="POST" action="<?= URL ?>livres/mv" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre: </label>
        <input type="text" class="form-control" id="titre" name="titre" value="<?= $livre->getTitre() ?>">
    </div>
    <div class="form-group">
        <label for="nbPages">Nombre de pages: </label>
        <input type="text" class="form-control" id="nbPages" name="nbPages" value="<?= $livre->getNbPages() ?>">
    </div>
    <h3>Images: </h3>
    <img src="<?= URL ?>public/images/<?= $livre->getImage() ?>" alt="">
    <div class="form-group">
        <label for="images">Changer l'image: </label>
        <input type="file" class="form-control" id="image" name="images">
    </div>
    <input type="hidden" name="identifiant" value="<?= $livre->getId() ?>">
    <button type="submit" class="btn btn-primary">Valider</button>

</form>

<?php
$content = ob_get_clean();
$titre = "Modification d'un livre";
require "template.php";
