<?php

$prix= [5,50,23,11];
$quantite= [10,1,4,3];

$tab3 =[];

for($i=0 ; $i <count($prix); $i++){
    $tab3[$i] = $prix[$i] * $quantite[$i];
    echo $i ." ". $tab3[$i] ."\n";

}
$total = array_sum($tab3);
    echo "total" . $total;




?>