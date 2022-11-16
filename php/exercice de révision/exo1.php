<?php
require "fonction.php";
$nombre = readline("Combien d'euros voulez vous transformer?");

$menu = readline("transformez vos euros en 1: Livre Sterling, 2: Dollars Américain, 3: Dollars Canadien, 4: Yenn, 5:Pesoz, 5:Diram, 6: Roupie");

switch ($menu){
    case 1:
        eurLivre($nombre);
        break;
    case 2:
        eurDollars($nombre);
        break;      
    case 3:
        eurCanada($nombre);
        break;  
    case 4:
        eurYen($nombre);
        break;
    case 5:
        eurPeso($nombre);
        break;      
    case 6:
        eurDiram($nombre);
        break;
    case 7:
        eurRoupie($nombre);
        break;
}


?>