<?php 

$nombre = readline("entrez un nombre entre 1 et 3 ");

while (filter_var ($nombre, FILTER_VALIDATE_INT) != true){
    echo ($nombre. "ce n'est pas un entier "). "\n";
    $nombre = readline("entrez un nombre entre 1 et 3 ");
}
while ($nombre <1 or $nombre >3) {
    $nombre= readline("entrez un nombre entre 1 et 3 ");
}
echo "bravo";

?>