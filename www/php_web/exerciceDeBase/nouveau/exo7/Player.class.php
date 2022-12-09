<?php 
class Player{
    private $nom;
    private $force;
    private $pv;
    private $idArme;

    public function __construct(){
        $this->force = 5;
        $this->pv = 100;
    }

    public function getNom(){return $this->nom;}
    public function getForce(){return $this->force;}
    public function getPV(){return $this->pv;}
    public function getIdArme(){return $this->idArme;}

    public function setNom($nom){$this->nom = $nom;}
    public function setForce($force){$this->force = $force;}
    public function setPV($pv){$this->pv = $pv;}
    public function setIdArme($idArme){$this->idArme = $idArme;}

    public function __toString(){
        $arme = Arme::recupererArme($this->idArme);
        $txt = "Nom : ". $this->nom . "<br />";
        $txt .= "Force : ". $this->force . "<br />";
        $txt .= "PV : ". $this->pv . "<br />";
        $txt .= "Arme : ". $this->idArme . "<br />";
        $txt .= $arme;
        return $txt;
    }
}