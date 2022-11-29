<?php ob_start() ?>

<?php

class Voiture
{
    private $marque;
    private $modele;
    private $couleur;
    private $portiere;
    private $electrique;

    public function __construct($marque, $modele, $couleur, $portiere, $electrique)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->portiere = $portiere;
        $this->electrique = $electrique;
    }
    //getter
    public function getMarque()
    {
        return $this->marque;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function getCouleur()
    {

        return $this->couleur;
    }
    public function getPortiere()
    {

        return $this->portiere;
    }
    public function getElectrique()
    {

        return $this->electrique;
    }

    //setter
    public function setMarque()
    {
        return $this->marque;
    }
    public function setModele()
    {
        return $this->modele;
    }
    public function setCouleur()
    {

        return $this->couleur;
    }
    public function setPortiere()
    {

        return $this->portiere;
    }
    public function setElectrique()
    {

        return $this->electrique;
    }
}
$voiture1 = new Voiture("Citroen", "Xsara-Picasso", "grise", "5", false);
$voiture2 = new Voiture("Citroen", "C4-Picasso", "grise", "5", false);
$voiture3 = new Voiture("Peugeot", "206", "grise", "5", false);
$voiture4 = new Voiture("Peugeot", "207", "grise", "5", false);
$voiture5 = new Voiture("Lamborghini", "huracan-STO", "bleue", "2", false);
$voiture6 = new Voiture("Tesla", "Model 5", "Noir", "5", true);

$tabVoiture = [$voiture1, $voiture2, $voiture3, $voiture4, $voiture5, $voiture6];

if (isset($_POST["afficheVoiture"])) {
    foreach ($tabVoiture as $value) {
        if ($value->getElectrique() === true) {
            echo $value->getMarque() . $value->getModele() . $value->getCouleur() . $value->getPortiere() . "porte" . "voiture électrique";
        } else {
            echo $value->getMarque() . $value->getModele() . $value->getCouleur() . $value->getPortiere() . "porte" . "voiture thermique";
        }
?><p>----------------------- <br></p>

<?php
    }
}


if (isset($_POST['submit'])) {
    foreach ($tabVoiture as $value)
        if ($_POST['afficheMarque'] === $value->getMarque()) {
            if ($value->getElectrique() === true) {
                echo $value->getMarque() . $value->getModele() . $value->getCouleur() . $value->getPortiere() . "porte" . "voiture électrique";
            } else {
                echo $value->getMarque() . $value->getModele() . $value->getCouleur() . $value->getPortiere() . "porte" . "voiture thermique";
            }
        }
}
?>

<form action="" method="POST">

    <div class="btn-group-vertical">
        <button type="submit" class="btn btn-primary" name="afficheVoiture">Affiche les voitures</button>
    </div>



</form>

<form class="container p-5" action="" method="POST">
    <div class="container">
        <label for="name">entrez le nom d'une marque pour voir les modèles</label>

        <input type="text" id="name" name="afficheMarque" required>
        <input type="submit" name="submit">
    </div>
</form>

<?php
$content = ob_get_clean();
$titre = "VOITURE";
require "../home/template.php";
?>