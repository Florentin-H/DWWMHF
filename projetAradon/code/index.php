<?php
require "src/Models/User.php";
session_start();


define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
require_once "src/Controllers/NftController.php";
require_once "src/Controllers/UserController.php";
require_once "src/Controllers/AuthController.php";

$nftController = new NftController();
$userController = new UserController();
$authController = new AuthController();

try {
    if (empty($_GET['page'])) {
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        // echo "<pre>";
        // print_r($url);
        // echo "</pre>";
        switch ($url[0]) {
            case 'accueil':
                require "views/accueil.view.php";
                break;
            case 'profil':
                $userController->profil();;
                break;
            case "register":
                $authController->register();
                break;
            case "login":
                $authController->login();
                break;
            case "logout":
                $authController->logout();
                break;
            case "users":
                require "views/users.php";
                break;
            case "account":
                $userController->updateAccount();
                break;
            case "nft":
                if (empty($url[1])) {
                    $nftController->list();
                } else if ($url[1] === "l") {
                    $nftController->item((int)$url[2]);
                } else if ($url[1] === "a") {
                    $nftController->add();
                } else if ($url[1] === "edit") {
                    $nftController->edit((int)$url[2]);
                } else if ($url[1] === "s") {
                    $nftController->delete((int)$url[2]);
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;

            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    $msg =  $e->getMessage();
    require "views/error.view.php";
}
