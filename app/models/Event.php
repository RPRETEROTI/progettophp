<?php

class Event
{

    private $conn;
    public string $name;
    public string $code;
    public string $fotoev;
    public string $price;
    public string $description;
    public string $date;
    public string $hour;
    public string $category;

    public function __construct($database)
    {
        $this->conn = $database;
    }

    function create()
    {
        $sql = "INSERT INTO eventi SET 
        nome = :name, 
        codice = :code,
        categoria = :category, 
        descrizione = :description,
        prezzo = :price, 
        data = :date,
        ora = :hour, 
        fotoevento = :fotoev ";

        $stmt = $this->conn->prepare($sql);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->code = htmlspecialchars(strip_tags($this->code));
        $this->category = htmlspecialchars(strip_tags($this->category));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->date = htmlspecialchars(strip_tags($this->date));
        $this->hour = htmlspecialchars(strip_tags($this->hour));
        $this->fotoev = htmlspecialchars(strip_tags($this->fotoev));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":code", $this->code);
        $stmt->bindParam(":category", $this->category);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":hour", $this->hour);
        $stmt->bindParam(":fotoev", $this->fotoev);

        $stmt->execute();

        return $stmt;
        // return $resultSet;
    }
    function filter($key)
    {
        if ($key === 'all') {
            $sql = 'SELECT * FROM eventi';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt;
        } else {
            $sql = 'SELECT * FROM eventi WHERE categoria = ?';
            $stmt = $this->conn->prepare($sql);
            $key = htmlspecialchars(strip_tags($key));
            $stmt->bindParam(1, $key);
            $stmt->execute();
            return $stmt;
        }
    }

    function read()
    {
        $sql = 'SELECT * FROM eventi';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

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
