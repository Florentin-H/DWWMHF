<?php

// faire en sorte que l'algo affiche si je tape 3
//1
//22
//333

$nombre = readline("quel nombre voulez vous? ");
for($i=1 ; $i<=$nombre; $i++){
    for($j=0 ; $j<$i; $j++){
        echo $i;
    }
    echo "\n";
}

?>