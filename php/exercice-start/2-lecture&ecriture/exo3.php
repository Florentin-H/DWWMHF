<?php 

$combienArticle = readline ("Combien d'item avez vous acheté? ") ;
$prixHt = readline("quel est le prix de votre item? ")  ;
define ('TVA',1.2) ;
$prixTotal = $combienArticle * $prixHt *  TVA;
echo ("Votre article a couté " . $prixTotal . "€");

?>