<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Event.php';

$db = new APPDatabase();
$database = $db->getConnection();
$event = new Event($database);

$profile = $_POST['name'];



if (isset($_FILES['uploadimg']['name'])) {
    $filename = $_FILES['uploadimg']['name'];
    echo "so stronzo" .  $filename;
    $target_subdir = "/progetto_approcciavanzati2020/app/assets/uploadimages/";
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . $target_subdir;
    $location = $target_dir . $filename;
    if (move_uploaded_file($_FILES['uploadimg']['tmp_name'], $location)) {
        $response = $location;
        echo "sei proprio stronzo" . $response;
    }
}

echo "a+" . $profile;

// $imga = [
//     'nome' => $img,
//     'tmp_name' => '/tmp/php/php1h4j1o',
// ];

$profilea = $_REQUEST['name'];
echo "aZ+" . $profilea;
// leggo i dati nel body della request (metodo POST)
$data = json_decode(file_get_contents("php://input"));
echo "ciuao" . $data;



// controllo che i dati ci siano...
if (
    !empty($data->name)
    &&
    !empty($data->code)
    &&
    !empty($data->checkcode)
    &&
    !empty($data->price)
    &&
    !empty($data->category)
    &&
    !empty($data->date)
    &&
    !empty($data->hour)
    &&
    !empty($data->descr)
) {

    // inserisco i valori nelle variabili d'istanza dell'oggetto $product
    $event->name = $data->name;
    $event->code = $data->code;
    $event->fotoev = $data->uploadimg;
    $event->price = $data->price;
    $event->description = $data->descr;
    $event->date = $data->date;
    $event->hour = $data->hour;
    $event->category = $data->category;
    // invoco il metodo create() che crea un nuovo prodotto
    if ($event->create()) { // se va a buon fine...
        http_response_code(201); // response code 201 = created
        // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
        echo json_encode(array("message" => "Event was created"));
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
