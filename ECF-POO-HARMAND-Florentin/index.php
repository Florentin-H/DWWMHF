<?php
require "function.php";
require_once "class.Monster.php";
require_once "class.Player.php";
require_once "class.BanditManchot.php";

$pseudo = readline("Quel est votre pseudo? ");

$player = new Player($pseudo);

while ($player->getLifePoint() > 0) {
    if (!$player->move()) break;
    // $monster = new BanditMancho();
    $monster = createMonster();
    if ($monster instanceof Monster) {
        fightMonster($monster, $player);
        addPointsToPlayer($monster, $player);
    } else {
        $choix = readline("souhaites tu jouer à un jeu de hasard avec le Bandit Mancho qui mettra en jeu des points de vies (o/n)");
        if ($choix === "o") {
            $isAddingLife = $monster->winOrLose();
            $howManyWeWinOrLose = $monster->howManyWeWinOrLose();
            $oldLifePoint = $player->getLifePoint();
            if ($isAddingLife) {
                $player->setLifePoint($player->getLifePoint() + $howManyWeWinOrLose);
                echo "Le player " . $player->getPseudo()  . " gagne de la vie (" . $oldLifePoint . " + " . $howManyWeWinOrLose . ") \n";
                echo "le Player " . $player->getPseudo() . " a désormais " . $player->getLifePoint() . "\n";
            } else {
                $player->setLifePoint($player->getLifePoint() - $howManyWeWinOrLose);
                echo "Le player " . $player->getPseudo()  . " perds de la vie (" . $oldLifePoint . " - " . $howManyWeWinOrLose . ") \n ";
                echo "Le Player " . $player->getPseudo() . " a désormais " . $player->getLifePoint() . "\n";
            }
        }
    }
}

echo 'La partie est terminée' . "\n";
echo 'Le score du joueur ' . $player->getPseudo() . ' est: ' . $player->getScore();
