<?php

namespace App\Logic;

use PDO;
use PDOException;

class Connection {
    protected static object $conn;

    public function getInstance() {
        $type     = DB_TYPE;
        $host     = HOST;
        $database = DB_NAME;
        $username = DB_USER;
        $password = DB_PASSWORD;
        $dsn      = "{$type}:host={$host};dbname={$database}";
        if(empty(self::$conn)){
            try {
                self::$conn = new PDO($dsn, $username, $password, array(PDO::ATTR_PERSISTENT => true));
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->exec('SET NAMES utf8');
                self::$conn->exec('SET CHARACTER SET utf8');
            } catch(PDOException $e) {
                echo "Error!: " . $e->getMessage();
                die();
            }
        }

        return self::$conn;
    }
}