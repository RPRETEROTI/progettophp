<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Event.php';

$db = new APPDatabase();
$database = $db->getConnection();
$events = new Event($database);
$key = $_GET['filterKey'] ? $_GET['filterKey'] : 'all';
$events->category = $key;

$stmt = $events->filter();

if ($stmt) {
    $events = array();
    $events["events"] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $event = array(
            "name" => $row["nome"],
            "price" => $row["prezzo"],
            "dateexhibition" => $row["data"],
            "hourexhibition" => $row["ora"],
            "code" => $row["codice"],
            "fotoart" => $row["fotoevento"],
            "category" => $row["categoria"],
            "iconCategory" =>  $row["icon"]
        );
        array_push($events["events"], $event);
    }
    http_response_code(200);
    echo json_encode(($events));
} else { // se la creazione è fallita...
    http_response_code(503); // response code 503 = service unavailable
    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Unable to create product"));
}
