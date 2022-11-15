<?php 
 require "fonctions.php";
$menu = readline("Tape 1 pour afficher l'exercice 1 \n
Tape 2 pour afficher l'exercice 2 
\nTape 3 pour afficher l'exercice 3 
\nTape 4 pour afficher l'exercice 4 
\nTape 5 pour afficher l'exercice 5 
\nTape 6 pour afficher l'exercice 6 
\nTape 7 pour afficher l'exercice 7 \n");

 switch ($menu){
    case 1:
        prixTtc();
      
        break;
    
    case 2:
        pgcd();
        break;
    
    case 3:
        ppcm();      
        break;
    
    case 4:
        tableDeMultiplication();
        break;
    
    case 5:
        somme();
        break;
    
    case 6:
        somme();
        break;
    
    case 7:
        pyramide();
        break;
    }
?>