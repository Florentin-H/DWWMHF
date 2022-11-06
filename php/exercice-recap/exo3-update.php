<?php

echo ("Pensez à un personnage : Melle Rose, le professeur Violet, le Colonnel Moutarde, le Révérand Olive et Mme Leblanc.");
echo ("\n true : correspond à oui ; false : correspond à non");
echo ("\n" );

$finDeJeu = 0;
$reponseCorrecteSexe = 0;
$reponseCorrecteChappeau = 0;
$reponseCorrecteMoustache = 0;
$reponseCorrecteLunette = 0;

while ($finDeJeu !=1){
    while($reponseCorrecteSexe != 1){
        $sexe = readline("le personnage est il un homme?  ");

        if (($sexe =="true")){
            $reponseCorrecteSexe++;
            while($reponseCorrecteChappeau != 1){
            $chapeau = readline("Le personnage porte-t-il un chapeau?  ");

            if ($chapeau == "true"){
                $reponseCorrecteChappeau++;
                echo ("Vous pensez au Professeur Violet ");
                $finDeJeu++;
                
            }  

            else if ($chapeau == "false"){
                $reponseCorrecteChappeau++;
                }
            $moustache = readline("le personnage porte-t-il une moustache?  ");
            if ($moustache == "true"){
                $reponseCorrecteMoustache++;
                echo("Vous pensez au Colonnel Moutarde");
                $finDeJeu++;
                }
            }
            if ($chapeau == "false" && $moustache == "false" ){
                echo("Vous pensez au Révérand Olive");
                $finDeJeu++;
                
                }
        }

        else if ($sexe == "false") {
            $reponseCorrecteSexe++; 
            $lunettes = readline("le personnage porte-t-il des lunettes? ");
            
            if ($lunettes == "true"){
                $reponseCorrecteLunette++;
                echo ("Vous pensez à Madame Leblanc");
                $finDeJeu++;
            }
            else if ($lunettes == "false") {
                $reponseCorrecteLunette++;
                echo ("Vous pensez à Melle Rose");
                $finDeJeu++;
                
            }
        }
    }
}
