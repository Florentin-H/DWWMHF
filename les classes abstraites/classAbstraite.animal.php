<?php
abstract class Animal
{
    // Attributs de la classe
    protected $couleur;
    protected $nombrePattes;

    // Constructeur de la classe
    public function __construct($couleur, $nombrePattes)
    {
        $this->couleur = $couleur;
        $this->nombrePattes = $nombrePattes;
    }

    // Méthodes de la classe
    abstract public function crier();

    // Getters pour les attributs de la classe
    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getNombrePattes()
    {
        return $this->nombrePattes;
    }
}
