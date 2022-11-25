<?php ob_start() ?>
<!--  <h1>ici c'est ma page d'accueil </h1>  -->
<form action="facile1.php" method="POST" class="form-group">
    <label for="name">Nombre à trouver au carré</label>
    <input type="number" name="nb" class="form-control">
    <button type="submit" name="btn">Calcul le carré</button>

    <?php
    $resultat = null;
    $nb = null;

    if (isset($_POST["btn"])) {
        $nb = $_POST["nb"];
        $resultat = $nb * $nb;
    }
    ?>

    <p>Résultat: <span> <?= $nb ?> </span> x <span> <?= $nb ?> </span> = <?= $resultat ?> </p>
</form>


<?php

$content = ob_get_clean();
$titre = "Mon exo au carré";
require "../home/template.php";
?>