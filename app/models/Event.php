<?php
session_start();
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
    public string $iconCategory;

    public function __construct($database)
    {
        $this->conn = $database;
    }

    function create()
    {

        $sql1 = "SELECT 'codice' FROM eventi WHERE codice=?";
        $stmt = $this->conn->prepare($sql1);
        $this->code = htmlspecialchars(strip_tags($this->code));
        $stmt->bindParam(1, $this->code);
        $stmt->execute();
        $quante_tuple = $stmt->rowCount();

        if ($quante_tuple === 0) {
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
            unset($_SESSION["codevento"]);
            // print_r($_SESSION);


            return $stmt;
        } else {
            $_SESSION["codevento"] = "Il codice evento non può essere usato";
            // print_r($_SESSION);

            return $stmt;
        }
    }
    function filter()
    {
        if ($this->category === 'all') {
            $sql = 'SELECT * FROM eventi JOIN categorie ON eventi.categoria=categorie.id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt;
        } else {
            $sql = 'SELECT * FROM categorie  JOIN eventi ON categorie.id=eventi.categoria WHERE eventi.categoria=?';
            $stmt = $this->conn->prepare($sql);
            $key = htmlspecialchars(strip_tags($this->category));
            $stmt->bindParam(1, $key);
            $stmt->execute();
            return $stmt;
        }
    }

    function read()
    {
        $sql = 'SELECT *,categorie.icon FROM eventi JOIN categorie ON eventi.categoria=categorie.id';
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


    // public function setIconCategoryEvent($iconCategory)
    // {
    //     switch ($iconCategory) {
    //         case $iconCategory === 'a1':
    //             $iconCategory = 'fa-music';
    //             $this->iconCategory = $iconCategory;
    //             break;
    //         case $iconCategory === 'b2':
    //             $iconCategory = 'fa-volleyball-ball';
    //             $this->iconCategory = $iconCategory;

    //             break;
    //         case $iconCategory === 'c3':
    //             $iconCategory = 'fa-book';
    //             $this->iconCategory = $iconCategory;

    //             break;
    //         case $iconCategory === 'd4':
    //             $iconCategory = 'fa-utensils';
    //             $this->iconCategory = $iconCategory;

    //             break;
    //         default;
    //     }
    // }



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
