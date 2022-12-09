<?php

class Arme{
    private static $increment = 1;
    private static $armes = [];

    private $id;
    private $nom;
    private $degat;

    public function __construct($nom,$degat){
        $this->id = self::$increment;
        self::$increment++;
        $this->nom = $nom;
        $this->degat = $degat;
        self::$armes[] = $this;
    }

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getDegat(){return $this->degat;}

    public function setNom($nom){$this->nom = $nom;}
    public function setDegat($degat){$this->degat = $degat;}

    public function __toString(){
        $txt = "ID : ". $this->id . "<br />";
        $txt .= "Nom : ". $this->nom . "<br />";
        $txt .= "Degat : ". $this->degat . "<br />";
        return $txt;
    }

    public static function recupererArme($id){
        foreach(self::$armes as $arme){
            if($id === $arme->id){
                return $arme;
            }
        }
    }
}