<?php ob_start() ?>



<?php
$content = ob_get_clean();
$titre = "Mon profil";
require "views/templateDisconnected.php";
