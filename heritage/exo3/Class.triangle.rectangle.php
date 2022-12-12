<?php

class TriangleRectangle {
    protected $base ;
    protected $hauteur ;


    
    public function __construct($base,$hauteur){
        $this -> base = $base;
        $this -> hauteur = $hauteur;
        }


        public function getbase(){return $this->base;}
        public function gethauteur(){return $this->hauteur;}


        public function setbase($base){$this->base = $base;return $this;}
        public function sethauteur($hauteur){$this->hauteur = $hauteur;return $this;}

        public function Perimetre($peri){
            $phrases = "Le périmetre: ";
            $AC = hypot($peri->getbase() , $peri->gethauteur());
            $perimetreTriangleRectangle = $peri->getbase() + $peri->gethauteur() + $AC ;
            $phrases = $phrases . $perimetreTriangleRectangle;
            return $phrases. "<br/>";
        }

        public function Aire($aire){
            $phrases = "l'Aire: ";
            $AireTriangleRectangle = ($aire->getbase() * $aire->gethauteur()) /2;
            $phrases = $phrases . $AireTriangleRectangle;
            return $phrases. "<br/>";
        }

        public function EstCarre($carre){
        }

        public function AfficherTriangleRectangle($TriangleRectangle){
            echo "<b>base: " . $this->base . "<br/>";
            echo "<b>hauteur: " . $this->hauteur . "<br/>";
            echo $TriangleRectangle->Perimetre($TriangleRectangle);
            echo $TriangleRectangle->Aire($TriangleRectangle);
            echo "------------------------------------------------------------". "<br/>";
        }
    }
