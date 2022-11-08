<?php
$total = readline("Combien de valeurs voulez vous entrer? ");
$valeur= [];
$positif = 0;
$negatif = 0;

for($i=0 ; $i <$total; $i++){
    $saisie = readline("note: ");
    $valeur[$i] = $saisie;
    if($saisie > 0){
        $positif++;
    }
    else if ($saisie < 0) {
        $negatif++;
    }
    
}
foreach ($valeur as $key => $value) {
    echo $key+1 .": ". $value .  "\n";
    
}
echo "il y a ". $negatif." nombre négatif " . "\n". "il y a ". $positif ." nombre positif ";




?>