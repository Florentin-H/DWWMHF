<?php

$classe = array("Boucher" =>16, "bourdette" =>13, "Howard"=>20, "Ryan" =>0, "Sam" => 19);
$i=0;
foreach ($classe as $nom => $note){
    echo $nom ." a eu ". $note ."/20 \n";
    $i++;
    $moyenne = array_sum($classe)/$i;
}
echo "la moyenne de classe est de : ". $moyenne;


?>