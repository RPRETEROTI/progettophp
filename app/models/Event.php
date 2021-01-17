<?php
session_start();
class Event
{

    private $conn;
    public string $name;
    public string $code;
    public string $fotoev;
    public int $price;
    public string $description;
    public string $user;
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
        //la prima query consiste nell'individuare se esiste già codice 
        $sql1 = "SELECT 'codice' FROM eventi WHERE codice=? AND user=?";
        //preparo la prima query
        $stmt = $this->conn->prepare($sql1);
        //sanifico

        $this->code = htmlspecialchars(strip_tags($this->code));
        $this->user = htmlspecialchars(strip_tags($this->user));

        //invio il valore per il parametro

        $stmt->bindParam(1, $this->code);
        $stmt->bindParam(2, $this->user);
        //esecuzione query
        $stmt->execute();
        //conteggio records
        $quante_tuple = $stmt->rowCount();
        //se il numero di righe individuate è uguale a 0 scatta la query di inserimento
        if ($quante_tuple === 0) {
            $sql = "INSERT INTO eventi SET 
                nome = :name, 
                user=:user,
                codice = :code,
                categoria = :category, 
                descrizione = :description,
                prezzo = :price, 
                data = :date,
                ora = :hour, 
                fotoevento = :fotoev ";

            //preparo query
            $stmt = $this->conn->prepare($sql);

            //sanificazione dati
            $this->name = htmlspecialchars(strip_tags($this->name));
            $this->code = htmlspecialchars(strip_tags($this->code));
            $this->user = htmlspecialchars(strip_tags($this->user));
            $this->category = htmlspecialchars(strip_tags($this->category));
            $this->description = htmlspecialchars(strip_tags($this->description));
            $this->price = htmlspecialchars(strip_tags($this->price));
            $this->date = htmlspecialchars(strip_tags($this->date));
            $this->hour = htmlspecialchars(strip_tags($this->hour));
            $this->fotoev = htmlspecialchars(strip_tags($this->fotoev));

            //abbinamento dati con prepared statement
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":code", $this->code);
            $stmt->bindParam(":user", $this->user);
            $stmt->bindParam(":category", $this->category);
            $stmt->bindParam(":description", $this->description);
            $stmt->bindParam(":price", $this->price);
            $stmt->bindParam(":date", $this->date);
            $stmt->bindParam(":hour", $this->hour);
            $stmt->bindParam(":fotoev", $this->fotoev);

            //execute
            $stmt->execute();
            //viene desettata la sessione codevento nel momento in cui si crea correttamente evento
            unset($_SESSION["codevento"]);
            // print_r($_SESSION);

            return $stmt;
        } else {
            //se il codice è presente è settatala sessione codevento
            $_SESSION["codevento"] = "Il codice evento non può essere usato";
            // print_r($_SESSION);

            return $stmt;
        }
    }
    function filter()
    {

        // query di lettura con filtro specifico di categoria e di utenza
        $sql = 'SELECT * FROM categorie  JOIN eventi ON categorie.id=eventi.categoria WHERE eventi.categoria=? AND eventi.user=?';
        //preparazione 
        $stmt = $this->conn->prepare($sql);

        //sanifico
        $key = htmlspecialchars(strip_tags($this->category));
        $this->user = htmlspecialchars(strip_tags($this->user));

        //invio il valore per il parametro con prepared statements
        $stmt->bindParam(1, $key);
        $stmt->bindParam(2, $this->user);
        //esecuzione query
        $stmt->execute();
        return $stmt;
    }

    function read()
    {
        //creazione query di lettura
        $sql = 'SELECT * FROM categorie  JOIN eventi ON categorie.id=eventi.categoria WHERE eventi.user=?';
        //prparazione
        $stmt = $this->conn->prepare($sql);
        //sanifico
        $this->user = htmlspecialchars(strip_tags($this->user));

        //invio il valore per il parametro con prepared statements
        $stmt->bindParam(1, $this->user);

        //esecuzione
        $stmt->execute();
        return $stmt;
    }

    function delete()
    {

        //cancellazione dell'evento con il codice pari a quello recuperato dal servizio e utenza
        $sql = 'DELETE FROM eventi WHERE codice= ? AND user=?';
        // $resultSet=$this->conn->$query;
        //preparazione query
        $stmt = $this->conn->prepare($sql);
        //sanifico dati
        $this->code = htmlspecialchars(strip_tags($this->code));
        $this->user = htmlspecialchars(strip_tags($this->user));
        //invio il valore per il parametro con prepared statements
        $stmt->bindParam(1, $this->code);
        $stmt->bindParam(2, $this->user);

        //esecuzion equery
        $stmt->execute();
        return $stmt;
        // return $resultSet;
    }
}
