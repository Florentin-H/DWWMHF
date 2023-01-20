<?php ob_start() ?>



<?php
$content = ob_get_clean();
$titre = "Hot collections";
require "template.php";
