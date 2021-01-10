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
$data = json_decode(file_get_contents("php://input"));

if (
   !empty($data->usr)
   &&
   !empty($data->pwd)
) {

   // inserisco i valori nelle variabili d'istanza dell'oggetto $product
   $user->username = $data->usr;
   // $user->password = $data->pwd;
   $stmt = $user->login();
   if ($stmt) {
      if ($stmt->rowCount() == 0) {
         $quante_tuple = $stmt->rowCount();
         // Utente non registrato
         http_response_code(400);
         echo json_encode(array("message" => "User not found"));
         exit();
      }
      // Password errata
      $pwd_digitata = $data->pwd;
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $pwd_registrata = $row["passwrd"];
      if ($pwd_digitata != $pwd_registrata) {
         http_response_code(400);
         echo json_encode(array("message" => "Password not correct"));
         exit();
      }
      //Success
      $usr_digitato = $data->usr;
      if ($stmt->rowCount() > 0) {
         // session_start();
         if (!isset($_SESSION["utente"])) {
            $_SESSION["utente"] = $usr_digitato;
         }
         http_response_code(201);
         echo json_encode(array("message" => "a bravo"));
         exit();
      }
   } else { // se la creazione è fallita...
      http_response_code(503); // response code 503 = service unavailable
      // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
      echo json_encode(array("message" => "Unable to login"));
   }
} else { // se i dati sono incompleti
   http_response_code(400); // response code 400 = bad request
   // creo un oggetto JSON costituito dalla coppia message: testo-del-messaggio
   echo json_encode(array("message" => "Unable to login. Data is incomplete"));
}
