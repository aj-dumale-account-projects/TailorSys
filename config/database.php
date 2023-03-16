<?php

class Database{
    private $host = "localhost";
    private $db_name = "tailorsys";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnection(){
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "Connection Error: ". $exception->getMessage();
            exit();
        }

        return $this->conn;
    }

    public function __destruct(){
        $this->conn = null;
    }
}




?>