<?php
$verifNom = false;

$classe = array(
    "Boucher" =>array(16,12,5,8),
    "bourdette" =>array(13,5,8,2),
    "Howard"=>array(20,19,18,20),
    "Ryan" =>array(0,1,0,2),
    "Sam" =>array(19,15,18,20));
$i=0;
while (!$verifNom) {
    $choix = readline("entrez un nom pour obtenir ses notes et sa moyenne ou dites 'stop' pour arrêter: ");
        foreach ($classe as $nom => $value){
            if($choix == $nom){
                foreach($value as $notes){
                echo $nom ." a eu ". $notes ."/20 \n";
                
                $moyenne = array_sum($value)/count($value);
                }
                echo "la moyenne de ".$nom . " est de : ". $moyenne ."/20 \n";
                $verifNom;
            }
            else if ($choix == "stop"){
                $verifNom=true;
            }
            }
        }
?>