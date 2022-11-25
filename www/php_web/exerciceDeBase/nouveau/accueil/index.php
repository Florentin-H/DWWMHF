<?php ob_start() ?>
<!--  <h1>ici c'est ma page d'accueil </h1>  -->


<?php

$content = ob_get_clean();
$titre = "Mon super site d'exercice";
require "../home/template.php";
?>