<?php

$valeur= [1,2,3,4,5];

foreach ($valeur as $key => $value) {
    echo $key .": ". $value .  "\n";
    
}
echo "la somme des valeurs du tableau est " . array_sum($valeur);


?>