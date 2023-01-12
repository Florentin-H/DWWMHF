<?php

class JoueursPro
{
    private $id;
    private $nom;
    private $prenom;
    private $pseudo;
    private $gains;
    private $description;

    public function __construct($id, $nom, $prenom, $pseudo, $gains, $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pseudo = $pseudo;
        $this->gains = $gains;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function getGains()
    {
        return $this->gains;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
        return $this;
    }
    public function setGains($gains)
    {
        $this->gains = $gains;
        return $this;
    }
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
