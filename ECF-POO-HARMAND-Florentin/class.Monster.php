<?php
require_once "class.AbstractCharacter.php";
class Monster extends Character
{
    private $points;

    public function __construct()
    {
        parent::__construct(rand(20, 100), rand(5, 10));
        $this->points = $this->getLifePoint() < 60 ? 1 : 2;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function __toString()
    {
        return "Monster";
    }
}
