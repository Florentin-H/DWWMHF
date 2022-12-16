<?php
class BanditManchot
{

    public function __construct()
    {
    }

    public function winOrLose()
    {
        return rand(0, 1);
    }
    public function howManyWeWinOrLose()
    {
        return rand(1, 10);
    }
    public function __toString()
    {
        return "Bandit Manchot";
    }
}
