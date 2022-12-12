<?php

class ParaRectangle extends Rectangle {
    private $hauteur ;

    public function __construct($hauteur,$longueur,$largeur){
        $this -> hauteur = $hauteur;
        $this -> longueur = $longueur;
        $this -> largeur = $largeur;
        }


        public function gethauteur(){return $this->hauteur;}


        public function sethauteur($hauteur){$this->hauteur = $hauteur;return $this;}

        public function Perimetre($peri){
            $phrases = "Le périmetre: ";
            $perimetreParaRectangle = (($peri->getlongueur() + $peri->getlargeur()) *2) * $peri->gethauteur() ;
            $phrases = $phrases . $perimetreParaRectangle;
            return $phrases. "<br/>";
        }

        public function Volume($Volume){
            $phrases = "le Volume: ";
            $VolumeParaRectangle = $Volume->getlongueur() * $Volume->getlargeur() * $Volume->gethauteur();
            $phrases = $phrases . $VolumeParaRectangle;
            return $phrases. "<br/>";
        }

        public function EstCarre($carre){
        }

        public function AfficherParaRectangle($ParaRectangle){
            echo "<b>hauteur: " . $this->hauteur . "<br/>";
            echo $ParaRectangle->Perimetre($ParaRectangle);
            echo $ParaRectangle->Aire($ParaRectangle);
            echo "------------------------------------------------------------". "<br/>";
        }
    }
