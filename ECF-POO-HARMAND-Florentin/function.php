<?php
function createMonster()
{
    $ratio = rand(1, 3);
    return $ratio == 1 ? new BanditManchot() : new Monster();
}

function getWinner($monster, $player)
{
    if ($player->getLifePoint() > 0) return $player;
    return $monster;
}

function fightMonster($monster, $player)
{
    while ($monster->getLifePoint() > 0 && $player->getLifePoint() > 0) {
        $playerDamage = $player->attack();
        $monster->setLifePoint($monster->getLifePoint() - $playerDamage);
        if (!$monster->getLifePoint()) {
            echo  'Le joueur a ' . $player->getLifePoint() . "\n";
            echo  'Le monstre a ' . $monster->getLifePoint() . "\n";
            break;
        }
        $monsterDamage = $monster->attack();
        $player->setLifePoint($player->getLifePoint() - $monsterDamage);
        echo  'Le joueur a ' . $player->getLifePoint() . "\n";
        echo  'Le monstre a ' . $monster->getLifePoint() . "\n";
    }
    echo "\n Le combat est terminé, le vainqueur est " . getWinner($monster, $player) . "\n";
}

function addPointsToPlayer($monster, $player)
{
    $player->setScore($player->getScore() + $monster->getPoints());
}
