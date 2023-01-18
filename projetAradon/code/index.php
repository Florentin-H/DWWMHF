<?php
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
            case "register":
                $authController->register();
                break;
            case "login":
                require "views/login.view.php";
                break;
            case "users":
                require "views/users.view.php";
                break;
            case "nft":
                if (empty($url[1])) {
                    $nftController->affichernfts();
                } else if ($url[1] === "l") {
                    $nftController->affichernft((int)$url[2]);
                } else if ($url[1] === "a") {
                    $nftController->ajoutnft();
                } else if ($url[1] === "edit") {
                    $nftController->modificationnft((int)$url[2]);
                } else if ($url[1] === "s") {
                    $nftController->suppressionnft((int)$url[2]);
                } else if ($url[1] === "av") {
                    $nftController->ajoutnftValidation();
                } else if ($url[1] === "mv") {
                    $nftController->modificationnftValidation();
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
