<?php

class User
{
    private $id;
    private $pseudo;
    private $email;
    private $password;
    private $address;
    private $dateOfBirth;
    private $profilPicture;
    private $dateProfilCreated;


    public function __construct($id, $pseudo, $email, $password, $address, $dateOfBirth, $profilPicture, $dateProfilCreated)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
        $this->dateOfBirth = $dateOfBirth;
        $this->profilPicture = $profilPicture;
        $this->dateProfilCreated = $dateProfilCreated;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    public function getProfilPicture()
    {
        return $this->profilPicture;
    }
    public function getDateProfilCreated()
    {
        return $this->dateProfilCreated;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
        return $this;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    public function setProfilPicture($profilPicture)
    {
        $this->profilPicture = $profilPicture;
        return $this;
    }
    public function setDateProfilCreated($dateProfilCreated)
    {
        $this->dateProfilCreated = $dateProfilCreated;
        return $this;
    }
}
