<?php
require "fonction.php";

$menu = readline("l'exercice 2 se fait avec une boucle while (1) ou Do While (2)");
switch ($menu){  
    case 1:
        nombreAleatoire();
        break;
    case 2:
        nombreAleatoireDoWhile();
        break;
    }
?>