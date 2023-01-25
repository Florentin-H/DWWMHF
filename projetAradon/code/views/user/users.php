<?php ob_start() ?>
<?php 
foreach ($users as $user) {
   ?> 
    <div class="text-white d-flex flex-column">
    <?= $user['pseudo'];
    
} ?>
</div>



<?php
$content = ob_get_clean();
$titre = "Liste des utilisateurs";
require "views/template.php";
