<?php ob_start(); 
$titre = "Exo 1 : Variables : ";
?>

<h1>Coucou</h1>

<?php
$titre = "Site d'exercice à deux balles";
$content = ob_get_clean();
require "../common/template.php";
?>