<?php
require "class.Form.php";
// require "class.Form2.php";
// Création d'un objet Form
$form = new Form(array("sexe", "homme"));

// Ajout de deux zones de texte et d'un bouton d'envoi
// $form->setText("nom", "Votre nom");
// $form->setText("email", "Votre adresse email");
// $form->setSubmit("Envoyer");

// Affichage du code HTML du formulaire
echo $form->getForm();
// foreach ($form->information as $info)
//     echo $info;


// $form2 = new Form2();

// $form2->setRadio("sexe", "homme");
// $form2->setRadio("sexe", "femme");
// $form2->setSubmit("sexe");
// $form2->setCheckBox();
// $form2->setCheckBox();

// echo $form2->getForm();

// $form3 = new Form2("sexe", "homme");
// echo $form3->getForm();
