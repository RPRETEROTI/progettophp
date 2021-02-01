<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
// definisco il metodo consentito per la request
header("Access-Control-Allow-Methods: DELETE");
include_once '../models/APPDatabase.php';
include_once '../models/Event.php';

//connessione al database
$db = new APPDatabase();
$database = $db->getConnection();
//costruzione istanza evento

$event = new Event($database);

// leggo i dati nel body della request (metodo POST)
$data = json_decode(file_get_contents("php://input"));
//associazione pro.codice sitanza con il codice risultante dal body request
$event->code = $data->code;
if (isset($_SESSION["utente"])) { //recupero sessione utente
    $usr = $_SESSION["utente"];
}
//valorizzazione proprieta user
$event->user = $usr;

// invoco il metodo delete() che cancella l'evento con codice specifico
if ($event->delete()) { // se va a buon fine...
    http_response_code(200); // response code 200 = ok

    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Event was deleted"));
} else { //se la CANCELLAZIONE è fallita...
    http_response_code(503); // response code 503 = service unavailable

    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Unable to delete event "));
}
