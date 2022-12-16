<?php

abstract class Character
{

    protected $lifePoint;
    protected $strenghtPoint;

    public function __construct($lifePoint, $strenghtPoint)
    {
        $this->lifePoint = $lifePoint;
        $this->strenghtPoint = $strenghtPoint;
    }

    public function getLifePoint()
    {
        return $this->lifePoint;
    }

    public function setLifePoint($lifePoint)
    {
        $this->lifePoint = $lifePoint;
        return $this;
    }

    public function getStrenghtPoint()
    {
        return $this->strenghtPoint;
    }

    public function attack()
    {
        echo 'le ' . get_class($this) . ' inflige ' . $this->strenghtPoint . "\n";
        return $this->strenghtPoint;
    }
}
