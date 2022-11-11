<?php

$nombre = rand(0,20);
if ($nombre < 7){
    echo("Bonjour");
}
else if ($nombre >7 && $nombre <14){
    echo("Salut");
}
else {
echo ("Hello");
}
echo ($nombre . ("\n"))
?>