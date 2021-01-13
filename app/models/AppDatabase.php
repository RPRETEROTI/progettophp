<?php

class APPDatabase
{
    private  $db_name = "approcciavanzatiprogetto";
    private  $host = "127.0.0.1:3307";
    private  $username = "root";
    private  $password = "";
    public  $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name.";charset=utf8", $this->username, $this->password);

        } catch (PDOException $exception) {
            echo  "Connection error:" . $exception->getMessage();
        }
        return  $this->conn;
    }
}
