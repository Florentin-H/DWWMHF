<?php
require "fonctionsEcf.php"; //appel le fichier fonctionEcf.php
$recommence = true; //initialise la variable à true pour qu'elle se fasse en boucle gràce à la ligne suivante tant que l'utilisateur ne mette pas un N
while ($recommence == true){ //foncton qui permet de demander à l'utilisateur si il souhaite recommencer
    circonferenceSurfaceCercle();
    $utilisateur =readline ("\nVeux tu faire un nouveau calcul? (O/N) : ");
    if ($utilisateur == 'N' || 'non' ||'Non'){ //condition du N, si utilisateur met N alors le programme s'arrête
        $recommence = false;//permet de passer la condition à false donc d'arrêter le programme
        echo "\nAu revoir et à bientôt";
    }   
}

?>