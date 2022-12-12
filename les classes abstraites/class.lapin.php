<?php

class Lapin extends Animal
{
    // Attributs de la classe
    private $enVie;

    // Constructeur de la classe
    public function __construct($couleur, $enVie)
    {
        parent::__construct($couleur, 4);
        $this->enVie = $enVie;
    }



    // Méthodes
    public function nourrir()
    {
        echo "{$this->nom} se nourrit\n";
    }

    public function crier()
    {
        echo "{$this->nom} glapit de peur\n";
    }

    public function fuir()
    {
        echo "{$this->nom} s'enfuit sur ses 4 pattes d'un seul bond !\n";
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
