<?php
class Weapon
{
    private static $idFirst = 1;
    private $id;
    private $nom;
    private $degat;

    public function __construct($nom, $degat)
    {
        $this->id = self::$idFirst++;
        $this->nom = $nom;
        $this->degat = $degat;
    }

    //getter
    public function getId()
    {
        return $this->id;
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
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this; //permet de modifier le $nom en plus de l'id ou du dégat en ajoutant une fleche pour $arme1->setDegat() = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setDegat($degat)
    {
        $this->degat = $degat;
        return $this;
    }
}
$arme1 = new Weapon("Ak47", 30);
$arme2 = new Weapon("AWP", 100);
$arme3 = new Weapon("P90", 13);
$arme4 = new Weapon("M4A1-S", 25);
$weapons = [$arme1, $arme2, $arme3, $arme4];

$arme1->setDegat(50);
