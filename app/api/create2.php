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
$isFileUploaded = false;
$name = $_POST['name'];
$code = $_POST['code'];
$checkcode = $_POST['checkcode'];
$price = $_POST['price'];
$category = $_POST['category'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$descr = $_POST['descr'];
$filename = $_FILES['uploadimg']['name'];


if (isset($_FILES['uploadimg']['name'])) {
    // $filename = $_FILES['uploadimg']['name'];
    // echo "so stronzo" .  $filename;
    $target_subdir = "/progetto_approcciavanzati2020/app/assets/uploadimages/";
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . $target_subdir;
    $location = $target_dir . $filename;
    if (move_uploaded_file($_FILES['uploadimg']['tmp_name'], $location)) {
        $response = $location;
        $isFileUploaded = true;
        // echo "sei proprio stronzo" . $response;
    }
}
// echo "upload:" . $isFileUploaded;
// echo "a+" . $profile;

// // $imga = [
// //     'nome' => $img,
// //     'tmp_name' => '/tmp/php/php1h4j1o',
// // ];

// $profilea = $_REQUEST['name'];
// echo "aZ+" . $profilea;
// // leggo i dati nel body della request (metodo POST)
// $data = json_decode(file_get_contents("php://input"));
// echo "ciuao" . $data;

// controllo che i dati ci siano...
if (
    !empty($name)
    &&
    !empty($code)
    &&
    !empty($checkcode)
    &&
    !empty($price)
    &&
    !empty($category)
    &&
    !empty($date)
    &&
    !empty($hour)
    &&
    !empty($descr)
    ||  isset($_FILES['uploadimg']['name']) && $isFileUploaded = true
) {

    // inserisco i valori nelle variabili d'istanza dell'oggetto $product
    $event->name = $name;
    $event->code = $code;
    $event->fotoev = $filename;
    $event->price = $price;
    $event->description = $descr;
    $event->date = $date;
    $event->hour = $hour;
    $event->category = $category;


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
