<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mapremierebdd');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//var_dump($link);die;

if ($link === false) {
    die("erreur: connexion ko" . mysqli_connect_error());
}
