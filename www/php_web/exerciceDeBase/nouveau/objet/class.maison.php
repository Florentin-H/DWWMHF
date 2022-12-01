<?php

class Maison
{
    private static $idFirst = 1;
    private $id;
    private $date;
    private $chambre;
    private $surface;



    public function __construct($date, $chambre, $surface)
    {
        $stock = self::$idFirst++;

        $this->id = $stock;
        $this->date = $date;
        $this->chambre = $chambre;
        $this->surface = $surface;
    }

    //getter
    public function getID()
    {
        return $this->id;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getChambre()
    {
        return $this->chambre;
    }
    public function getSurface()
    {
        return $this->surface;
    }



    //setter
    public function setID()
    {
        return $this->id;
    }
    public function setDate()
    {
        return $this->date;
    }
    public function setChambre()
    {
        return $this->chambre;
    }
    public function setSurface()
    {
        return $this->surface;
    }
}

$maison1 = new Maison(2015, 2, 165);
$maison2 = new Maison(2016, 4, 195);
$maison3 = new Maison(2017, 5, 178);
$maison4 = new Maison(2018, 2, 225);
$maison5 = new Maison(2019, 3, 180);
$maison6 = new Maison(2020, 4, 155);
$maison7 = new Maison(2021, 1, 140);
$maison8 = new Maison(2022, 5, 150);
$maison9 = new Maison(2023, 3, 175);
$maison10 = new Maison(2024, 2, 200);

$tabMaison = [$maison1, $maison2, $maison3, $maison4, $maison5, $maison6, $maison7, $maison8, $maison9, $maison10];
