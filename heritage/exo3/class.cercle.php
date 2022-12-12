<?php

class Cercle {
    protected $diametre ;


    
    public function __construct($diametre){
        $this -> diametre = $diametre;
        }


        public function getdiametre(){return $this->diametre;}


        public function setdiametre($diametre){$this->diametre = $diametre;return $this;}

        public function Perimetre($peri){
            $phrases = "Le périmetre: ";
            $perimetreCercle = 2 * pi() * ($peri->getdiametre()/2) ;
            $phrases = $phrases . $perimetreCercle;
            return $phrases. "<br/>";
        }

        public function Aire($aire){
            $phrases = "l'Aire: ";
            $AireCercle = pi() * ($aire->getdiametre()/2) * ($aire->getdiametre()/2);
            $phrases = $phrases . $AireCercle;
            return $phrases. "<br/>";
        }

        public function EstCarre($carre){
        }

        public function AfficherCercle($Cercle){
            echo "<b>diametre: " . $this->diametre . "<br/>";
            echo $Cercle->Perimetre($Cercle);
            echo $Cercle->Aire($Cercle);
            echo "------------------------------------------------------------". "<br/>";
        }
    }
