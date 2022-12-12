<?php

class Pyramide extends TriangleRectangle {
    private $hauteurpyramide ;

    public function __construct($base,$hauteur,$hauteurpyramide){
        $this -> base = $base;
        $this -> hauteur = $hauteur;
        $this -> hauteurpyramide = $hauteurpyramide;
        }


        public function gethauteurpyramide(){return $this->hauteurpyramide;}


        public function sethauteurpyramide($hauteurpyramide){$this->hauteurpyramide = $hauteurpyramide;return $this;}


        public function Volume($aire){
            $phrases = "le Volume: ";
            $VolumeParapyramide = $this->Aire($aire) * $this->hauteurPyramide /3 ;
            $phrases = $phrases . $VolumeParapyramide;
            return $phrases. "<br/>";
        }

        public function EstCarre($carre){
        }


        public function AfficherParapyramide($Parapyramide){
            echo "<b>hauteurpyramide: " . $this->hauteurpyramide . "<br/>";
            echo $Parapyramide->Perimetre($Parapyramide);
            echo $Parapyramide->Aire($Parapyramide);
            echo "------------------------------------------------------------". "<br/>";
        }
    }
