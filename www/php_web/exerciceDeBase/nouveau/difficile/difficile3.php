<?php ob_start();
?>

<?php
if (isset($_POST['chiffre'])) {
}
?>

<form class="container col w-25 p-2 " action="" method="POST">

    <div class="container col ">
        <button type="button" name="chiffre" value="7">7</button>
        <button type="button" name="chiffre" value="8">8</button>
        <button type="button" name="chiffre" value="9">9</button>
        <button type="button" name="addition" value="+">+</button>
    </div>

    <div class="container col ">
        <button type="button" name="chiffre" value="4">4</button>
        <button type="button" name="chiffre" value="5">5</button>
        <button type="button" name="chiffre" value="6">6</button>
        <button type="button" name="soustraction" value="-">-</button>
    </div>

    <div class="container col ">
        <button type="button" name="chiffre" value="1">1</button>
        <button type="button" name="chiffre" value="2">2</button>
        <button type="button" name="chiffre" value="3">3</button>
        <button type="button" name="multiplication" value="*">*</button>
        <button type="button" name="division" value="/">/</button>
    </div>

    <div class="container col ">
        <button type="button" name="chiffre" value="0">0</button>
        <button type="submit" name="resultat">Résultat</button>
    </div>

</form>

<div class="calcul container">
    <p>Calcul :<?php if (isset($_POST['chiffre']));
                echo $_POST['chiffre'] ?></p>
</div>






<?php


$content = ob_get_clean();
$titre = "calculatrice d'homme";
require "../home/template.php";
?>