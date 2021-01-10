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

// leggo i dati nel body della request (metodo POST)
$data = json_decode(file_get_contents("php://input"));

// C:/xampp/htdocs/uploadimages/cosmo1.jpg
// progetto_approcciavanzati2020\app\assets\uploadimages
// Check if image file is a actual image or fake image
if ($data->img) {
    // $target_dir = "app/assets/uploadingimages/";
    $target_subdir = "/progetto_approcciavanzati2020/app/assets/uploadimages/";
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . $target_subdir;
    echo "ciao" . $target_dir;
    // $target_dir = "uploadingimages/";
    // $target_dir = "../app/assets/uploadingimages/";
    // $target_dir = "../assets/uploadingimages/";

    $target_file = $target_dir . $data->img;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    if (!is_dir($target_dir)) {
        echo 'La cartella in cui si desidera salvare il file non esiste!';
    }
    if (!is_writable($target_dir)) {
        echo "La cartella in cui fare l'upload non ha i permessi!";
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        // $_FILES["$data->img"]["tmp_name"]
        $file = "$data->img";
        if (move_uploaded_file($file, $target_file)) {
            echo "The file " . htmlspecialchars(basename($data->img)) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file" . htmlspecialchars(basename($data->img)) . "v";
        }
    }
}


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
    $event->fotoev = $data->img;
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
