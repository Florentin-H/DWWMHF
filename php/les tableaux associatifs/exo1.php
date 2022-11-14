<?php

$chomage = array("Autriche" =>4.9, "Allemagne" =>9.3 ,
"Danemark" =>4.8 , "Espagne" =>9.4 , "France" =>9.7);

foreach($chomage as $pays => $tauxDeChomage){
    echo $pays ." : ". $tauxDeChomage ."\n" ;
}
?>