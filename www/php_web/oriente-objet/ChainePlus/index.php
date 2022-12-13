<?php
require_once "class.ChainePlus.php";
$chaine = new ChainePlus("Programmation orientée objet en PHP");

echo "Gras : " . $chaine->gras() . "<br>";
echo "Italique : " . $chaine->italique() . "<br>";
echo "Souligné : " . $chaine->souligne() . "<br>";
echo "Majuscules : " . $chaine->majuscules() . "<br>";
