<?php ob_start();

$titre = "Exo 5 : Le carré d'un nombre"; 
?>

<form action="" method="POST">
    <div class="form-group">
        <label>Entrez un nombre</label>
        <input type="number" name="nombre" class="form-control">
    </div>

    <input type="submit" class="btn btn-primary" name="calculer" value="Calculer">
</form>


<?php
    $carre = "";
    if(isset($_POST['calculer'])){
        $carre = $_POST["nombre"] * $_POST["nombre"];
    }

    echo "<div>";
        echo $carre;
    echo "</div>";

?>





<?php
$content = ob_get_clean();
require "../../global/common/template.php";

?>