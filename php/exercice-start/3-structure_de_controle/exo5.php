<?php 

$age = readline("quel est l'âge de votre enfant? ");
if ($age >= 12){
    echo "Votre enfant est Cadet";
}
else if ($age >= 10){
    echo "Votre enfant est minime";
}
else if ($age >= 8){
    echo "Votre enfant est pupille";
}
else {
    echo "Votre enfant est poussin";
}

?>