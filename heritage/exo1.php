<?php
require_once "class.Cadre.php";


$employe1 = new Employe("Jean", "Neymar", "1850389546458", 1500.56, "soudeur");
$employe2 = new Employe("Odile", "Deray", "1919818105889", 1700.47, "magasinière");
$employe3 = new Employe("Simon", "Jeremy", "1756165848947", 1900.14, "assistant médecin");

$employes = [$employe1, $employe2, $employe3,];
foreach ($employes as $employe) {
    echo $employe->__toString();
    echo $employe->effectueSonJob();
}






$cadre1 = new Cadre("Alain", "Deloin", "18402554988666", 2100.23, "chef maintenance", [$employe1->getNom(), $employe2->getNom()]);

echo $cadre1->__toString();
echo $cadre1->manage();
