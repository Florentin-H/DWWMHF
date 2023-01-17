<?php

class Nft
{
    private $idNft;
    private $nomNft;
    private $proprietaire;
    private $imageNft;



    public function __construct($idNft, $nomNft, $proprietaire, $imageNft)
    {
        $this->idNft = $idNft;
        $this->nomNft = $nomNft;
        $this->proprietaire = $proprietaire;
        $this->imageNft = $imageNft;
    }

    public function getidNft()
    {
        return $this->idNft;
    }
    public function getnomNft()
    {
        return $this->nomNft;
    }
    public function getproprietaire()
    {
        return $this->proprietaire;
    }
    public function getimageNft()
    {
        return $this->imageNft;
    }


    public function setNomNft($nomNft)
    {
        $this->nomNft = $nomNft;
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
