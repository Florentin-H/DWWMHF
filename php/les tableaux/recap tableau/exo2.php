<?php
$tabPhrase=[];
$voyelles = ["a","e","i","o","u","y"];
$phrase = readline("entrez une phrase : ");
$tabPhrase = str_split($phrase); // Split ton mot en tableau  

// en gros [$phrase] va faire un tableau d'une entrée avec tout ton mot
// str_split($phrase) va faire un tableau, avec une entrée par lettre (pour te permettre d'itérer sur chaque lettre avec le for) 
$compteVoyelles = 0;

//je parcours le tableau tabPhrase et Voyelles pour compter le nombre de voyelles
//je retourne le nombre de voyelles dans tabPhrase 

    for ($j =0; $j<count($tabPhrase);$j++){ 
        for($i=0;$i<count($voyelles);$i++){
            if($tabPhrase[$j] == $voyelles[$i]){
                $compteVoyelles++;
            }
        }
    }
    
//afficher le nombre de voyelles dans une phrase
echo "Voyelle(s) trouvé(es) : " . $compteVoyelles;
?>