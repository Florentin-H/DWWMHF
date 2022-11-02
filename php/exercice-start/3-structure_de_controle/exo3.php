<?php

$nombre = readline("choisissez un nombre ");
if ($nombre < 0){
echo "votre nombre est négatif ";
} else if ($nombre>0) { 
    echo "Votre nombre est positif! ";
}
else{
    echo "votre nombre est égal à 0";
}

?>