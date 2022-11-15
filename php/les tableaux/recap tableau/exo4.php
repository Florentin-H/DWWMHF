<?php
$ligne = 10;
$colonne = 10;
$tab=[];
$max = 0;
$indexL = 0;
$indexC = 0;
$recherche =0;


//crée le tableau aléatoire
for($i=0; $i<$ligne;$i++){
    for($j=0; $j<$colonne;$j++){
        $tab[$i][$j] = rand(20,45);
        echo $tab[$i][$j] . "|" ;

    }
    echo "\n";
    
}
//enregistre quel chiffre est le plus gros + dit si le chiffre 42 est dans le tableau
for($i=0; $i<$ligne;$i++){
    for($j=0; $j<$colonne;$j++){
        if($tab[$i][$j]> $max){
            $max = $tab[$i][$j];
            $indexL = $i+1;
            $indexC = $j+1;
        }
        if ($tab[$i][$j] == 42){ 
            $recherche++;
        }
        

}
}
echo "le maximum est ". $max ."\n". "Il se trouve à la ligne " .$indexL . "et à la colonne ". $indexC . "\n";
if ($recherche>=1){
    echo "42 est dans le tableau";
}
else {
    echo "42 n'est pas dans le tableau";
}



?>