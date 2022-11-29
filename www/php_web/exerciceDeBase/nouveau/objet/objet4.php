<?php ob_start() ?>
<?php

class Animaux
{
    private $nom;
    private $age;
    private $chien;

    public function __construct($nom, $age, $chien)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->chien = $chien;
    }

    //getter
    public function getName()
    {
        return $this->nom;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getChien()
    {

        return $this->chien;
    }

    //setter
    public function setName()
    {
        $this->nom;
    }
    public function setAge()
    {
        $this->age;
    }
    public function setChien()
    {

        $this->chien;
    }
}
$Animaux1 = new Animaux('Lyberty', 5, true);
$Animaux2 = new Animaux('Joy', 3, true);
$Animaux3 = new Animaux('Inna', 10, true);
$Animaux4 = new Animaux('Ondine', 4, false);

$tabAnimaux = [$Animaux1, $Animaux2, $Animaux3, $Animaux4];
if (isset($_GET["all"])) {
    foreach ($tabAnimaux as $value) {
        if ($value->getChien() === true) {
            echo $value->getName() . $value->getAge() . "chien";
        } else {
            echo $value->getName() . $value->getAge() . "chat";
        }
    }
}

if (isset($_GET["cat"])) {
    foreach ($tabAnimaux as $value) {
        if ($value->getChien() === false) {
            echo $value->getName() . $value->getAge() . "chat";
        }
    }
}

if (isset($_GET["dog"])) {
    foreach ($tabAnimaux as $value) {
        if ($value->getChien() === true) {
            echo $value->getName() . $value->getAge() . "chien";
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
$titre = "chien et chat en PRIVATE";
require "../home/template.php";
?>