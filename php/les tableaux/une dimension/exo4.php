<?php
// TABLEAU 1//
$tab1= [1,2,3,4,5];
$tab2= [1,2,3,4,5];

$tab3 =[];



// for($i=0 ; $i <count($tab1); $i++){
//     $tab3 = $tab1[$i] + $tab2[$i];
//     echo " ".$i ."-" . $tab3 . "  ";
// }

foreach ($tab1 as $key => $value){
    $tab3 = $tab1[$key] + $tab2[$key];
    echo " ".$key ."-" . $tab3 . "  ";
}

?>