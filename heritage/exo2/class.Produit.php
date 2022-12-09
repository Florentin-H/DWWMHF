<?php
class Produit
{
    protected $libelle;
    protected $description;
    protected $reference;
    protected $prixUnitaire;

    public function __construct($libelle, $description, $reference, $prixUnitaire)
    {

        $this->libelle = $libelle;
        $this->description = $description;
        $this->reference = $reference;
        $this->prixUnitaire = $prixUnitaire;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getReference()
    {
        return $this->reference;
    }
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setDescription($description)
    {
        $this->description = $description;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }

    public function __toString()
    {
        return  $this->libelle . "\n description du produit: " . $this->description . "\n" . "Référence: " . $this->reference . "\n" . "Prix Unitaire: " . $this->prixUnitaire . "\n\n";
    }
}
