<?php

class Category
{

    private $conn;
    public string $name;
    public string $id;


    public function __construct($database)
    {
        $this->conn = $database;
    }


    function read()
    {
        $sql = 'SELECT * FROM categorie'; // read categories
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
}
