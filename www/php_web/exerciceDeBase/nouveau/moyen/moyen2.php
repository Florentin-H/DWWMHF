<?php ob_start() ?>


<?php
$utilisateur = [
    array(
        'nom' => 'Marie', 'age' => 30, 'homme' => false
    ),
    array(
        'nom' => 'Pierre', 'age' => 32, 'homme' => true
    ),
    array(
        'nom' => 'Howard', 'age' => 30, 'homme' => true
    ),
    array(
        'nom' => 'Josianne', 'age' => 32, 'homme' => false
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
        <p>--------------------------------------</p>
    <?php endfor ?>

</div>





<?php

$content = ob_get_clean();
$titre = "Tableaux de tableaux associatif";
require "../home/template.php";
?>