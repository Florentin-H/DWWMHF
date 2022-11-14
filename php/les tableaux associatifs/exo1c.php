<?php
$chomageMin = 100;
$chomage = array("Autriche" =>4.9, "Allemagne" =>9.3 ,
"Danemark" =>4.8 , "Espagne" =>9.4 , "France" =>9.7);

foreach($chomage as $pays => $tauxDeChomage){
    if($tauxDeChomage <$chomageMin){
    $chomageMin = $tauxDeChomage ;
    $paysMin = $pays;

    }
    
}
echo  "le pays avec le plus bas taux de chomage= ".$paysMin." ".$chomageMin;
?>