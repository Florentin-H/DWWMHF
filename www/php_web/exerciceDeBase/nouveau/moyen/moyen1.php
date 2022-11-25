<?php ob_start() ?>
<?php
$utilisateur = [
    array(
        'nom' => 'marie', 'age' => 30, 'homme' => false
    ),
    array(
        'nom' => 'Pierre', 'age' => 32, 'homme' => true
    )

];
?>
<div class="utilisateurs container border border-light">

    <?php for ($i = 0; $i < count($utilisateur); $i++) :
        if ($utilisateur[$i]['homme'] == false) :

    ?><p>Nom: <?= $utilisateur[$i]['nom'] ?><br> Age : <?= $utilisateur[$i]['age'] ?><br> Sexe: femme</p>
        <?php endif ?>
        <?php if ($utilisateur[$i]['homme'] == true) :

        ?><p>Nom: <?= $utilisateur[$i]['nom'] ?><br> Age: <?= $utilisateur[$i]['age'] ?><br> Sexe: homme</p>
        <?php endif ?>
    <?php endfor ?>

</div>


<?php

$content = ob_get_clean();
$titre = "Tableau associatif";
require "../home/template.php";
?>