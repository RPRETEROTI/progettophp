<?php
session_start();

class Credentials
{

    private $conn;

    public string $username;
    public string $password;

    public function __construct($database)
    {
        $this->conn = $database;
    }
    function login()
    {
        // $sql = "SELECT passwr FROM profilo WHERE usr='$usr_digitato' ";
        $sql = 'SELECT passwrd FROM profiloutente WHERE usr= ?';
        $stmt = $this->conn->prepare($sql);
        $usr_digitato = htmlspecialchars(strip_tags($this->username));
        $stmt->bindParam(1, $usr_digitato);
        // $resultSet=$this->conn->$query;
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }
    function signin()
    {

        $sql1 = "SELECT usr FROM profiloutente WHERE usr=?";
        $stmt = $this->conn->prepare($sql1);
        $this->username = htmlspecialchars(strip_tags($this->username));
        $stmt->bindParam(1, $this->username);
        $stmt->execute();
        $quante_tuple = $stmt->rowCount();

        if ($quante_tuple === 0) {
            $sql = "INSERT INTO profiloutente SET usr = :username, passwrd = :password";

            $stmt = $this->conn->prepare($sql);

            $this->username = htmlspecialchars(strip_tags($this->username));
            $this->password = htmlspecialchars(strip_tags($this->password));

            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":password", $this->password);

            $stmt->execute();
            unset($_SESSION["errorsignin"]);

            return $stmt;
        } else {
            $_SESSION["errorsignin"] = "Il nome utente non è disponibile";
            return $stmt;
        }
        // return $resultSet;
    }
}
