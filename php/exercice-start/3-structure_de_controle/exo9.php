<?php 

$sexe = readline("De quel sexe êtes vous? (homme ou femme ) ");
$age = readline("Quel âge avez vous? ");
if (($sexe == "homme" && $age > 20) or ($sexe == "femme" && $age >= 18 && $age < 35)) {
    echo " imposable" ;
} 
    else {
        echo " non imposable";
    }




?>