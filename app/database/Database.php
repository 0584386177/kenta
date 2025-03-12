<?php

class Database
{
    private $_HOST = "localhost";
    private $_USERNAME = "root";
    private $_PASSWORD = "";
    private $_DATABASE = "kenta";
    private $_DRIVER = "mysql";
    public $conn;

    public function __construct() {
        $this->connect();
    }

    public function connect()
    {
        try {
            $dsn = "" . $this->_DRIVER . ":host=" . $this->_HOST . ";dbname=" . $this->_DATABASE . "";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
            ];

            $this->conn = new PDO($dsn, $this->_USERNAME, $this->_PASSWORD, $options);
            return $this->conn;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
