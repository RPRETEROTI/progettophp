<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Category.php';

$db = new APPDatabase();
$database = $db->getConnection();
$categories = new Category($database);
$stmt = $categories->read();


if ($stmt->rowCount() > 0) {
    $categories  = array();
    $categories["categories"] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $category = array(
            "name" => $row["nome"],
            "id" => $row['id'],
            // "dataId" => $row['dataId']
        );
        array_push($categories["categories"], $category);
    }
    http_response_code(200);
    echo json_encode(($categories));
} else {
    http_response_code(400);
    echo json_encode(array("message" => "category not found"));
}
