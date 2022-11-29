<?php ob_start() ?>

<?php

class Stagiaire
{
    private $nom;
    private $notes;

    public function __construct(string $nom, array $notes)
    {
        $this->nom = $nom;
        $this->notes = $notes;
    }
    //getter
    public function getNom()
    {
        return $this->nom;
    }
    public function getNotes()
    {
        return $this->notes;
    }


    //setter
    public function setNom()
    {
        return $this->nom;
    }
    public function setNotes()
    {
        return $this->notes;
    }
}
$stagiaire1 = new Stagiaire("dede", [0, 5, 7, 8, 9]);
$stagiaire2 = new Stagiaire("owen", [10, 15, 17, 18, 19]);

require "function.php";

$tabStagiaire = [$stagiaire1, $stagiaire2];
foreach ($tabStagiaire as $value) {
    echo $value->getnom();
    $tabNotes = $value->getNotes();
    foreach ($tabNotes as $note) {
        echo $note;

        $moyenne = array_sum($tabNotes) / count($tabNotes);
    }
    echo  "la moyenne de l'élève est de " . " " . $moyenne; ?> <br>

    <?php
    echo min($tabNotes);
    echo max($tabNotes);
    ?>

<?php
}



?>





<?php
$content = ob_get_clean();
$titre = "notes élèves objet";
require "../home/template.php";
?>