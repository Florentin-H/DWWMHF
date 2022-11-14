<?php

$tableL = 5;
$tableC = 5;
$tab = [];

for ($i = 1 ; $i<=$tableL;$i++){
    for ($j = 1 ; $j<=$tableC;$j++){
    $tab[$i][$j] = $i * $j;
    echo $tab[$i][$j] . "   " ;
    }
echo "\n";
}


?>