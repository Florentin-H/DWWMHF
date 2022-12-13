<?php
class VilleIF implements IFormatage
{
    private $codePostal;
    private $ville;


    public function __construct($codePostal, $ville)
    {
        $this->codePostal = $this->formatageChaine($codePostal);
        $this->ville = $this->formatageChaine($ville);
    }
    public function getCodePostal()
    {
        return $this->codePostal;
    }
    public function getVille()
    {
        return $this->ville;
    }


    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
    }


    public function formatageChaine($chaine)
    {
        return strtoupper($chaine);
    }

    public function formatageNombre($nombre)
    {
        return number_format($nombre, 2, ",", " ");
    }

    public function formatageDate($date)
    {
    }
}
