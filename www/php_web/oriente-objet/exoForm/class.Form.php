<?php
class Form
{
    protected $submit;
    protected array $information;


    // Constructeur qui crée le code d'en-tête du formulaire
    public function __construct($information)
    {
        $this->form = "<form><fieldset>";

        $this->information = $information;
        $this->name = $this->information[0];
        $this->value = $this->information[1];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getInformations()
    {
        return array_push($this->information, "<input type='text' name='$this->name' value='$this->value' />");
    }

    //constructor tu fais appelles à une fonction, elle met à jour des éléments privés, (nom, prénom, adresse; tu mets valeur par défaut et grace à init tu peux modifier la valeur par défaut directement avec la fonction.)
    // public function init()
    // {
    //     array_push($this->information, $this->name);
    //     array_push($this->information, $this->value);
    // }
    public function setText()
    {
        return "<input type='text' name='$this->name' value='$this->value' />";
    }

    // Méthode pour ajouter un bouton d'envoi
    public function setSubmit($this->)
    {
        return  "<input type='submit' value='$value' />";
    }

    // Méthode qui retourne tout le code HTML du formulaire
    public function getForm()
    {
        $informations = implode("", $this->information);
        return $this->form . $this->setText() . $this->setSubmit($this->name) . "</fieldset></form>";
    }
}
