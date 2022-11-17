<?php
    //exo 1
    function circonferenceSurfaceCercle(){
        echo"    *********************\n     CALCUL SUR LE CERCLE \n    *********************";
        $rayon = readline("\nQuel est le rayon du cercle? : "); //on demande à l'utilisateur d'entrer le rayon du cercle
        $circonference = 2*pi()* $rayon; //on calcule la circonférence du cercle grâce à la formule et le $rayon demandé précédemment à l'utilisateur
        $surface = pi()*$rayon**2; // même procédé pour la surface ($rayon**2 =  rayon au carré)
        echo "\nLa circonférence du cercle est ".round($circonference, 2) ."\n la surface du cercle est " . round($surface, 2) . "\n"; //on affiche les résultats
    }

    //exo 2
    function tableDeMultiplication(){
        $nombre = readline("entrez un nombre dont vous souhaitez la table de multiplication : ");//on demande à l'utilisateur d'entrer le nombre dont on souhaite obtenir la table de multiplication
        for ($i = 1 ; $i<=10; $i++){//boucle qui va de 1 à 10
            $resultat = $nombre * $i; //calcul nécessaire à effectuer pour faire une multiplication
            echo ("\n".$nombre .  ' * ' . $i .' = '. $resultat."");//affichage du résultat
        }
    }

    //exo 3

    function equationSndDegre(){
        echo "Racine de l'équation du 2nd degré
        Y=ax²+bx+c\n";
        $nombreA=readline("Entrez la valeur de a : ");//on demande la valeur A
        $nombreB=readline("Entrez la valeur de b : ");//on demande la valeur B
        $nombreC=readline("Entrez la valeur de c : ");//on demande la valeur C
        $delta = ($nombreB**2) -(4*$nombreA*$nombreC);//on calcule le delta avec la formule
        if ($delta < 0){//condition si delta est plus petit que 0 faire:
        echo "\nÉtant inférieur à zéro l'équation ne possède pas de racine réelle". "\nDelta = ". $delta; //résultat attendu quand delta est <0
        }
        else if ($delta == 0){//condition si delta est égal à 0 faire:
            $racine = -(($nombreB)/(2*$nombreA));
            echo "l'équation possède une racine double : \n". "Delta = ". $delta. "\n". "X1 = X2 =". $racine; //résultat attendu quand delta est =0
        }
        else{//condition si delta est plus grand que 0 (plus exactement tous les autres cas mais celà revient à dire la même chose) faire:
            $racine1 =(-$nombreB + sqrt($delta))/(2*$nombreA) ; //sqrt est la fonction qui désigne la racine carrée
            $racine2 =(-$nombreB - sqrt($delta))/(2*$nombreA) ;
            echo "\nl'équation possède deux racines distinctes : 
            Delta = ". $delta. "\n". 
            "l'équation s'annule pour : \n". 
            "X1 = ". $racine1 . "\n".
            "X2 = ".$racine2;//résultat attendu quand delta est >0


        }

    }

    //exo 4
    function tableauPeriodique(){
        $tableau = array(
            "H" =>array("Hydrogène"),
            "He" =>array("Hélium"),
            "P"=>array("Phosphore"),
            "V" =>array("Vanadium"),
            "Pb" =>array("Plomb"),
            "I" =>array("Iode"),
            "Kr" =>array("Krypton"),
            "X" =>array("Xénon"),
            "Rn" =>array("Radon"),
            "Zr" =>array("Zirconium"));

        echo "\n********Tableau périodique des éléments chimiques********\n \n";
        foreach ($tableau as $symbole => $valeurs){//première boucle qui permet d'afficher le symbole + le tableau dans le symbole
            foreach($valeurs as $matiere){// deuxième boucle qui permet d'afficher la valeur  matière
                echo $symbole ." : ". $matiere ."\n";
            }
        }
        echo "\n*******************************\n Tableau trié : \n";
        ksort($tableau); //le tableau est trié alphabétiquement en fonction des abréviations et pas des noms de matières ce qui explique pourquoi une fois trié phosphore apparait avant plomb car P (puis rien) se place avant pb
        foreach ($tableau as $symbole => $valeurs){
            foreach($valeurs as $matiere){
                echo $symbole ." : ". $matiere ."\n";
            }
        }
    }
    //exo 5
    function tableauAleatoire() {
        $tab = array(); //permet de créer un tableau
        for($i=0; $i<=10;$i++){ //une seule boucle for donc un tableau à une dimension
            $tab[$i] = rand(20,100);//permet de lui assigner des valeurs aléatoires à l'intérieur
        }
        afficheTab($tab);
        return $tab;
    }

    function afficheTab($tab) {
        for ($i = 0; $i < count($tab); $i++) {
            echo $tab[$i] . "|";
        }
        echo "\n";
    }


    

 ?>