<?php

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


?>