<?php


class Commande
{
    private static $idFirst = 1;
    protected   $numeroCommande;
    protected Client $client;
    protected array  $listeLigneCommande;


    public function __construct($client, $listeLigneCommande)
    {

        $this->numeroCommande = self::$idFirst++;
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
    public function setListeCommande($listeLigneCommande)
    {
        $this->listeLigneCommande = $listeLigneCommande;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }

    public function calculTotalTTC()
    {
        $total = 0;
        foreach ($this->listeLigneCommande as $ligneCommande) {
            $total += $ligneCommande->calculTotalLigneTTC();
        }
        return $total;
    }
}
