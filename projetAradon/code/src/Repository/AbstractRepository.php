<?php

abstract class AbstractRepository
{
    private static $pdo;

    private static function connection()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=nfthaven;charset=utf8", 'root', '');
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_WARNING);
    }

    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::connection();
        }
        return self::$pdo;
    }
}
