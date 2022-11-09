<?php
    $stop = false;
    $tab = [];
    $i = 0;
    

    while(!$stop){
        //écrire une valeur jusqu'à ce que l'utilisateur dise "stop"
        $saisie = readline("entrez une valeur ou dites 'stop' ");
            if($saisie == "stop"){
                $stop = true;
                break;
            }
            else{
                $tab[$i] = $saisie;
                $i++;
            }
    
    }
    //affiche le tableau 
        echo "le tableau est: \n";
    for($i =0; $i<count($tab); $i++){
        echo $i . " ". $tab[$i] ."\n";


    }

    //dire si le tableau est rangé de manière consécutive

    for ($i=0;$i<=count($tab)-2;$i++){

            if ($tab[$i+1] == $tab[$i]+1){
                echo "le tableau est rangé de manière successive";
                break;

            }
            else{
                echo "le tableau n'est pas rangé de manière successive";
                break;
            }

    }
    
    

?>