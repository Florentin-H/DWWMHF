<?php
class PersonneIF implements IFormatage
{
    private $nom;
    private $dateNaissance;
    private $salaire;

    public function __construct($nom, $dateNaissance, $salaire)
    {
        $this->nom = $this->formatageChaine($nom);
        $this->dateNaissance = $this->formatageDate($dateNaissance);
        $this->salaire = $this->formatageNombre($salaire);
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
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
        return date("D-M-Y", strtotime($date));
    }
}
