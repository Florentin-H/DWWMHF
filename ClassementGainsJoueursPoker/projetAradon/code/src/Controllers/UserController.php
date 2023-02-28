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
        if (!$_SESSION['currentUser']) {
        header('location: ' . URL . "login");

        return;
    }
        $users = $this->userRepository->getUsers();

        require "views/user/users.php";
    }

    public function profil()
    {
        if (!$_SESSION['currentUser']) {
            header('location: ' . URL . "login");

            return;
        }


        require "views/user/profil.php";
    }

    public function updateAccount()
    {
        if (!$_SESSION['currentUser']) {
            header('location: ' . URL . "login");
            return;
        }

        $errors = array();
        var_dump($_SESSION);
        if (!isset($_POST) || !empty($_POST)) {
            if (empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])) {
                $errors['pseudo'] = "votre pseudo n'est pas valide (alphanumérique)";
            }

            if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "votre email n'est pas valide";
            }

            if (empty($_POST['dateOfBirth']) || !strtotime($_POST['dateOfBirth'])) {
                $errors['dateOfBirth'] = "votre date de naissance est invalide";
            }
            if (empty($_POST['address'])) {
                $errors['address'] = "votre adresse est invalide";
            }

            if ($_FILES['profilPicture']['size']) {
                $newAvatar = $_FILES['profilPicture'];
                $newFileNameAvatar = Functions::getRandomiseImageName($newAvatar['name']);
                Functions::imageValidation($newAvatar, $newFileNameAvatar, ENV::$AVATAR_PATH);
                if ($_SESSION['currentUser']->getProfilPicture()) {
                    unlink(Env::$AVATAR_PATH . $_SESSION['currentUser']->getProfilPicture());
                }
            }
    
            $updatedUser = array(
                'id' => $_SESSION['currentUser']->getId(),
                'pseudo' => $_POST['pseudo'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'dateOfBirth' => $_POST['dateOfBirth'],
                'profilPicture' => $newFileNameAvatar ?? $_SESSION['currentUser']->getProfilPicture()
            );

            $this->userRepository->update($updatedUser);
        }
        require "views/user/updateAccount.php";
    }
}
