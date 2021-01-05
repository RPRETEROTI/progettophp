<?php

class Categories
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
        $sql = 'SELECT * FROM artisti';
        // $resultSet=$this->conn->$query;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }

    // function create(){
    //     $sql='INSERT INTO canzoni_preferite SET codartista=:code,canzonefvr=:song,user=:ut


    //     -- -- (codartista,canzonefvr,user) VALUES('codartista','canzonefvr','user')';
    // }

    // servizio di inserimento di un nuovo prodotto
    function create()
    {
        // inserisco il nuovo prodotto
        $query = "INSERT INTO canzoni_preferite SET
				  canzonefvr=:name, codartista=:code, user=:session";
        // preparo la query
        $stmt = $this->conn->prepare($query);

        // sanifico...
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->code = htmlspecialchars(strip_tags($this->code));
        $this->session = htmlspecialchars(strip_tags($this->session));

        // invio i valori per i parametri (NB i valori del nuovo prodotto sono nelle variabili d'istanza!!)
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":code", $this->code);
        $stmt->bindParam(":session", $this->session);

        // eseguo la query
        $stmt->execute(); // NB $stmt conterrà il risultato dell'esecuzione della query

        return $stmt;
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
