<?php 

$nombre1 = readline("entrez un premier nombre");
$nombre2 = readline("entrez un deuxième nombre");
$nba = $nombre1;
$nbb = $nombre2;

while (($nombre1 * $nombre2) !=0){
    if($nombre1 > $nombre2){
        $nombre1 = $nombre1 - $nombre2;
    }
    else{
        $nombre2 = $nombre2 - $nombre1;
    }
}
if ($nombre1 == 0){
    echo ("PPCM est: " . ($nba*$nbb) /$nombre2);
    
}
else {
    echo ("PPCM est : " . ($nba*$nbb)/$nombre1);
}
?>