<?php
require_once "class.Employe.php";
class Cadre extends Employe
{
    private $listeEmploye;

    public function __construct($nom, $prenom, $numSecu, $salaire, $job, $listeEmploye)
    {
        $this->id = self::$idFirst++;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numSecu = $numSecu;
        $this->salaire = $salaire;
        $this->job = $job;
        $this->listeEmploye = $listeEmploye;
    }

    public function getListeEmploye()
    {
        return $this->listeEmploye;
    }

    public function setListeEmploye($listeEmploye)
    {
        $this->listeEmploye = $listeEmploye;
        return $this; //permet de modifier le $nom en plus du prénom ou d'un autre paramètre en ajoutant une fleche pour  = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }

    function __toString()
    {
        return  $this->nom . "<br/>" . $this->prenom . "<br/>" . "Numéro de sécu: " . $this->numSecu . "<br/>" . "Salaire: " . $this->salaire . "<br/>" . "Job: " . $this->job . "<br/>";
    }

    function manage()
    {
        $phrase = "Le manager manage: ";
        foreach ($this->getListeEmploye() as $employe) {
            $phrase = $phrase . $employe->getNom() . ", ";
        }
        return $phrase;
    }
    function augmenteUnSalaire($pourcentage, $employe)
    {
        $phraseDebut = "le nouveau salaire de l'employé  " . $employe->getNom() . " est de ";
        $salaireAugmente = $employe->getSalaire() * $pourcentage + $employe->getSalaire();
        $phraseFin = "<br>";
        return $phraseDebut . $salaireAugmente . $phraseFin;
    }
}
