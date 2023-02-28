<?php

require_once "src/Repository/UserRepository.php";

class AuthController
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        if (!isset($_SESSION['currentUser'])) {

            if (!isset($_POST) || !empty($_POST)) {
                // quand je submit mon formulaire
                $user = $this->userRepository->getUserByEmail($_POST['email']);
                if (!$user) {
                    echo "mot de passe ou adresse mail incorrect";
                }
                if (!password_verify($_POST['password'], $user->getPassword())) {
                    // pas bon
                    header('location: ' . URL . "login");
                    echo "mot de passe ou adresse mail incorrect";
                    return;
                }

                $_SESSION['currentUser'] = $user;
                header('location: ' . URL . "accueil");
            }
            require "views/auth/login.php";
            return;
        }
        header('location: ' . URL . "accueil");
    }

    public function logout()
    {
        session_destroy();
        header('location: ' . URL . "accueil");
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Vous avez été déconnecté avec succès!"
        ];
    }

    public function register()
    {
        var_dump(!isset($_SESSION['currentUser']));
        if (!isset($_SESSION['currentUser'])) {
            $errors = array();
            
            if (!isset($_POST) || !empty($_POST)) {
                if (empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])) {
                    $errors['pseudo'] = "votre pseudo n'est pas valide (alphanumérique)";
                }
                
                if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "votre email n'est pas valide";
                }
                if (empty($_POST['password']) || $_POST['password'] !== $_POST['password_confirm']) {
                    $errors['password'] = "vous devez entrer un mot de passe valide ";
                } else {
                    // Hacher le mot de passe
                    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                }
                if (empty($_POST['dateOfBirth']) || !strtotime($_POST['dateOfBirth'])) {
                    $errors['dateOfBirth'] = "votre date de naissance est invalide";
                }
                if (empty($_POST['address'])) {
                    $errors['address'] = "votre adresse est invalide";
                }
                var_dump($errors);
                $newAvatar = $_FILES['profilPicture'];
                $newFileNameAvatar = Functions::getRandomiseImageName($newAvatar['name']);
                Functions::imageValidation($newAvatar, $newFileNameAvatar, ENV::$AVATAR_PATH);

                $newUser = array(
                    'pseudo' => $_POST['pseudo'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'address' => $_POST['address'],
                    'dateOfBirth' => $_POST['dateOfBirth'],
                    'profilPicture' => $newFileNameAvatar
                );

                $this->userRepository->addUser($newUser);
                var_dump($newUser);

                // header('location: ' . URL . "login");
            }


            require "views/auth/register.php";
            return;
        }
        
    }
}
