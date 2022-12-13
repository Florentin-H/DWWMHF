<?php
class Form
{
    private $fields = array();
    private $submit = "";

    // Constructeur qui crée le code d'en-tête du formulaire
    public function __construct()
    {
        $this->form = "<form><fieldset>";
    }

    // Méthode pour ajouter une zone de texte
    public function setText($name, $value)
    {
        $this->fields[] = "<input type='text' name='$name' value='$value' />";
    }

    // Méthode pour ajouter un bouton d'envoi
    public function setSubmit($value)
    {
        $this->submit = "<input type='submit' value='$value' />";
    }

    // Méthode qui retourne tout le code HTML du formulaire
    public function getForm()
    {
        $fields = implode("", $this->fields);
        return $this->form . $fields . $this->submit . "</fieldset></form>";
    }
}
