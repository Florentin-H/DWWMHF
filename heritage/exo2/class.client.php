<?php


class Client
{

    protected $nom;
    protected $prenom;
    protected $numeroClient;


    public function __construct($nom, $prenom, $numeroClient)
    {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroClient = $numeroClient;
    }


    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNumeroClient()
    {
        return $this->numeroClient;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setNumeroClient($numeroClient)
    {
        $this->numeroClient = $numeroClient;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function __toString()
    {
        return  "Nom: " . $this->nom . "\n Prénom : " . $this->prenom . "\n" . "numéro Client: " . $this->numeroClient . "\n\n";
    }
}
