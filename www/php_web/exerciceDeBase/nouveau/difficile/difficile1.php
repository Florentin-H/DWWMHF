<?php ob_start();
?>

<?php


$nombre1 = 0;
$nombre2 = 0;

$input = 0;

$nombre1 = $_GET['nombre1'];
$nombre2 = $_GET['nombre2'];

if (isset($_GET['additionner'])) {
    $total = $nombre1 + $nombre2;
} else if (isset($_GET['reset'])) {
    $total = 0;
} else if (isset($_GET["soustraction"])) {
    $total = $nombre1 - $nombre2;
} else if (isset($_GET["division"])) {
    $total = $nombre1 / $nombre2;
} else if (isset($_GET["multiplication"])) {
    $total = $nombre2 * $nombre1;
}






?>

<div class="container">

    <form action="" method="GET" class="form-group">
        <input type="number" name="nombre1">
        <input type="number" name="nombre2">
        <button type="submit" name="additionner">Additionner</button>
        <button type="submit" name="soustraction">Soustraire</button>
        <button type="submit" name="division">Diviser</button>
        <button type="submit" name="multiplication">multiplier</button>

        <button type="submit" name="reset">reset</button>

    </form>


    <p>Total: <?= $total ?></p>


</div>


<?php
$content = ob_get_clean();
$titre = "Calculatrice";
require "../home/template.php";
?>