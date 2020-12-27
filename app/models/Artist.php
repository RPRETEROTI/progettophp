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

    public function construct($database)
    {
        $this->conn = $database;
    }
    public function read()
    {
        $query = "select fotoartista,nome,codice from artisti";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
