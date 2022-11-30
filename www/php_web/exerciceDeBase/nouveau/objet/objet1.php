<?php ob_start() ?>
<?php

class Animaux
{
    public $nom;
    public $age;


    public const CHIEN = true;
    public const CHAT = false;

    public function __construct($nom, $age, $chien)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->chien = $chien;
    }
}
$Animaux1 = new Animaux('Lyberty', 5, Animaux::CHIEN);
$Animaux2 = new Animaux('Joy', 3,  Animaux::CHIEN);
$Animaux3 = new Animaux('Inna', 10, Animaux::CHIEN);
$Animaux4 = new Animaux('Ondine', 4, Animaux::CHAT);

$tabAnimaux = [$Animaux1, $Animaux2, $Animaux3, $Animaux4];
if (isset($_GET["all"])) {
    foreach ($tabAnimaux as $animal) {
        if ($animal->chien == true) {
            echo $animal->nom . " " . $animal->age . "  ans " . "chien";
        } else {
            echo $animal->nom . " " . $animal->age . "  ans " . "chat";
        }
?><p>------------------<br></p>
        <?php }
}
if ((isset($_GET["dog"]))) {
    foreach ($tabAnimaux as $animal) {
        if ($animal->chien == true) {
            echo $animal->nom . " " . $animal->age . "  ans " . "chien";
        ?><p>------------------<br></p>
        <?php
        }
    }
}

if ((isset($_GET["cat"]))) {
    foreach ($tabAnimaux as $animal) {
        if ($animal->chien != true) {
            echo $animal->nom . " " . $animal->age . "  ans " . "chat";
        ?><p>------------------<br></p>
<?php
        }
    }
}

?>
<form action="" method="GET" class="form-group">
    <button type="submit" name="all">Tous les animaux</button>
    <button type="submit" name="dog">Seulement les chiens</button>
    <button type="submit" name="cat">Seulement les chats</button>


</form>

<?php
$content = ob_get_clean();
$titre = "Fonctions et tableaux";
require "../home/template.php";
?>