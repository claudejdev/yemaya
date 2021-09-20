<?php

abstract class Model{
    private static $pdo;

    private static function setDb()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=yemaya;charset=utf8", "root", "");
        self::$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
    }

    //Pour qu'une seule connexion existe
    protected function getDb() //Protected pour être disponible depuis MainManager
    {
        if (self::$pdo === null) {
            self::setDb();
        } //pour être sûr que la connexion existe
        return self::$pdo;
    }
}

?>