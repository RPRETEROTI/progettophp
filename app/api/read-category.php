<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
// definisco il metodo consentito per la request
header("Access-Control-Allow-Methods: GET");
include_once '../models/APPDatabase.php';
include_once '../models/Category.php';

//connessione al database
$db = new APPDatabase();
$database = $db->getConnection();
//costruzione istanza categoria
$categories = new Category($database);
//invocazione metodo read
$stmt = $categories->read();

if ($stmt->rowCount() > 0) { // se ci sono categorie
    // creo una coppia categories: [lista-di-categorie]
    $categories  = array();
    $categories["categories"] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // la funzione fetch (libreria PDO) con parametro PDO::FETCH_ASSOC invocata su un PDOStatement, restituisce un record ($row), in particolare un array le cui chiavi sono i nomi delle colonne della tabella 
        // costruisco un array associativo ($categories) che rappresenta ogni singolo evento...

        $category = array(
            "name" => $row["nomecat"],
            "id" => $row['id'],
        );
        //aggiungo categoria alla lista categories

        array_push($categories["categories"], $category);
    }
    http_response_code(200); //ok
    echo json_encode($categories); //codifica in JSON dell'array creato
} else {
    http_response_code(404);
    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "category not found"));
}
