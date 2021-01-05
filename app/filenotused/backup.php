<?php

class Artist
{

    private $conn;
    private $session;
    public string $name;
    public string $code;
    public string $fotoart;
    public string $song;
    // public string $description;
    public string $dateexhibition;
    public string $hourexhibition;

    public function __construct($database)
    {
        $this->conn = $database;
        if (isset($_SESSION["utente"])) {
            $sessionUser = $_SESSION["utente"];
            $this->session = $sessionUser;
        } else {
            $this->session = null;
        }
    }

    function authenticate()
    {

        if ($this->session) {
            $this->readWithAuthentication();
        } else {
            $this->read();
        }
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
    function readWithAuthentication()
    {
        $firstsql = "SELECT nome FROM profilo WHERE usr='ict2020'";
        $resultSet = $this->conn->query($firstsql);
        while ($record = $resultSet->fetch(PDO::FETCH_ASSOC)) {
            echo $record['usr'];
        }
        //$user = $resultSet['usr'];
        // return $resultSet;
        return  $this->session;
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
// function createSong(){
//     $sql='INSERT INTO canzoni_preferite SET codartista=:code,canzonefvr=:song,user=:ut
    
    
//     -- -- (codartista,canzonefvr,user) VALUES('codartista','canzonefvr','user')';
// }