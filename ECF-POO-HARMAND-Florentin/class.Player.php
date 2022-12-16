<?php
require_once "class.AbstractCharacter.php";

class Player extends Character
{
    private $score;
    private $pseudo;

    public function __construct($pseudo, $lifePoints = 100, $strenghtPoints = 20, $score = 0)
    {
        parent::__construct($lifePoints, $strenghtPoints);
        $this->score = $score;
        $this->pseudo = $pseudo;
    }

    public function getScore()
    {
        return $this->score;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
        return $this;
    }
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    public function move()
    {
        $menu = readline(" \nPressez 1 pour aller vers le nord \n 2 pour aller vers le Sud \n 3 pour aller vers l'Est \n 4 pour aller vers l'Ouest \n Pressez 0 pour quitter\n");
        switch ($menu) {
            case 1:
                echo "Vous allez vers le Nord\n\n";
                break;
            case 2:
                echo "Vous allez vers le Sud\n\n";
                break;
            case 3:
                echo "Vous allez vers le Est\n\n";
                break;
            case 4:
                echo "Vous allez vers le Ouest\n\n";
                break;
            case 0:
                echo "Vous quittez le jeu\n\n";
                break;
        }
        return $menu;
    }

    public function __toString()
    {
        return "Player";
    }
}
