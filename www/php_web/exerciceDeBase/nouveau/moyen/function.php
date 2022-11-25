<?php

//créer un Tableau dce chiffre aléatoire
function buildArray($taille)
{
    $array = array();
    for ($i = 0; $i < $taille; $i++) {
        array_push($array, random_int(1, 10));
        echo $array[$i] . "|";
    }
    return $array;
}


function tableauPaire($tab)
//arg:tableau
//
//return :
{
    $estPaire = true;

    for ($i = 0; $i < count($tab); $i++) {
        if ($estPaire) {
            if ($tab[$i] % 2 != 0) {
                $estPaire = false;
            }
        }
    }


    return $estPaire;
    //    $estPaire =
    //     echo "le tableau n'est pas constitué que de valeur paire";
}


function chien($utilisateur, $i)
{
    if ($utilisateur[$i]['chien'] != true) {
        $utilisateur[$i]['chien'] = 'chat';
    } else {
        $utilisateur[$i]['chien'] = 'chien';
    }
}
