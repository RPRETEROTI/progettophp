<?php

class Credentials
{

    private $conn;

    public string $username;
    public string $password;

    public function __construct($database, $usr_digitato, $pwd_digitata)
    {
        $this->conn = $database;
        $this->username = $usr_digitato;
        $this->password = $pwd_digitata;
    }
    function login()
    {
        $sql = "SELECT passwr FROM profilo WHERE usr='$this->username' ";
        // $resultSet=$this->conn->$query;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }
}
