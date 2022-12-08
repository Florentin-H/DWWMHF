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
    //setter
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
        return $this; //permet de modifier le $nom en plus de l'id ou du dégat en ajoutant une fleche pour $arme1->setDegat() = "Fluent Setter" = permet de chainer les setter (j'enchaine les setters)
    }
    public function setDegat($degat)
    {
        $this->degat = $degat;
        return $this;
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
