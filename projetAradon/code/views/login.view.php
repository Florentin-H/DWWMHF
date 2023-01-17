<?php ob_start() ?>



<?php
$content = ob_get_clean();
$titre = "Se connecter";
require "templateDisconnected.php";
