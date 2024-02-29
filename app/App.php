<?php

namespace App;

class App
{

    const DB_NAME = 'db_blog';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';
    const DB_PORT = '8889';

    private static $database;

    public static function getDb()
    {

        if (self::$database === null) {
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST, self::DB_PORT);
        }
        return self::$database;
    }
}
