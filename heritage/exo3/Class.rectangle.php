<?php

class Rectangle {
    protected $longueur ;
    protected $largeur ;


    
    public function __construct($longueur,$largeur){
        $this -> longueur = $longueur;
        $this -> largeur = $largeur;
        }


        public function getLongueur(){return $this->longueur;}
        public function getLargeur(){return $this->largeur;}


        public function setLongueur($longueur){$this->longueur = $longueur;return $this;}
        public function setLargeur($largeur){$this->largeur = $largeur;return $this;}

        public function Perimetre($peri){
            $phrases = "Le périmetre: ";
            $perimetreRectangle = ($peri->getlongueur() + $peri->getLargeur()) * 2 ;
            $phrases = $phrases . $perimetreRectangle;
            return $phrases. "<br/>";
        }

        public function Aire($aire){
            $phrases = "l'Aire: ";
            $AireRectangle = $aire->getlongueur() * $aire->getLargeur();
            $phrases = $phrases . $AireRectangle;
            return $phrases. "<br/>";
        }

        public function EstCarre($carre){
        }

        public function AfficherRectangle($rectangle){
            echo "<b>Longueur: " . $this->longueur . "<br/>";
            echo "<b>Largeur: " . $this->largeur . "<br/>";
            echo $rectangle->Perimetre($rectangle);
            echo $rectangle->Aire($rectangle);
            echo "------------------------------------------------------------". "<br/>";
        }
    }
