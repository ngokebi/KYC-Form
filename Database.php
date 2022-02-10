<?php

require_once("config.php");

class Database
{

    static private $host = DB_SERVER;
    static private $db_name = DB_NAME;
    static private $username = DB_USERNAME;
    static private $password = DB_PASSWORD;
    static public $conn;
    static public $stmt;

    // get the database connection
    static public function getConnection()
    {

        self::$conn = null;

        try {
            self::$conn = new PDO("mysql:host=" . self::$host . "; dbname=" . self::$db_name, self::$username, self::$password);
            self::$conn->exec("set names utf8");
        } catch (PDOException $exception) {

            echo "Connection error: " . $exception->getMessage();
        }

        return self::$conn;
    }

    // Prepare Statment
    static public function query($query)
    {
        self::$stmt = self::$conn->prepare($query);
    }

    // Execute Statment
    static public function execute()
    {
        return self::$stmt->execute();
    }

    static public function bindValue($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        self::$stmt->bindValue($param, $value, $type);
    }
}
