

<?php

$tableau = ["gauthier", "nathan", "bastien", "lucas", "thomas", "gautier", "floraeiuentin","edouard"];
$tableauDeVoyelles = ["a","e","i","o","u","y"];
$compteVoyelle =0;
$maxVoyelle =0;
$saveName ="";


for ($i =0; $i<count($tableau);$i++) {
    $nom = $tableau[$i]; // gauthier 
    $letters = str_split($nom); // [g,a,u,t,h,i,e,r]
    for ($j =0; $j <count($letters); $j++){ // [a, b, a, a, e]
        $voyelleTrouvee = false;
        for ($k =0; $k < count($tableauDeVoyelles);$k++) { 
            if($letters[$j] == $tableauDeVoyelles[$k]){ 
                $compteVoyelle++;
                $voyelleTrouvee = true;
            }
        }
        if (!$voyelleTrouvee) {
            if ($compteVoyelle > $maxVoyelle) {
                $maxVoyelle = $compteVoyelle;
                $saveName = $nom;
            }
            $compteVoyelle = 0;
        }
    }
}
echo "le mot avec le plus de voyelles est: " .$saveName . "\n il a ".$maxVoyelle . " voyelles successives" ;
?>
