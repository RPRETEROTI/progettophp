<?php

class Credentials
{

    private $conn;

    public string $username;
    public string $password;

    public function __construct($database)
    {
        $this->conn = $database;
    }
    function login($usr_digitato)
    {
        // $sql = "SELECT passwr FROM profilo WHERE usr='$usr_digitato' ";
        $sql = 'SELECT passwr FROM profilo WHERE usr= ?';
        $stmt = $this->conn->prepare($sql);
        $usr_digitato = htmlspecialchars(strip_tags($usr_digitato));
        $stmt->bindParam(1, $usr_digitato);
        // $resultSet=$this->conn->$query;
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }
}
