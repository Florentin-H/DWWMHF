<?php

$tableL = 5;
$tableC = 5;
$tab = [];

for ($i = 1 ; $i<=$tableL;$i++){
    for ($j = 1 ; $j<=$tableC;$j++){
    $tab[$i][$j] = $i * $j;
    if($j==1){
        echo str_pad($tab[$i][$j] , 2,"       " );
        }else{
            echo str_pad($tab[$i][$j],4,"       ");
        }
    }
echo "\n";
}


?>