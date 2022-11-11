<?php
$ligne = readline("combien de lignes souhaitez vous dans votre tableau? ");
$colonne = readline("combien de colonnes souhaitez vous dans votre tableau? ");
$tab=[];
$max = 0;
$indexL = 0;
$indexC = 0;



for($i=0; $i<$ligne;$i++){
    for($j=0; $j<$colonne;$j++){
        $tab[$i][$j] = rand(0,1000);
        echo $tab[$i][$j] . "|" ;

    }
    echo "\n";
    
}

for($i=0; $i<$ligne;$i++){
    for($j=0; $j<$colonne;$j++){
        if($tab[$i][$j]> $max){
            $max = $tab[$i][$j];
            $indexL = $i+1;
            $indexC = $j+1;
        }

}
}
echo "le maximum est ". $max ."\n". "Il se trouve à la ligne " .$indexL . "et à la colonne ". $indexC ;

?>