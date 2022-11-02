<?php

$heure = readline("Quelle heure est il? ");
$minute = readline("Quelle minute est il? ");
$seconde = readline("combien de secondes? ");

$seconde = $seconde + 1;

if ($seconde >=60){
    $seconde - 60;
    $minute +1;
}

if ($minute >=60){
    $heure = $heure + 1;
    $minute = $minute - 60;
    
}

if ($heure >= 24){
    $heure = $heure - 24;
}



echo "dans une heure il sera " . $heure . ":" . $minute . ":" . $seconde ;

?>