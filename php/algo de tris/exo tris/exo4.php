<?php
$tab = ["Paris","Dunkerque","Lille","Dong"];
$dictionnaire = 0;
$search = readline("Cherchez un mot dans le dictionnaire ");
    for ($i=0;$i < count($tab);$i++){
        if ($search != $tab[$i]){   
        }
        else {
            $dictionnaire++;
        }
    }
    if($dictionnaire> 0){
        echo "le mot est dans le dictionnaire";
    }
    else{
        echo "le mot n'est pas dans le dictionnaire";
    }
?>