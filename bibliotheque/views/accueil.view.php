<?php ob_start() ?>

page d'accueil

<?php
$content = ob_get_clean();
$titre = "le contenu de la page d'accueil";
require "template.php";
