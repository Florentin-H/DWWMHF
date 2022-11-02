<?php 

$nombre1 = readline("choisissez un premier nombre! ");
$nombre2 = readline("choisissez un deuxième nombre! ");

if (($nombre1 < 0 && $nombre2 < 0 ) or ($nombre1 > 0 && $nombre2 > 0)) {
echo "le produit est positif";
}
else {
    echo "le produit est négatif";
}

?>