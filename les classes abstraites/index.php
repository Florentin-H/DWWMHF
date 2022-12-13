<?php
require "class.lapin.php";
require "class.chasseur.php";



// Création du chasseur
$chasseur = new Chasseur("Paul", "fusil");
$chasseur->seDeplacer();

// Création du lapin
$lapin = new Lapin("blanc", 4);

$lapin->seNourrir();

// Boucle tant que le lapin est en vie
while ($lapin->estEnVie()) {
    // Déplacement du chasseur
    $chasseur->seDeplacer();

    // Le lapin crie de peur
    $lapin->crier();

    // Le chasseur chasse le lapin
    $chasseur->chasser($lapin);

    // Si le lapin est toujours en vie, il fuit
    if ($lapin->estEnVie()) {
        $lapin->fuir();
    }
}

// Si le lapin n'est plus en vie, le programme s'arrête
echo "le pauvre petit lapin blanc est malheureusement mort.";
