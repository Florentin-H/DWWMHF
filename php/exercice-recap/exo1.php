<?php

$nombre = rand(1,20);
if ($nombre >=1 &&  $nombre <= 5){
    echo "le nombre est compris entre 1 et 5 ";
}
else if ($nombre >=6 && $nombre <= 10){
    echo "le nombre est compris entre 6 et 10 ";
}
else if ($nombre >=11 && $nombre <= 15){
    echo "le nombre est compris entre 11 et 15 ";
}
else if ($nombre >=16 && $nombre <= 20){
    echo "le nombre est compris entre 16 et 20 ";
}
echo("\n" . $nombre);


?>