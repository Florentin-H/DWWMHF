<?php

class Nft
{
    private $id;
    private $name;
    private $imagePath;
    private $userId;

    public function __construct($id, $name, $imagePath, $userId) {
        $this->id = $id;
        $this->name = $name;
        $this->imagePath = $imagePath;
        $this->userId = $userId;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getImagePath() {
        return $this->imagePath;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
        return $this;
    }

    public function setUserId($userId) {
        $this->$userId = $userId;
        return $this;
    }
}
