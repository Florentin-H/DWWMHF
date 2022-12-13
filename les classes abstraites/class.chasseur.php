<?php
require "class.humain.php";
require_once "interface.deplacement.php";
class Chasseur extends Humain implements Deplacement
{
    // Attributs

    private $arme;

    // Constructeur
    public function __construct($nom, $arme)
    {
        parent::__construct($nom);
        $this->arme = $arme;
    }
    // Getters pour les attributs de la classe


    public function getArme()
    {
        return $this->arme;
    }

    public function seDeplacer()
    {
        echo $this->getNom() . " avance avec son " . $this->getArme() . "\n";
    }

    public function chasser(Lapin $lapin)
    {
        $touche = rand(1, 6) == 1 or rand(1, 6) == 6;
        if ($touche == 1 or $touche == 6) {
            echo $this->getnom() . " a tiré et " . $lapin->mourir();
        } else {
            echo $lapin->estEnVie();
        }
    }
}
