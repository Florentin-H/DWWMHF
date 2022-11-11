<?php
$lettre = ["A","B","C","D","E","F","G","H"];
$tab= [];
$case = 8;

for ($i =0; $i<8; $i++){ // $i=0
    for ($j =0; $j<8; $j++){ //j = 0,1,2,3,4,5,6,7
        $tab[$i][$j]=$lettre[$j];
        echo $tab[$i][$j]. $case ."|";
    }
    $case--; 
    
    echo "\n";
}




?>