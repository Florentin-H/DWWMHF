<?php

require "class.client.php";
require "class.Commande.php";
require_once "class.Produit.php";
require "class.LigneCommande.php";



$client1 = new Client("Harvrai", "Florentin", "12101517");

$produit1 = new Produit("ceinture", "petite ceinture pour accompagner un pantalon et ne plus jamais le laisser tomber", "12151718", 15);
$produit2 = new Produit("chaussette", "petite ceinture pour accompagner un pantalon et ne plus jamais le laisser tomber", "12151718", 15);
$produit3 = new Produit("peinture", "petite ceinture pour accompagner un pantalon et ne plus jamais le laisser tomber", "12151718", 15);
$produit4 = new Produit("pull", "r un pantalon et ne plus jamais le laisser tomber", "12151718", 15);
$produit5 = new Produit("T-shirt", "petite pour accompagner un pantalon et ne plus jamais le laisser tomber", "12151718", 15);
$produit6 = new Produit("Tomate", "petite pour alus jamais le laisser tomber", "12151718", 15);
$produit7 = new Produit("Figue", "ppantalon et ne plus jamais le laisser tomber", "12151718", 15);
$produit8 = new Produit("Chocolat", "petite pour accompagner un pantalon et  le laisser tomber", "12151718", 15);
$produit9 = new Produit("ceinture", "petite pour accompagner un pantalon et ne plus jamais le laisser tomber", "12151718", 15);
$produit10 = new Produit("ceinture", "petite ceinture pour accompagner un pantalon et ne plus jamais le laisser tomber", "12151718", 15);
$produits = [$produit1, $produit2, $produit3, $produit4, $produit5, $produit6, $produit7, $produit8, $produit9, $produit10];

$ligneCommandes = [];
$prixLignes = [];



for ($i = 0; $i < count($produits); $i++) {
    echo $produits[$i];
    $qte = readline("quantité ?");
    $nbChange = (int)$qte;

    while ($nbChange != $qte) {
        $qte  = readline("Saisissez une quantité de produit: ");
        $nbChange = (int)$qte;
    }

    $ligneCommandes[$i] = new LigneCommande($produits[$i], $qte);
}

echo $client1 . "\n";
foreach ($ligneCommandes as $key => $ligneCommande) {
    $ligneCommandes[$key]->affichage();
    echo $ligneCommandes[$key]->calculTotalLigneTTC() . "\n\n";
}
$commande = new Commande($client1, $ligneCommandes);
echo "Total de la commande pour " . $commande->getClient()->getNom() . ": " . $commande->calculTotalTTC();
