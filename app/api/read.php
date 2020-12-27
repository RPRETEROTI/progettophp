<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Artist.php';

$database = new APPDatabase();
$conn = $database->getConnection();
$artists = new Artist($conn);
$stmt = $artists->read();

if ($stmt->rowCount() > 0) {
    $artists = array();
    $artists["artists"] = array();
    while ($stmt->fetch(PDO::FETCH_ASSOC)) {
        $artista = array(
            "nome" => $stmt["name"]
        );
    }
    array_push($artists["artists"], $artista);
    http_response_code(200);
    echo json_encode(($artists));
} else {
    http_response_code(400);
    echo json_encode(array("message" => "No products found"));
}
