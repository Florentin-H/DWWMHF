<?php

class Nft
{
    private $id;
    private $nom;
    private $proprietaire;
    private $imageNft;



    public function __construct($id, $nom, $proprietaire, $imageNft)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->proprietaire = $proprietaire;
        $this->imageNft = $imageNft;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
    public function getImageNft()
    {
        return $this->imageNft;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }
    public function setImageNft($imageNft)
    {
        $this->imageNft = $imageNft;
        return $this;
    }
}
