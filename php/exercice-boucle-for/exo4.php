<?php
$saisie = readline("choisissez un premier nombre :");
$max = $saisie;
$min = $saisie;

for($i=1; $i<5;$i++ ){
    $saisie=readline("saissez un nomre: ");
    if ($max < $saisie){
        $max = $saisie;
    }
    else if ($min > $saisie){
        $min = $saisie;
    }
}
echo $min;
echo "\n". $max;



?>