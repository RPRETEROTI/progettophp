<?php

class Artist
{

    private $conn;

    public string $name;
    public string $code;
    public string $foto;
    public string $description;
    public string $video;
    public string $dataesibizione;
    public string $oraesibizione;

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
