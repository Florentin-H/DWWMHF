<?php
class Humain implements Deplacement
{
    // Attributs de la classe
    private $nom;

    // Constructeur de la classe
    public function __construct($nom)
    {
        $this->nom = $nom;
    }



    // Getter pour l'attribut de la classe
    public function getNom()
    {
        return $this->nom;
    }
}
