<?php
$tab= [];
$case=1;

for ($i =0; $i<8; $i++){
    for ($j =0; $j<8; $j++){
        $tab[$i][$j] = $case++;
        if($tab[$i][$j]<10){
            echo " ";
        }     
        echo $tab[$i][$j] . "|";
    }
    echo "\n";
}

?>