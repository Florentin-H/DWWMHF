<?php
require "fonctionsEcf.php";
$FinDeTableaux = true; //permet de faire tourner le prorgamme en boucle grâce à la ligne 7
echo "\ntableau de 10 éléments aléatoire : \n";
$randomTab1 = tableauAleatoire();//fonction qui randomize un tableau
$randomTab2 = tableauAleatoire();
while ($FinDeTableaux == true){
$menu = readline("\n0: quitter \n 
1: trier le tableau en ordre croissant\n
2: trier le tableau en ordre décroissant\n
3: Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2\n
4: inverser le tableau 3\n\n");//menu qui permet d'intérargir avec le switch en dessous pour dire à l'utilisateur quoi faire

switch ($menu){
    case 1:
        echo "Le premier tableau et le deuxième dans l'ordre croissant :  ";
       
        sort($randomTab1); // tris dans l'ordre croissant 
        sort($randomTab2); 

        echo  afficheTab($randomTab1)."\n"; //affiche le tableau trié
        echo  afficheTab($randomTab2)."\n"."\n";
        break;
    case 2:
        echo "Le premier et le deuxième tableau dans l'ordre décroissant :  ";
        rsort($randomTab1);// tris dans l'ordre décroissant 
        rsort($randomTab2);
        echo  afficheTab($randomTab1); //affiche le tableau trié
        echo afficheTab($randomTab2). "\n"; 
         
        break;
    case 3:
        $tab3 = array();
        for ($i = 0; $i < count($randomTab1); $i++) {
            $tab3[$i] = $randomTab1[$i] + $randomTab2[$i]; //additione le tableau 1 et 2 et en crée un 3e
        }
        echo "\n l'addition des deux tableaux précédents : " . afficheTab($tab3);
        break;
    case 4:
        $x=1; 
        for($i =0;$i< count($tab3)/2;$i++){ //le /2 permet de diviser par 2 le nombre d'itération car on inverse la première avec la dernière la deuxième avec l'avant dernière etc.
   
            $temp = $tab3 [$i]; //crée une variable temporaire pour la valeur du 3e tableau
            $tab3[$i] = $tab3[count($tab3)-$x]; //remplace par la valeur opposée
            $tab3[count($tab3)-$x] = $temp;//met la valeur temporaire dans la valeur opposée
            $x++;
        }
        foreach ($tab3 as $value){
            echo $value . "|";//affichage du tableau 3
        }
        break;
    case 0: return; 
}
}
?>