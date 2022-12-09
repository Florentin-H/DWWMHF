<?php

class Employe
{
    protected static $idFirst = 1;
    protected $id;
    protected $nom;
    protected $prenom;
    protected $numSecu;
    protected $salaire;
    protected $job;

    public function __construct($nom, $prenom, $numSecu, $salaire, $job)
    {
        $this->id = self::$idFirst++;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numSecu = $numSecu;
        $this->salaire = $salaire;
        $this->job = $job;
    }

    //getter
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
    public function getnumSecu()
    {
        return $this->numSecu;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function getJob()
    {
        return $this->job;
    }





    //setter
    //setter
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this; //permet de modifier le $nom en plus de l'id ou du dégat en ajoutant une fleche pour $arme1->setDegat() = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setNumSecu($numSecu)
    {
        $this->numSecu = $numSecu;
        return $this;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
        return $this;
    }
    public function setJob($job)
    {
        $this->job = $job;
        return $this;
    }

    function __toString()
    {
        return  $this->nom . "<br/>" . $this->prenom . "<br/>" . "Numéro de sécu: " . $this->numSecu . "<br/>" . "Salaire: " . $this->salaire . "<br/>" . "Job: " . $this->job . "<br/>";
    }

    function effectueSonJob()
    {

        if ($this->job == "soudeur") {
            echo "Mon métier est soudeur, je soude pas seulement des barres de fers";
        }
        if ($this->job == "assistant médecin") {
            echo "Mon métier est assistant médecin, je soigne même vos grands mères";
        }
        if ($this->job == "magasinière") {
            echo "Mon métier est magasinière, je mets les livres dans les journaux ";
        }
        if ($this->job == "voiturier") {
            echo "Mon métier est voiturier, je répare vos voitures ";
        }
        echo "<br/>--------------<br/>";
    }
}
