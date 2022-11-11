<?php

$nombre =readline("donnez un nombre");
$fact = 1;
echo "la factorielle de $nombre vaut : ";
for($i =1; $i <=$nombre; $i++){
$fact = $fact * $i;
}
echo "\n". $fact

?>