<?php

function eurLivre($nombre){
    $resultat =$nombre * 0.8759;
    echo $resultat;
    return;
}

function eurDollars($nombre){
    $resultat= $nombre * 1.04;
    echo $resultat;
    return;
}

function eurCanada($nombre){
    $resultat= $nombre * 0.73;
    echo $resultat;
    return;
}

function eurYen($nombre){
    $resultat=  $nombre * 144.927536232;
    echo $resultat;
    return;
}

function eurPeso($nombre){
    $resultat =$nombre * 1.5;
    echo $resultat;
    return;
}

function eurDiram($nombre){
    $resultat =$nombre * 11.1111111111;
    echo $resultat;
    return;
}

function eurRoupie($nombre){
    $resultat = $nombre * 83.3333333333;
    echo $resultat;
    return;
}



function nombreAleatoire(){
    $compteur = 0;
    $nombreDeDepart = rand(100,1000);
    $nombreRandom =0;
    while ($nombreRandom != $nombreDeDepart){
        $nombreRandom = rand (100,1000);
        $compteur++;
        // echo $nombreRandom . "\n";
    }
    echo "le nombre de départ était ".$nombreDeDepart . " il a été généré en ". $compteur . " tentatives" ;
}

function nombreAleatoireDoWhile(){
    $compteur = 0;
    $nombreDeDepart = rand(100,1000);
    $nombreRandom =0;
    do{
        $nombreRandom = rand (100,1000);
        $compteur++;
        // echo $nombreRandom . "\n";
    }while ($nombreRandom != $nombreDeDepart);
    
    echo "le nombre de départ était ".$nombreDeDepart . " il a été généré en ". $compteur . " tentatives" ;
}

function majusculeInitiale(){
    
    $phrase =ucwords(readline("entrez une phrase "));
    echo $phrase;

}

function comparaisonNombre(){
    $nombre1 = readline("écrivez un nombre ");
    $nombre2 = readline("écrivez un deuxième nombre ");
    if ($nombre1<$nombre2){
        echo $nombre1 . " est plus petit que ". $nombre2;
    }
    if ($nombre1==$nombre2){
        echo $nombre1 . " est égal à ". $nombre2;
    }
    if ($nombre1>$nombre2){
        echo $nombre1 . " est plus grand que ". $nombre2;
    }
}




?>

