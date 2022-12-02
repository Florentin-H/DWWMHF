<?php


class Player
{
    private static $idFirst = 1;
    private $id;
    private $pseudo;
    private $force;
    private $pv;
    private $idArme;

    public function __construct($pseudo, $force, $pv, $idArme)
    {


        $this->id = self::$idFirst++;
        $this->pseudo = $pseudo;
        $this->force = $force;
        $this->pv = $pv;
        $this->idArme = $idArme;
    }

    //getter
    public function getId()
    {
        return $this->id;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function getForce()
    {
        return $this->force;
    }
    public function getPv()
    {
        return $this->pv;
    }
    public function getIdArme()
    {
        return $this->idArme;
    }





    //setter
    public function setId()
    {
        return $this->id;
    }
    public function setPseudo()
    {
        return $this->pseudo;
    }
    public function setForce()
    {
        return $this->force;
    }
    public function setPv()
    {
        return $this->pv;
    }
    public function setIdArme()
    {
        return $this->idArme;
    }

    function __toString()
    {
        return  $this->pseudo . $this->force . $this->pv;
    }
}


// $player3 = new Player(2017, 5, 178, 1);
// $player4 = new Player(2018, 2, 225);
// $player5 = new Player(2019, 3, 180);
// $player6 = new Player(2020, 4, 155);
// $player7 = new Player(2021, 1, 140);
// $player8 = new Player(2022, 5, 150);
// $player9 = new Player(2023, 3, 175);
// $player10 = new Player(2024, 2, 200);


// , $player3, $player4, $player5, $player6, $player7, $player8, $player9, $player10];
