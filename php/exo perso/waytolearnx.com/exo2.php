<?php

$ordi = rand(0, 100);
$propositionJoueur= -1  ;
$tentativeRestante = 5;

for($i = 0; $i < 5; $i++) {
    echo $i;
}

while ($propositionJoueur != $ordi && $tentativeRestante > 0) {
    $propositionJoueur = readline("quel nombre a choisit l'ordinateur? ");
    echo "TENTATIVE(S) RESTANTE(S) : " . --$tentativeRestante ."\n";
    if ($propositionJoueur < $ordi) {
        echo ("ton chiffre est plus petit que le chiffre de l'ordinateur, donnes en un plus grand.\n ");
    }
    if ($propositionJoueur > $ordi) {
        echo ("ton chiffre est plus grand que le chiffre de l'ordinateur, donnes en un plus petit. \n");
    }
    if ($propositionJoueur == $ordi) {
        echo ("ton chiffre est égal à l'ordinateur, Bravo tu as gagné! \n");
    }
}

echo "L'ordinateur avait choisit " . $ordi;