<?php 
function prixTtc (){
    $combienArticle = readline ("Combien d'item avez vous acheté? ") ;
$prixHt = readline("quel est le prix de votre item? ")  ;
define ('TVA',1.2) ;
$prixTotal = $combienArticle * $prixHt *  TVA;
echo ("Votre article a couté " . $prixTotal . "€");
return;
}

function pgcd (){
    $nombre1 = readline("entrez un premier nombre de votre choix");
    $nombre2 = readline("entrez un deuxième nombre de votre choix");
    while (($nombre1*$nombre2) != 0){
        if ($nombre1 > $nombre2){
            $nombre1 = $nombre1 - $nombre2;
        }
        else{
            $nombre2 = $nombre2 - $nombre1;
        }
    }
    if ($nombre1 == 0) {
    echo ("PGCD est") . $nombre2;
    }
    else {
        echo ("PGCD est ") . $nombre1;
    }
    return;
}

function ppcm(){
    $nombre1 = readline("entrez un premier nombre");
$nombre2 = readline("entrez un deuxième nombre");
$nba = $nombre1;
$nbb = $nombre2;

while (($nombre1 * $nombre2) !=0){
    if($nombre1 > $nombre2){
        $nombre1 = $nombre1 - $nombre2;
    }
    else{
        $nombre2 = $nombre2 - $nombre1;
    }
}
if ($nombre1 == 0){
    echo ("PPCM est: " . ($nba*$nbb) /$nombre2);
    
}
else {
    echo ("PPCM est : " . ($nba*$nbb)/$nombre1);
}
return;
}

function tableDeMultiplication(){
    $nombre = readline("Quel chiffre voulez vous multiplier de 1 à 10");
$compteur = 0;
while ($compteur <10){
    $compteur = $compteur +1;
    
    
    echo ($nombre * $compteur . "\n");
}
return;
}

function factoriel(){
    
$nombre = readline("Entrez un nombre: ");
$facto = 1;
for ($i = 1; $i <= $nombre; $i++) {
    $facto = $facto * $i;
}
echo 'Le factoriel de ' . $nombre . ' vaut: ' . $facto;
return;
}

function somme(){
    $table= [1,2,3,4,5,6,7,8,9];
echo"La somme est:". array_sum($table)."\n";
return;
}

function pyramide(){
    $i = 1;
$reverse = false;
while($i > 0) {
    for ($j= 0; $j < $i; $j++) {
        echo "*";
    }
    echo "\n";

    if ($i == 8) {
        $reverse = true;
    }

    if ($reverse) {
        $i--;
    } else {
        $i++;
    }
}
}


?>