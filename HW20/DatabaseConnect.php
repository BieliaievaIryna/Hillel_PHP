<?php

class DatabaseConnect
{
    private static ?PDO $instance = null;

    private function __construct() {}

    /**
     * @return void
     */
    private function __clone() {}

    /**
     * @return mixed
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception('Cannot unserialize singleton');
    }

    /**
     * @return PDO|null
     */
    public static function getInstance(): ?PDO
    {
        if (self::$instance === null) {
            self::$instance = new PDO("mysql:host=mysql;port=3306;dbname=hillel", "root", "root", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }
        return self::$instance;
    }
}