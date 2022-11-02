<?php

$heure = readline("Quelle heure est il? ");
$minute = readline("Quelle minute est il? ");
$seconde = readline("combien de secondes? ");
$heure = $heure;
$minute = $minute;
$seconde = $seconde +1;

if ($heure >= 24) {
    $heure = $heure - 24;
}
if ($minute >= 60) {  //si les minutes sont supérieurs ou égales à 60
    $minute = $minute - 60; //faire minute -60
    $heure = $heure + 1; 
}

if ($seconde == 60) {
    $seconde = $seconde - 60;
    $minute = $minute +1;
    
}

echo "dans une heure il sera " . $heure . ":" . $minute . ":" . $seconde ;

?>