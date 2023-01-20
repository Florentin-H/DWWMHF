<?php ob_start() ?>

<?php
$content = ob_get_clean();
$titre = "Liste des utilisateurs";
require "views/template.php";
