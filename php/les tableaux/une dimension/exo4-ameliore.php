<?php
$valeur1 = [4,8,7,9,1,5,4,6];
$valeur2 = [7,6,5,2,1,3,7,4];
$valeur3 = [];
for($i=0;$i<count($valeur1);$i++){
    $valeur3[$i] = $valeur1[$i] + $valeur2[$i];
    echo $i . "-" . $valeur3[$i] . "    "; 

}

for($i=0;$i<1;$i++){
    echo "\n la troisième valeur du tableau 3 est ".$valeur3[2] . "\n" ;
}
?>