<?php

$pointsJoueur = 0;
$pointsOrdinateur = 0;


$pseudo = readline("Entre ton pseudo pour avoir la chance d'être dans le tableau des vainqueurs! : ");
while ($pointsJoueur != 3 && $pointsOrdinateur != 3){

    $joueur = readline("\n choisissez entre pierre, feuille et ciseaux: ");
    $ordinateur = rand(1, 3);
    //1= pierre
    //2= feuille
    //3= ciseaux
    

    
    if ($joueur != "pierre" && $joueur != "feuille" && $joueur != "ciseaux") {
        echo "Utilisez bien 'pierre' 'feuille' ou 'ciseaux' avec la bonne ortogtraphe \n";
        continue;
    }
    
    if (($ordinateur == 1 )&& ($joueur == "pierre")){
        echo "pierre VS pierre = égalité";
    }
    else if (($ordinateur == 1 )&& ($joueur == "feuille")){
        $pointsJoueur = $pointsJoueur +1;
        echo "pierre VS feuille = feuille gagne \n Bravo tu as gagné";
    }
    else if (($ordinateur == 1) && ($joueur == "ciseaux")){
        $pointsOrdinateur = $pointsOrdinateur + 1;
        echo "pierre VS ciseau = pierre gagne \n Dommage tu as perdu";
    }
    else if (($ordinateur == 2) && ($joueur == "pierre")){
        $pointsOrdinateur = $pointsOrdinateur + 1;
        echo "feuille VS pierre = j'ai choisi feuille tu as perdu";
    }
    else if (($ordinateur == 2)&& ($joueur == "feuille")){
        echo "feuille VS feuille = égalité";
    }
    else if (($ordinateur == 2) && ($joueur == "ciseaux")){
        $pointsJoueur = $pointsJoueur + 1;
        echo "feuille VS pierre = j'ai choisi feuille tu as gagné";
        }
    else if (($ordinateur == 3) && ($joueur == "pierre")){
        $pointsJoueur = $pointsJoueur + 1;
        echo "ciseau VS pierre = j'ai choisi ciseau tu as gagné";
        }
    else if (($ordinateur == 3) && ($joueur == "feuille")){
        $pointsOrdinateur = $pointsOrdinateur + 1;
        echo "ciseau VS pierre = j'ai choisi ciseau tu as perdu";
    }
    else if (($ordinateur == 3) && ($joueur == "ciseaux")){
        echo "ciseau VS pierre = égalité";
    }
    echo "\n point joueur " .$pointsJoueur . "\n point ordinateur " . $pointsOrdinateur . "\n";
    if ($pointsJoueur == 3){
        echo "\n tu as gagné la partie";
        $file ="WinnerBoard.txt";
        $fileopen=(fopen("$file",'a'));
        fwrite($fileopen,"\n$pseudo $pointsJoueur à $pointsOrdinateur ");
        fclose($fileopen) ;
    }
    else if ($pointsOrdinateur == 3){
        echo "\n tu as perdu la partie ";
    }
    // else{
    //     echo "veuillez entrer exactement le terme pierre feuille ou ciseaux";
    // }
    
}
    echo "\n la partie est terminée";
?>
    
