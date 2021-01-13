<?php
session_start(); //session start

class Credentials
{

    private $conn;

    public string $username;
    public string $password;

    public function __construct($database)
    {
        $this->conn = $database;
    }

    //login method
    function login()
    {
        //seleziona password dove vi è corrispondenza con usr inserito
        $sql = 'SELECT passwrd FROM profiloutente WHERE usr= ?';
        //preparo la query
        $stmt = $this->conn->prepare($sql);
        //sanifico
        $usr_digitato = htmlspecialchars(strip_tags($this->username));
        //invio il valore per il parametro
        $stmt->bindParam(1, $usr_digitato);
        // $resultSet=$this->conn->$query;
        //eseguo query
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }
    //signin method
    function signin()
    {
        //seleziona utente con corripondenza usr
        $sql1 = "SELECT usr FROM profiloutente WHERE usr=?";
        //preparo la prima query

        $stmt = $this->conn->prepare($sql1);
        //sanifico

        $this->username = htmlspecialchars(strip_tags($this->username));
        //invio il valore per il parametro
        $stmt->bindParam(1, $this->username);
        //eseguo query
        $stmt->execute();
        //conteggio recordset 
        $quante_tuple = $stmt->rowCount();

        if ($quante_tuple === 0) { // se non ha trovato corrispondenza significa che utenza non era presenta, quindi siattiva la seconda query
            //inserimento utenza
            $sql = "INSERT INTO profiloutente SET usr = :username, passwrd = :password";
            //preparo la prima query
            $stmt = $this->conn->prepare($sql);
            //sanifico
            $this->username = htmlspecialchars(strip_tags($this->username));
            $this->password = htmlspecialchars(strip_tags($this->password));

            //invio il valore per il parametro con prepared statements
            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":password", $this->password);
            //escecuzione query
            $stmt->execute();
            //unset sessione errosignin in caso di corretto procedimento di iscrizione
            unset($_SESSION["errorsignin"]);

            return $stmt;
        } else { //se è stata trovata corrispondenza significa confermare l'esistenza di un utente con stesso usr(primary key)
            $_SESSION["errorsignin"] = "Il nome utente non è disponibile"; //settaggio session errorsignin
            return $stmt;
        }
        // return $resultSet;
    }
}
