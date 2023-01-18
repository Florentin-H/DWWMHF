<?php

class Nft
{
    private $id;
    private $name;
    private $owner;
    private $fileName;



    public function __construct($id, $name, $owner, $fileName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->owner = $owner;
        $this->fileName = $fileName;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getOwner()
    {
        return $this->owner;
    }
    public function getFileName()
    {
        return $this->fileName;
    }


    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setowner($owner)
    {
        $this->owner = $owner;
        return $this;
    }
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }
}
