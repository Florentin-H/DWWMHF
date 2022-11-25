<?php ob_start();
require "function.php" ?>


<div class="tableauDentier container">
    <h2>Le tableau généré</h2>
    <?php $array = buildArray(3);
    $taille = count($array);
    ?>
</div>

<div class="laMoyenneDuTableau container">
    <h2>La moyenne du tableau</h2>
    <?php $moyenne = array_sum($array) / $taille;
    echo "la moyenne est de $moyenne";


    ?>


</div>

<div class="leTableauPair container">
    <h2>Le tableau est il pair?</h2>
    <?php
    if (tableauPaire($array)) {
        echo "pair";
    } else {
        echo "non pair";
    }
    ?>


</div>



<?php

$content = ob_get_clean();
$titre = "Fonctions et tableaux";
require "../home/template.php";
?>