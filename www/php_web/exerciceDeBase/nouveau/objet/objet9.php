 <?php ob_start() ?>

 <?php
    //manipuler 2 classes
    //classe player et classe arme dans des ficchhiers séparés
    //une arme contient un id qui s'auto incrémente, paramètre dégat, nom
    //le player contient un nom, une force, des pv et une arme
    //il va faloir récupérer l'arme via l'identifiant
    //les attributs des deux classes sont en privés
    require "class.player.php";
    require "class.weapon.php";


    $player1 = new Player("floflos", 100, 100);
    $player2 = new Player("frite", 110, 90);
    $player3 = new Player("fred", 110, 90);
    $player4 = new Player("Titi", 110, 90);
    $player5 = new Player("Gros-minet", 110, 90);

    $tabPlayer = [$player1, $player2, $player3, $player4, $player5];

    ?>
 <table class="table table-hover container ">
     <thead>
         <tr class="table-primary">
             <th scope="col">ID</th>
             <th scope="col">Pseudo</th>
             <th scope="col">Force</th>
             <th scope="col">PV</th>
             <th scope="col">Arme</th>
         </tr>
     </thead>
     <tbody>
         <?php foreach ($tabPlayer as $value) { ?>
             <tr class="table-active">
                 <th scope="row"><?= $value->getID() ?></th>
                 <td><?= $value->getPseudo() ?></td>
                 <td><?= $value->getForce() ?></td>
                 <td><?= $value->getPv() ?></td>
                 <?php foreach ($tabWeapon as $value) { ?>
                     <td><?= $value->getID() ?></td>
                 <?php } ?>
             <?php } ?>


             </tr>

     </tbody>
 </table>
 <?php
    $content = ob_get_clean();
    $titre = "Arme et Joueur";
    require "../home/template.php";
    ?>