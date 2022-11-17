<?php
require "fonctionsEcf.php";
$recommence = true;
while ($recommence == true){
    tableDeMultiplication();
    $utilisateur =readline ("\nVeux tu afficher une nouvelle table de multiplication? (O/N) : ");
    if ($utilisateur == 'N'){
        $recommence = false;
        echo "\nAu revoir et à bientôt";
    }   
}




?>