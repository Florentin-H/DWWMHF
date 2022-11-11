<?php


$nombre  =readline("saisissez un nombre entier: ");
$nbChange = (integer)$nombre;

while ($nbChange != $nombre){
    $nombre  =readline("saisissez un nombre entier: ");
    $nbChange = (integer)$nombre;
}

echo "les 5 nombres précédents sont :\n" ;
for ($compteur =1; $compteur <=5; $compteur++){
    
   echo "\n". $nombre - $compteur;

}
echo "\n \n*********************************";
echo "\nles 5 nombres suivants sont  :\n " ;
for ($compteur =1; $compteur <=5; $compteur++){
    
    echo "\n". $nombre + $compteur ;
}


?>
