<?php
//pas besoin de ../ car on part directement de l'index qui est lui à l'extérieur de tout dossier
require_once "src/Repository/UserRepository.php";

class UserController
{
    //utilise les attributs de la classe utilisateurManager
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function displayUsers()
    {
        $users = $this->userRepository->getUsers();

        require "views/utilisateur.view.php";
    }

    public function profil()
    {
        if (!$_SESSION['currentUser']) {
            header('location: ' . URL . "login");
            return;
        }
        require "views/user/profil.php";
    }
}
