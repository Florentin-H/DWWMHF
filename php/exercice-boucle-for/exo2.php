<?php


$nombre  =(int)readline("saisissez un nombre entier: ");

echo "les 5 nombres précédents sont :\n" ;
for ($compteur =0; $compteur <=5; $compteur++){
    
   echo "\n". $nombre - $compteur;

}
echo "\n \n*********************************";
echo "\nles 5 nombres suivants sont  :\n " ;
for ($compteur =0; $compteur <=5; $compteur++){
    
    echo "\n". $nombre + $compteur ;
}


?>
