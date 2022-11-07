<?php

// $nombre = readline("entrez un nombre entre 10 et 20 : ");
// if ($nombre < 10){
//     echo "écrivez un nombre plus grand \n";
// }
// else if ($nombre >10) {
//     echo "écrivez un nombre plus petit \n ";
// }
$nombre = 0;
while ($nombre <10 or $nombre >20) {
    $nombre = readline("entrez un nombre entre 10 et 20 : ");
    if ($nombre < 10){
        echo "écrivez un nombre plus grand \n " ;
    }
    else if ($nombre >10) {
        echo "écrivez un nombre plus petit \n ";
    }
}
echo "FÉLICITATION TU AS GAGNÉ !!! ";
?>