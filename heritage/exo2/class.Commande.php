<?php


class Commande
{

    protected $numeroCommande;
    protected $client;
    protected $listeLigneCommande;


    public function __construct($numeroCommande, $client, $listeLigneCommande)
    {

        $this->numeroCommande = $numeroCommande;
        $this->client = $client;
        $this->listeLigneCommande = $listeLigneCommande;
    }


    public function getNumeroCommande()
    {
        return $this->numeroCommande;
    }
    public function getClient()
    {
        return $this->client;
    }
    public function getListeLigneCommande()
    {
        return $this->listeLigneCommande;
    }


    public function setNumeroCommande($numeroCommande)
    {
        $this->numeroCommande = $numeroCommande;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setClient($client)
    {
        $this->client = $client;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setListeCommande($listeCommande)
    {
        $this->listeCommande = $listeCommande;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }

    public function calculTotalTTC()
    {
    }
}
