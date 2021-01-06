<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Credentials.php';


$db = new APPDatabase();
$database = $db->getConnection();
$user = new Credentials($database);

// leggo i dati nel body della request (metodo POST)
$data = json_decode(file_get_contents("php://input"));

// controllo che i dati ci siano...
if (
    !empty($data->usr)
    &&
    !empty($data->pwd)
) {

    // inserisco i valori nelle variabili d'istanza dell'oggetto $product
    $user->username = $data->usr;
    $user->password = $data->pwd;

    // invoco il metodo create() che crea un nuovo prodotto
    if ($user->signin()) { // se va a buon fine...
        http_response_code(201); // response code 201 = created
        if (!isset($_SESSION["utente"])) {
            $_SESSION["utente"] = $data->usr;
        }
        // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
        echo json_encode(array("message" => "Product was created"));
    } else { // se la creazione è fallita...
        http_response_code(503); // response code 503 = service unavailable

        // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
        echo json_encode(array("message" => "Unable to create product"));
    }
} else { // se i dati sono incompleti
    http_response_code(400); // response code 400 = bad request
    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    (array("message" => "Unable to create product. Data is incomplete: "));
}
