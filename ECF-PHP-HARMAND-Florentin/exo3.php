<?php
require "fonctionsEcf.php";

$recommence = true;
while ($recommence == true){
    equationSndDegre();
    $utilisateur =readline ("\nVoulez vous continuer? (O/N) : ");
    if ($utilisateur == 'N'){
        $recommence = false;
        echo "Au revoir et à bientôt";
    }   
}

?>