<?php
require_once "class.AbstraitePersonne.php";
class Client extends Personne
{
    private $adresse;

    public function __construct($adresse)
    {
        Personne::__construct($nom, $prenom);
        $this->adresse = $adresse;
    }
}
