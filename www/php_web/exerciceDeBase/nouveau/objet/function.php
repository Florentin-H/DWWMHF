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
