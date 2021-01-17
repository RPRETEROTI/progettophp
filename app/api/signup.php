<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
// definisco il metodo consentito per la request
header("Access-Control-Allow-Methods: POST");
include_once '../models/APPDatabase.php';
include_once '../models/Credentials.php';

//connessione al database
$db = new APPDatabase();
$database = $db->getConnection();
//costruzione istanza credenziali
$user = new Credentials($database);

// leggo i dati nel body della request (metodo POST)
$data = json_decode(file_get_contents("php://input"));

// controllo che i dati ci siano...
if (
    !empty($data->usr)
    &&
    !empty($data->pwd)
) {

    // inserisco i valori nelle variabili d'istanza dell'oggetto $credentials
    $user->username = $data->usr;
    $user->password = $data->pwd;

    // invoco il metodo create() che crea una nuova utenza
    if ($user->signup()) { // se va a buon fine...

        if (!isset($_SESSION["errorsignup"])) { // se non è presente la sessione errorsignup per inserimento username già esistente
            //valorizzo la seezione utente con i dati del nuovo usr
            $_SESSION["utente"] = $data->usr;
            http_response_code(201); // response code 201 = created
            // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
            echo json_encode(array("message" => "User was created"));
        } else {
            http_response_code(409); // response code 409 = conflitto
            // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
            echo json_encode(array("message" => "L'username non è disponibile"));
        }
    } else { // se la creazione è fallita...
        http_response_code(503); // response code 503 = service unavailable

        // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
        echo json_encode(array("message" => "Unable to create user"));
    }
} else { // se i dati sono incompleti
    http_response_code(400); // response code 400 = bad request
    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    echo json_encode(array("message" => "Unable to create product. Data is incomplete: "));
}
