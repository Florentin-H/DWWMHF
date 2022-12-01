<?php
class Weapon
{
    private static $idFirst = 1;
    private $identifiant;
    private $nom;
    private $degat;

    public function __construct($nom, $degat)
    {
        $stock = self::$idFirst++;

        $this->identifiant = $stock;
        $this->nom = $nom;
        $this->degat = $degat;
    }

    //getter
    public function getID()
    {
        return $this->identifiant;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getDegat()
    {
        return $this->degat;
    }




    //setter
    public function setID()
    {
        return $this->identifiant;
    }
    public function setNom()
    {
        return $this->nom;
    }
    public function setForce()
    {
        return $this->degat;
    }
}
$arme1 = new Weapon("Ak47", 30);
$arme2 = new Weapon("AWP", 100);
$arme3 = new Weapon("P90", 13);
$arme4 = new Weapon("M4A1-S", 25);
$tabWeapon = [$arme1, $arme2, $arme3, $arme4];
