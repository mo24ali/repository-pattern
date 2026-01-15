<?php

namespace Config;

use PDO;
use PDOException;

class Database
{

    private static ?PDO $conn;
    private static ?Database $instance;



    private function __construct()
    {


        $config = require __DIR__ . "/../config/connexion.php";
        try {
            $dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";
            self::$conn = new PDO($dsn, $config['username'], $config['password']);
            // var_dump(self::$conn);
        } catch (PDOException $pe) {
            echo "Error due to =>" . $pe->getMessage();
        }
    }


    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    public function getConnection()
    {
        return self::$conn;
    }
}

