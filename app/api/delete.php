<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Event.php';

//connessione al database
$db = new APPDatabase();
$database = $db->getConnection();
//costruzione istanza evento

$event = new Event($database);

// leggo i dati nel body della request (metodo POST)
$data = json_decode(file_get_contents("php://input"));
//associazione pro.codice sitanza con il codice riusultante dal body request
$event->code = $data->code;

// invoco il metodo delete() che cancella l'evento con codice specifico
if ($event->delete()) { // se va a buon fine...
    http_response_code(201); // response code 200 = ok

    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Event was deleted"));
} else { // se la creazione è fallita...
    http_response_code(503); // response code 503 = service unavailable

    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Unable to delete event "));
}
