<?php 
class Chasseur extends Humain implements Deplacement
{
    // Attributs
    
    private $arme;

    // Constructeur
    public function __construct($nom, $arme)
    {
        parent::construct(nom);
        $this->arme = $arme;
    }
    // Getters pour les attributs de la classe
    

    public function getArme() {
        return $this->arme;
    }
    

    public function chasser(Lapin $lapin)
    {
        $touche = rand(1, 6) == 1 or rand(1, 6) == 6;
        if ($touche) {
            echo "{$this->nom} tire et le lapin est mort
        
    }

}