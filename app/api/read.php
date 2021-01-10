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
$stmt = $events->read();
if ($stmt->rowCount() > 0) {
    $events = array();
    $events["events"] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
        array_push($events["events"], $event);
    }
    http_response_code(200);
    echo json_encode(($events));
} else {
    http_response_code(400);
    echo json_encode(array("message" => "event not found"));
}
