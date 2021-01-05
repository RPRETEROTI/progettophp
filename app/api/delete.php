<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Artist.php';


$db = new APPDatabase();
$database = $db->getConnection();
$artist = new Artist($database);

// leggo i dati nel body della request (metodo POST)
$data = json_decode(file_get_contents("php://input"));
$artist->code = $data->code;

// invoco il metodo create() che crea un nuovo prodotto
if ($artist->delete()) { // se va a buon fine...
    http_response_code(201); // response code 201 = created

    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Product was deleted"));
} else { // se la creazione è fallita...
    http_response_code(503); // response code 503 = service unavailable

    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Unable to create product"));
}
