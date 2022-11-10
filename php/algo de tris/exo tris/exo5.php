<?php
    $stop = false;
    $tab = [];
    $dictionnaire = 0;
    $i = 0;

    //saisir les mots dans le tableau
    $tab = [];
    while(!$stop){
        //écrire une valeur jusqu'à ce que l'utilisateur dise "stop"
        $saisie = readline("entrez une valeur ou dites 'stop' ");
            if($saisie == "stop"){
                $stop = true;
                // break;
            }
            else{
                $tab[$i] = $saisie;
                $i++;
                
            }
            //vérifie si le tableau a un doublon
            for ($i=0;$i < count($tab);$i++){
                for($index = $i; $index < count($tab)-1;$index++){
                    if ($tab[$i] == $tab[$index+1]){
                        $dictionnaire++;
                        
                    }
                    
                }             

            }
    }
    //affiche le tableau
    echo "le tableau est: \n";
    for($i =0; $i<count($tab); $i++){
        echo $i . " ". $tab[$i] ."\n";

    }        
    if($dictionnaire>=2){
         echo "le tableau compte au moins un doublon";
    }   
    else{
        echo "pas de doublon dans le tableau";
    }
        //vérifie si le mot est dans le tableau
        // for ($i=0;$i < count($tab);$i++){
        //     if ($saisie === $tab[$i]){
        //         // $dictionnaire++;
        //         echo " le mot est en doublon";
        //         echo $tab[$i];
        //     }
        

        // }
        // if($dictionnaire>= 2){
        //     // echo " le mot est en doublon";
        //     // echo
        // }
        // else{
        //     echo " le mot n'est pas en doublon";
        // }



?>