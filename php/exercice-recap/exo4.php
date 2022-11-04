<?php

$nombre = readline("donnez un nombre pair et divisible par trois ");

if ($nombre %2 == 0 && $nombre %3 == 0 ){
    echo ("votre nombre est pair et divisible par trois" );
}
else if ($nombre %2 != 0 && $nombre %3 != 0){
    echo ("votre nombre est ni pair ni divisble par trois ");
}
    else if ($nombre %2 != 0 ){
        echo ("votre nombre n'est pas pair ");
    }
        else if ($nombre %3 != 0) {
            echo ("votre nombre n'est pas divisible par trois ");
        }
    
    

?>