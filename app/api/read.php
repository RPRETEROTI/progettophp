<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Artist.php';

$db = new APPDatabase();
$database = $db->getConnection();
$artists = new Artist($database);
$stmt = $artists->read();

if ($stmt->rowCount() > 0) {
    $artists = array();
    $artists["artists"] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $artista = array(
            "name" => $row["nome"],
            "song" => $row["canzone"],
            "date" => $row["data"],
            "hour" => $row["ora"],
            "code" => $row["codice"],
            "fotoart" => $row["fotoartista"],
        );
        array_push($artists["artists"], $artista);
    }
    http_response_code(200);
    echo json_encode(($artists));
} else {
    http_response_code(400);
    echo json_encode(array("message" => "No artists found"));
}
