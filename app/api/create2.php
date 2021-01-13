<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Event.php';

//connessione al database
$db = new APPDatabase();
$database = $db->getConnection();
//costruzione istanza evento
$event = new Event($database);
//variabili per il caricamento img e error img
$isFileUploaded = 0;
$imgErrorType = '';

//recupero con $_POST i valori del form 
$name = $_POST['name'];
$code = $_POST['code'];
$checkcode = $_POST['checkcode'];
$price = $_POST['price'];
$category = $_POST['category'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$descr = $_POST['descr'];
$filename = $_FILES['uploadimg']['name'];

//controllo se non è stata inserita img individuando la posizione del . che precede il formato
$hasValue =  (strpos($filename, '.') !== false);

//se è settato il file ed è valorizzato verifico estenzione file altrimenti setto variabile a true(img non è obbligatoria)
if (isset($_FILES['uploadimg']['name']) && $hasValue == true) {

    //setto un array con i tipi di file che consentono l'upload  
    $formati_consentiti = array("png", "jpeg", "jpg");
    $inclusion_check = explode('.', $_FILES['uploadimg']['name']);
    //se il formato corrisponde a quelli impostati creo il path per salavare upload
    if (in_array(strtolower(end($inclusion_check)), $formati_consentiti)) {
        $target_subdir = "/progetto_approcciavanzati2020/app/assets/uploadimages/";
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . $target_subdir;
        $location = $target_dir . $filename;
        //se lo spostamento dalla cartella provvisoria del server tmp_name alla directory scelta ha esito positivo valorizzo variabile a true
        if (move_uploaded_file($_FILES['uploadimg']['tmp_name'], $location)) {
            // $response = $location;
            $isFileUploaded = 1;
        }
    } else {
        //se il formato img non è valido valorizzao variabile img con il tipo di errore e isfileuploaded a false
        $imgErrorType = "Il formato del file non è consentito. Solo .png,.jpeg,.jpg!";
        $isFileUploaded = 0;
    }
} else {
    $isFileUploaded = 1;
}

// controllo che i dati ci siano e che l'immagine sia valorizzata a true
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
    && $isFileUploaded == 1
) {

    // inserisco i valori nelle variabili d'istanza dell'oggetto $event
    $event->name = $name;
    $event->code = $code;
    $event->fotoev = $hasValue ? $filename : ' ';
    $event->price = $price;
    $event->description = $descr;
    $event->date = $date;
    $event->hour = $hour;
    $event->category = $category;


    // invoco il metodo create() che crea un nuovo evento
    if ($event->create()) { // se va a buon fine...
        //se non è settato errore codice in sessione ho 201 altrimenti 409 in quanto non è possibile creare eventi con codice uguale
        if (!isset($_SESSION["codevento"])) {
            http_response_code(201); // response code 201 = created
            // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
            echo json_encode(array("message" => "Event was created" . $isFileUploaded . $imgErrorType));
        } else {
            http_response_code(409); // response code 201 = created
            // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
            echo json_encode(array("message" => "Event code in conflitto"));
        }
    } else { // se la creazione è fallita...
        http_response_code(503); // response code 503 = service unavailable
        // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
        echo json_encode(array("message" => "Unable to create event"));
    }
} else { // se i dati sono incompleti
    http_response_code(400); // response code 400 = bad request
    // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
    if ($imgErrorType != null) {
        //stampo il tipo di errore img
        echo json_encode(array("message" => $imgErrorType));
    }
    //stampo il tipo di errore genercvio legato ad errore generico di caricamento

    if ($imgErrorType === null) {
        echo json_encode(array("message" => "Errore di caricamento img"));
    }
}
