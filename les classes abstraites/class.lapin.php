<?php
require "classAbstraite.animal.php";
class Lapin extends Animal
{
    // Attributs de la classe
    private $enVie;

    // Constructeur de la classe
    public function __construct($couleur, $nombrePattes)
    {
        $this->enVie = true;
        parent::__construct($couleur, $nombrePattes);
    }



    // Méthodes
    public function seNourrir()
    {
        echo "Le lapin se nourrit\n";
    }

    public function crier()
    {
        echo "Le lapin glapit de peur\n";
    }

    public function fuir()
    {
        $this->seDeplacer();
    }
    public function seDeplacer()
    {
        echo "Le lapin s'enfuit sur ses 4 pattes d'un seul bond !\n";
    }

    public function estEnVie()
    {
        return $this->enVie;
    }

    public function mourir()
    {
        $this->enVie = false;
    }
}
