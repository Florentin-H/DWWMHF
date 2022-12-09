<?php

class LigneCommande
{

    protected Produit $produit;
    protected $qte;


    public function __construct($produit, $qte)
    {

        $this->produit = $produit;
        $this->qte = $qte;
    }


    public function getProduit()
    {
        return $this->produit;
    }
    public function getQte()
    {
        return $this->qte;
    }


    public function setProduit($produit)
    {
        $this->produit = $produit;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setQte($qte)
    {
        $this->qte = $qte;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }

    public function affichage()
    {
        echo "Nom du produit: " . $this->produit->getLibelle() .  ", quantité : $this->qte. Prix total : ";
    }

    public function calculTotalLigneTTC()
    {
        return $this->qte * $this->produit->getPrixUnitaire();
    }
}
