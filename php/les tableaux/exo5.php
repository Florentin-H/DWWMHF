<?php
$valeur = readline("Combien de valeurs voulez vous? ");
$max=1;
$index= 0;
$tab = [];
for($i=0; $i<$valeur;$i++){
    $nombre = readline("choisissez un nombre: ");
    $tab[$i] = $nombre;
    
if ($max< $nombre){
    $max = $nombre;
    $index = $i;
}

}
echo "\n" . $index . $max;


?>