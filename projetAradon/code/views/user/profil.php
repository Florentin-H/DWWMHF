<?php ob_start() ?>

Pseudo : <?= $_SESSION['currentUser']->getPseudo(); ?>


<?php
$content = ob_get_clean();
$titre = "Mon profil";
require "views/template.php";
