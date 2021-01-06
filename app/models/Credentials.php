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
        $sql = 'SELECT passwrd FROM profiloutente WHERE usr= ?';
        $stmt = $this->conn->prepare($sql);
        $usr_digitato = htmlspecialchars(strip_tags($usr_digitato));
        $stmt->bindParam(1, $usr_digitato);
        // $resultSet=$this->conn->$query;
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }
    function signin()
    {
        $sql = "INSERT INTO profiloutente SET usr = :username, passwrd = :password";

        $stmt = $this->conn->prepare($sql);

        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->password = htmlspecialchars(strip_tags($this->password));

        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);

        $stmt->execute();

        return $stmt;
        // return $resultSet;
    }
}
