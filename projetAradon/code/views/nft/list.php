<?php ob_start() ?>



<table class="table text-center">
    <tr class="table">
        <th>Id</th>  
        <th>Image</th>  
        <th>nomNft</th>  
        <th colspan="2">Actions</th>
    </tr>
    <?php
    for ($i = 0; $i < count($nfts); $i++) { ?>
        <tr>
            <td class="align-middle"><a href="<?= URL ?>nfts/read/<?= $nfts[$i]->getId() ?>"><?= $nfts[$i]->getId() ?></td>
            <td class="align-middle"><img src="public/images/nft<?= $nfts[$i]->getImagePath() ?>" width="60px;" alt=""></td>
            <td class="align-middle"><?= $nfts[$i]->getName() ?></td>
            <td class="align-middle"><a href="<?= URL ?>nft/edit/<?= $nfts[$i]->getId() ?>" class="btn btn-warning">Modifier</a></td>
            <td class=" align-middle">
                <form action="<?= URL ?>nft/delete/<?= $nfts[$i]->getId() ?>" onSubmit="return confirm('Voulez vous vraiment supprimer le NFT?');" method="post">
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
            </td>
        </tr>
    <?php } ?>

</table>
<a href="<?= URL ?>nft/add" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Mes NFT";
require "views/template.php";
