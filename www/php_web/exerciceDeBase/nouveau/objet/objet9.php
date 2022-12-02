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


    $player1 = new Player("floflos", 100, 100, 1);
    $player2 = new Player("frite", 110, 90, 3);
    $player3 = new Player("fred", 110, 90, 2);
    $player4 = new Player("Titi", 110, 90, 1);
    $player5 = new Player("Gros-minet", 110, 90, 3);

    $players = [$player1, $player2, $player3, $player4, $player5];
    $labels = ["ID", "pseudo", "Force", "PV", "ID Arme", "Arme", "Dégat arme"]
    ?>
 <table class="table table-hover container ">
     <thead>
         <tr class="table-primary">
             <?php foreach ($labels as $label) { ?>
                 <th scope="col"><?= $label ?></th>
             <?php  } ?>
         </tr>
     </thead>
     <tbody>
         <?php foreach ($players as $player) { ?>
             <tr class="table-active">
                 <th scope="row"><?= $player->getId() ?></th>
                 <td><?= $player->getPseudo() ?></td>
                 <td><?= $player->getForce() ?></td>
                 <td><?= $player->getPv() ?></td>
                 <td><?= $player->getIdArme() ?></td>
                 <?php foreach ($weapons as $weapon) {
                        if ($player->getIdArme() === $weapon->getId()) { ?>
                         <td><?= $weapon->getNom() ?></td>
                         <td><?= $weapon->getDegat() ?></td>
                     <?php } ?>
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