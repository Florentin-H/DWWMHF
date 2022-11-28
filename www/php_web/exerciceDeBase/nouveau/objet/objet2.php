<?php ob_start() ?>
<?php

class Ville
{
    public $nom;
    public $departement;

    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }
    public function afficheVille()
    {
        echo "la ville de " . $this->nom . " dans le département du " . $this->departement;
    }
}

$ville1 = new Ville("Dunkerque", 59);
$ville2 = new Ville("Tourcoing", 59);
$ville3 = new Ville("Rexpoede", 59);
$ville4 = new Ville("Bergues", 59);
$ville5 = new Ville("Guemps", 62);
$ville6 = new Ville("Calais", 62);
$tabVille = [$ville1, $ville2, $ville3, $ville4, $ville5, $ville6];
for ($i = 1; $i < count($tabVille); $i++) {
    $tabVille[$i]->afficheVille(); ?>
    <br><?php
    }

        ?>

<?php
$content = ob_get_clean();
$titre = "Ville et département";
require "../home/template.php";
?>