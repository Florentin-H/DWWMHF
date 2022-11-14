<?php

$classe = array(
    "Boucher" =>array(16,12,5,8) ,
    "bourdette" =>array(13,5,8,2),
    "Howard"=>array(20,19,18,20),
    "Ryan" =>array(0,1,0,2),
    "Sam" =>array(19,15,18,20));
$i=0;
foreach ($classe as $nom => $value){
    foreach($value as $notes){
    echo $nom ." a eu ". $notes ."/20 \n";
    $i++;
    $moyenne = array_sum($value)/$i;
    }
}
echo "la moyenne de classe est de : ". $moyenne;


?>