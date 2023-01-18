<?php

class User
{
    private $id;
    private $pseudo;
    private $eMail;
    private $password;
    private $adresse;
    private $dateOfBirth;
    private $profilPicture;
    private $createAccount;


    public function __construct($id, $pseudo, $eMail, $password, $adresse, $dateOfBirth, $profilPicture, $createAccount)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->eMail = $eMail;
        $this->password = $password;
        $this->adresse = $adresse;
        $this->adresse = $dateOfBirth;
        $this->adresse = $profilPicture;
        $this->adresse = $createAccount;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function getEMail()
    {
        return $this->eMail;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    public function getProfilPicture()
    {
        return $this->profilPicture;
    }
    public function getCreateAccount()
    {
        return $this->createAccount;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
        return $this;
    }
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;
        return $this;
    }
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
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
    public function setCreateAccount($createAccount)
    {
        $this->createAccount = $createAccount;
        return $this;
    }
}
