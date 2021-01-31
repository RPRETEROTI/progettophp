<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
// definisco il metodo consentito per la request
header("Access-Control-Allow-Methods: GET");
include_once '../models/APPDatabase.php';
include_once '../models/Event.php';

//connessione al database
$db = new APPDatabase();
$database = $db->getConnection();
//costruzione istanza evento
$events = new Event($database);
//recupero il filtro con variabile superglobale $_GET(metodo GET)
$key = $_GET['filterKey'] ? $_GET['filterKey'] : 'all';
//associazione della prop categoria dell'istanza con il filtro individuato
$events->category = $key;
if (isset($_SESSION["utente"])) { //recupero sessione utente
    $usr = $_SESSION["utente"];
}
//valorizzazione proprieta user
$events->user = $usr;
//invocazione metodo filter o read in base al filtro
if ($key === 'all') {
    $stmt = $events->read();
} else {
    $stmt = $events->filter();
}

if ($stmt->rowCount() > 0) { //se ci sono eventi
    // creo una coppia events: [lista-di-eventi]
    $events = array();
    $events["events"] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // la funzione fetch (libreria PDO) con parametro PDO::FETCH_ASSOC invocata su un PDOStatement, restituisce un record ($row), in particolare un array le cui chiavi sono i nomi delle colonne della tabella 
        // costruisco un array associativo ($events) che rappresenta ogni singolo evento...

        $event = array(
            "name" => $row["nome"],
            "price" => $row["prezzo"],
            "description" => $row["descrizione"],
            "dateexhibition" => $row["data"],
            "hourexhibition" => $row["ora"],
            "code" => $row["codice"],
            "fotoev" => $row["fotoevento"],
            "category" => $row["categoria"],
            "iconCategory" =>  $row["icon"]
        );
        //aggiungo evento alla lista eventi
        array_push($events["events"], $event);
    }
    http_response_code(200); //ok
    echo json_encode($events); //codifica in JSON dell'array creato

} else if ($stmt->rowCount() == 0) { // se non ci sono eventi...
    http_response_code(404); // response code 404 = no events
    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Non ci sono eventi della categoria selezionata"));
} else { // se la creazione è fallita...
    http_response_code(503); // response code 503 = service unavailable
    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Unable to read events"));
}
