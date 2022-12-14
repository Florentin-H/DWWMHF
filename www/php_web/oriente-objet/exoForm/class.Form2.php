<?php
require "class.Form.php";
class Form2 extends Form
{

    // Constructeur qui crée le code d'en-tête du formulaire
    public function __construct()
    {
        $this->form = "<form><fieldset>";
    }

    public function setRadio($name, $value)
    {
        array_push($this->fields, "<input type='radio' name='$name' value=''> $value");
    }
    public function setCheckBox()
    {
        array_push($this->fields, "<input type='checkbox' id='scales' name='name' >");
    }
    public function setSubmit($value)
    {
        $this->submit = "<input type='submit' name='$value' />";
    }

    // public function setRender($form){
    //     $form
    // }

    // Méthode qui retourne tout le code HTML du formulaire
    public function getForm()
    {
        $fields = implode("", $this->fields);
        return $this->form . $fields . $this->submit . "</fieldset></form>";
    }
}
