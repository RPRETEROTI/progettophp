<?php

class Category
{

    private $conn;
    public string $name;
    public string $id;
    public int $dataid;


    public function __construct($database)
    {
        $this->conn = $database;
    }


    function read()
    {
        $sql = 'SELECT * FROM categorie';
        // $resultSet=$this->conn->$query;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }
}