<?php

function affichePrenomEtEnregistreNotes($tabStagiaire)
{
    foreach ($tabStagiaire as $value) {
        echo $value->getnom();
        $tabNotes = $value->getNotes();
    }
    return $tabNotes;
}
function calculMoyenne($tab, $moyenne)
{
    $moyenne = array_sum($tab) / count($tab);

    return $moyenne;
}


function genereID()
{
    $index = 0;
    for ($i = 0; $i < 10; $i++) {
        $index++;
    }
}
