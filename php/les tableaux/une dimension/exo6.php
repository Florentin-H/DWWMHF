<?php
$valeur = readline("Combien de valeurs voulez vous? ");
$sup = 0;
$tab = [];
for($i=0; $i<$valeur;$i++){
    $note = readline("Quelle note a eu l'élève? : ");
    $tab[$i] = $note;
}

$moyenne = array_sum($tab)/$valeur;
echo "la moyenne de la classe est de " . $moyenne;

for ($i =0; $i < count($tab); $i++){
    if($moyenne<$tab[$i]){
        $sup++;

    }
}
echo "\n le nombre de note supérieur à la moyenne est de " . $sup


?>