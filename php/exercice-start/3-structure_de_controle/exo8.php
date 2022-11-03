<?php

$photocopies = readline("combien de photocopies voulez vous? ");
if ($photocopies > 30) {
    echo "la facture est de " . (0.1*10+0.09*20+0.08*($photocopies-30));
}
    else if ($photocopies>10 && $photocopies <=30){
        echo "la facture est de " . (0.1*10+0.09*($photocopies-10));
    }
        else {
            echo "la facture est de " . (0.1*$photocopies);
        }

?>