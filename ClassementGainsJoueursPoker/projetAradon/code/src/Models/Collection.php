<?php

class Collection
{
    private $id;
    private $imagePath;
    private $title;

    public function __construct($id, $imagePath, $title)
    {
        $this->id = $id;
        $this->imagePath = $imagePath;
        $this->title = $title;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getImagePath()
    {
        return $this->imagePath;
    }
    public function getTitle()
    {
        return $this->title;
    }
}
