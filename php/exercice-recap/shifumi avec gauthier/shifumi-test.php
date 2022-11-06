<?php

$pointsJoueur = 0;
$pointsOrdinateur = 0;
$jeuPossible = array("pierre", "feuille", "ciseaux");

function computerPlay() {
    //1= pierre
    //2= feuille
    //3= ciseaux

    // $array = array("pierre", "feuille", "ciseaux");

    // return $array[rand(sizeof($array) - 1)];

    switch(rand(1, 3)) {
        case 1: return "pierre";
        case 2: return "feuille";
        case 3: return "ciseaux"; 
    };
}

function hasUserWin($user, $ordinateur) { // RETOURNE TRUE SI LE USER A GAGNE, SINON FALSE
    if ($user == "pierre") {
        return $ordinateur == "ciseaux";
    } else if ($user == "feuille") {
        return $ordinateur == "pierre";
    } else {
        return $ordinateur == "feuille";
    }
}

while (true) {
    $ordinateur = computerPlay();

    $joueur = readline("\n choisissez entre pierre, feuille et ciseaux: ");
    if (!in_array($joueur, $jeuPossible)) {
        echo "Utilisez bien 'pierre' 'feuille' ou 'ciseaux' avec la bonne ortogtraphe \n";
        continue;
    }

    echo "Jeu : (Ordi) " . $ordinateur . " VS " . " (Joueur) ". $joueur .  "\n";

    if ($ordinateur == $joueur) { 
        echo "EGALITE \n"; 
    } else if(hasUserWin($joueur, $ordinateur)) {
        echo "\n Le joueur gagne \n"; 
        $pointsJoueur++;
    } else {
        echo "\n L'ordinateur gagne \n";
        $pointsOrdinateur++;
    }
    
    echo "\n point joueur " .$pointsJoueur . "\n point ordinateur " . $pointsOrdinateur . "\n";
    
    if ($pointsJoueur == 3){
        echo "\n tu as gagné la partie ";
        break;
    } else if ($pointsOrdinateur == 3){
        echo "\n tu as perdu la partie ";
        break;
    }
}
    
?>
    
