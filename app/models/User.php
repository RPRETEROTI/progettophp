<?php

class Artist
{

    private $conn;

    public string $username;
    public string $password;
    public string $name;
    public string $surname;
    public string $mail;
    public string $address;
    public int $civicnumber;
    public string $city;
    public array $country;

    public function __construct($database)
    {
        $this->conn = $database;
    }
    function read()
    {
        $sql = 'SELECT * FROM artisti';
        // $resultSet=$this->conn->$query;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }
}
