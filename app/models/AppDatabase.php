<?php

class APPDatabase
{
    private string $dbname = "approcciavanzatiprogetto";
    private string $host = "127.0.0.1:3307";
    private string $username = "root";
    private string $password = "";
    private $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:dbname=" . $this->dbname . ";host=" . $this->host . ";charset=utf8", $this->username, $this->password);
        } catch (PDOException $exception) {
            echo  "Connection error:" . $exception->getMessage();
        }
        return  $this->conn;
    }
}
