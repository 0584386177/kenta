<?php

class Database{
    private $_HOST = "localhost";
    private $_USERNAME = "root";
    private $_PASSWORD = "";
<<<<<<< HEAD
    private $_DATABASE = "kenta";
=======
    private $_DATABASE = "";
>>>>>>> 327ee564c6ed9cd3f78d0785eb2ce9ed08d5068e
    private $_DRIVER = "mysql";
    public $conn;

    public function connect(){
        try {
            $dsn = "".$this->_DRIVER.":host=".$this->_HOST.";dbname=".$this->_DATABASE."";
            $options = [

                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
            ];

            $this->conn = new PDO($dsn,$this->_USERNAME,$this->_PASSWORD,$options);

    
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $this->conn;
    }

}