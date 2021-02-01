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

   // associazione valore usr nella proprietà corrispondente dell'istanza 
   $user->username = $data->usr;
   $stmt = $user->login();

   if ($stmt->rowCount() == 0) { //se il numero di record è uguale a 0
      // Utente non registrato
      http_response_code(404); //risorsa non trovata
      //codifico in oogetto json coppia(key:value)
      echo json_encode(array("message" => "User not found"));
      //esco
      exit();
   }
   // Password errata
   // associazione valore pwd nella proprietà corrispondente dell'istanza 
   $pwd_digitata = $data->pwd;
   //recupero il recordset risultato dalla query
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   //valorizzo pwd con quella presente nel database per confrontarla con quella inserita dall'utente
   $pwd_registrata = $row["passwrd"];
   if ($pwd_digitata != $pwd_registrata) { //se la password inserita e quella presente in database differiscono
      http_response_code(404); //resource not found
      //codifica in oggeto json in coppia chiave valore del messaggio
      echo json_encode(array("message" => "Password not correct"));
      exit();
   }
   //Success
   $usr_digitato = $data->usr;
   if ($stmt->rowCount() > 0) { //se il recordset è maggiore di 0
      // session_start();
      if (!isset($_SESSION["utente"])) { //settaggio sessione utente
         $_SESSION["utente"] = $usr_digitato;
      }
      http_response_code(200); //success
      //codifico in oogetto json coppia(key:value)
      echo json_encode(array("message" => "Utente registrato"));
      exit();
   } else {
      http_response_code(503); // response code 503 = service unavailable
      // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
      echo json_encode(array("message" => "Unable to login"));
   }
} else { // se i dati sono incompleti
   http_response_code(400); // response code 400 = bad request
   // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
   echo json_encode(array("message" => "Unable to login. Data is incomplete"));
}
