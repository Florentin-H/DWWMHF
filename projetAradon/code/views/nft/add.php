<?php ob_start() ?>
<!-- enctype permet de récupérer la photo en l'encodant -->

<form method="POST" action="<?= URL ?>nft/add" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nom" class="form-label">nom: </label>
        <input type="text" class="form-control" id="nom" name="nom">
    </div>

    <div class="mb-3">
        <label for="imageNft" class="form-label">Image:</label>
        <input class="form-control" type="file" id="imageNft" name="imageNft">
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
$titre = "Ajout d'un Nft";
require "views/template.php";

