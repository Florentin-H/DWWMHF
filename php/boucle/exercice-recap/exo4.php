<?php
$compteur = 0;

while ($compteur ==0 ){
$nombre = readline("donnez un nombre pair et divisible par trois ");

    




if ($nombre %2 == 0 && $nombre %3 == 0 ){
    echo ("votre nombre est pair et divisible par trois " )  ;
    $compteur++;
    
}
else if ($nombre %2 != 0 && $nombre %3 != 0){
    echo ("votre nombre est ni pair ni divisble par trois \n");
}
    else if ($nombre %2 != 0 ){
        
        echo ("votre nombre n'est pas pair \n ");
        
        
    }
        else if ($nombre %3 != 0) {
            echo ("votre nombre n'est pas divisible par trois \n ");
        }
    
    }    

?>