<?php

require_once "src/Repository/UserRepository.php";

class AuthController
{
    public function __construct()
    {
    }

    public function login()
    {
    }

    public function logout()
    {
    }

    public function register()
    {

        require "views/auth/register.php";
    }
}
