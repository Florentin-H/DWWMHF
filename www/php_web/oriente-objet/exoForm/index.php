<?php
// Création d'un objet Form
$form = new Form();

// Ajout de deux zones de texte et d'un bouton d'envoi
$form->setText("nom", "Votre nom");
$form->setText("email", "Votre adresse email");
$form->setSubmit("Envoyer");

// Affichage du code HTML du formulaire
echo $form->getForm();
