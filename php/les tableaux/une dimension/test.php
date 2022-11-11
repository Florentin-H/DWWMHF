<?php
$total =0;
$notes= [];
for($i=0 ; $i <5; $i++){
    $saisie = readline("note: ");
    $notes[$i] = $saisie;
    $total = $total + $saisie;
}
foreach ($notes as $key => $value) {
    echo $key .": ". $value .  "\n";
    
}
echo "$i"

?>