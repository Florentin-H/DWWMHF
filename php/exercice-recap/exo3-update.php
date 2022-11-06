<?php

echo ("Pensez à un personnage : Melle Rose, le professeur Violet, le Colonnel Moutarde, le Révérand Olive et Mme Leblanc.");
echo ("\n true : correspond à oui ; false : correspond à non");
echo ("\n");

$finDeJeu = false;
$reponseCorrecteSexe = false;
$reponseCorrecteChappeau = false;
$reponseCorrecteMoustache = false;
$reponseCorrecteLunette = false;


$var = false;
if (!$var) { // rentre si $var = true
    $var = true;
}

if ($var) { // rentre si $var = false
    $var = false;
}


while (!$finDeJeu) {
    while (!$reponseCorrecteSexe ) {
        $sexe = readline("le personnage est il un homme?  ");

        if ($sexe == "true") {
            $reponseCorrecteSexe = true;
            while (!$reponseCorrecteChappeau) {
                $chapeau = readline("Le personnage porte-t-il un chapeau?  ");
                if ($chapeau == "true") {
                    $reponseCorrecteChappeau = true;
                    echo ("Vous pensez au Professeur Violet ");
                    $finDeJeu = true;
                } else if ($chapeau == "false") {
                    $reponseCorrecteChappeau = true;
                }
            }
            while (!$finDeJeu && !$reponseCorrecteMoustache) {
                $moustache = readline("le personnage porte-t-il une moustache?  ");
                if ($moustache == "true") {
                    $reponseCorrecteMoustache = true;
                    echo ("Vous pensez au Colonnel Moutarde");
                    $finDeJeu = true;
                }

                if ($moustache == "false") {
                    $reponseCorrecteMoustache = true;
                    echo ("Vous pensez au Révérand Olive");
                    $finDeJeu = true;
                }
            }
        } else if ($sexe == "false") {
            $reponseCorrecteSexe = true;
            $lunettes = readline("le personnage porte-t-il des lunettes? ");
            while (!$reponseCorrecteLunette ) {
                if ($lunettes == "true") {
                    $reponseCorrecteLunette = true;
                    echo ("Vous pensez à Madame Leblanc");
                    $finDeJeu = true;
                } else if ($lunettes == "false") {
                    $reponseCorrecteLunette = true;
                    echo ("Vous pensez à Melle Rose");
                    $finDeJeu = true;
                }
            }
        }
    }
}
