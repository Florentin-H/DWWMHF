<?php
$nombre1= readline("choisissez le premier nombre");
$nombre2= readline("choisissez le deuxième nombre");
$menu = readline("1 = addition; 2 = soustraction; 3 = multiplication; 4 = division ");

switch($menu){
    case 1:
        echo $nombre1+$nombre2;
        break;
    case 2:
        echo $nombre1-$nombre2;
        break;
    case 3:
        echo $nombre1*$nombre2;
        
        break;
    case 4:
        echo $nombre1/$nombre2;
        
        break;
}