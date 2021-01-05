<?php

class Artist
{

    private $conn;
    public string $name;
    public string $code;
    public string $fotoart;
    public string $price;
    // public string $description;
    public string $dateexhibition;
    public string $hourexhibition;
    public string $category;

    public function __construct($database)
    {
        $this->conn = $database;
    }


    // function read($key)
    // {
    //     if ($key === 'all') {
    //         $sql = 'SELECT * FROM eventi';
    //         $stmt = $this->conn->prepare($sql);
    //         $stmt->execute();
    //         return $stmt;
    //     } else {
    //         $sql = 'SELECT * FROM eventi WHERE categoria = ?';
    //         $stmt = $this->conn->prepare($sql);
    //         $key = htmlspecialchars(strip_tags($key));
    //         $stmt->bindParam(1, $key);
    //         $stmt->execute();
    //         return $stmt;
    //     }};

    function read()
    {
        $sql = 'SELECT * FROM eventi';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    // $key === 'all' ? $sql = 'SELECT * FROM eventi' : 'SELECT * FROM eventi WHERE categoria = ?';
    // // $resultSet=$this->conn->$query;
    // $stmt = $this->conn->prepare($sql);
    // $key = htmlspecialchars(strip_tags($key));
    // $stmt->bindParam(1, $key);
    // $stmt->execute();
    // return $stmt;
    // return $resultSet;


    function delete()
    {
        $sql = "DELETE FROM eventi WHERE codice= ?";
        // $resultSet=$this->conn->$query;
        $stmt = $this->conn->prepare($sql);
        $this->code = htmlspecialchars(strip_tags($this->code));
        $stmt->bindParam(1, $this->code);
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }

    function readWithAuthentication()
    {
        $firstsql = "SELECT * FROM profilo";
        $resultSet = $this->conn->query($firstsql);
        while ($record = $resultSet->fetch(PDO::FETCH_ASSOC)) {
            echo $record['usr'];
            echo $record['nome'];
        }
        //$user = $resultSet['usr'];
        return $resultSet;
        // return  $this->session;
        // $sql = 'SELECT * FROM artisti,profilo JOIN artistipreferiti ON artisti.';
        // // $resultSet=$this->conn->$query;
        // $stmt = $this->conn->prepare($sql);
        // $stmt->execute();
        // return $stmt;
        // return $resultSet;
    }
    // function addToPreferite{
    //     $sql='SELECT ';
    //     $stmt->this->conn->prepare($sql)
    //     $stmt->execute();
    //     return $stmt
    // }
}
