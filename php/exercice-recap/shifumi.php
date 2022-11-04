<?php

$joueur = readline("choisissez entre pierre, feuille et ciseau. \n");
$ordinateur = rand(1,3);



if ($ordinateur = 1){
    echo "j'ai choisi pierre";
}
else if ($ordinateur = 2){
    echo "j'ai choisi feuille";
}
else if ($ordinateur = 3){
    echo "j'ai choisi ciseau";
}


?>