<?php

echo ("Pensez à un personnage : Melle Rose, le professeur Violet, le Colonnel Moutarde, le Révérand Olive et Mme Leblanc.");
echo ("\n true : correspond à oui ; false : correspond à non");
echo ("\n" );

$compteur = 0;
while ($compteur ==0){
$sexe = readline("le personnage est il un homme?  ");

if (($sexe =="true")){
    $compteur++;
    $compteur--;
    $chapeau = readline("Le personnage porte-t-il un chapeau?  ");
    if ($chapeau == "true"){
        echo ("Vous pensez au Professeur Violet ");
        $compteur++;
        

    }  
    else if ($chapeau == "false"){
    $moustache = readline("le personnage porte-t-il une moustache?  ");
    if ($moustache == "true"){
        echo("Vous pensez au Colonnel Moutarde");
        $compteur++;
        }
    }
     if ($chapeau == "false" && $moustache == "false" ){
        echo("Vous pensez au Révérand Olive");
        $compteur++;
        
        }

}
  
else if ($sexe == "false") {
    
    $lunettes = readline("le personnage porte-t-il des lunettes? ");
    
    if ($lunettes == "true"){
        echo ("Vous pensez à Madame Leblanc");
        $compteur++;
    }
    else if ($lunettes == "false") {
        echo ("Vous pensez à Melle Rose");
        $compteur--;
        $compteur++;
        
    }
}
}
    




?>