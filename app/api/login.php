<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
include_once '../models/APPDatabase.php';
include_once '../models/Credentials.php';

$db = new APPDatabase();
$database = $db->getConnection();
$credentials = new Credentials($database);
$usr_digitato = $_GET['usr'];
$pwd_digitata = $_GET['pwd'];
$stmt = $credentials->login($usr_digitato);


if ($stmt->rowCount() == 0) {
   $quante_tuple = $stmt->rowCount();
   // Utente non registrato
   http_response_code(400);
   echo json_encode(array("message" => "User not found"));
   // session_start();
   // if (!isset($_SESSION["error-usr-not-found"])) {
   //    $_SESSION["usr-not-found"] = "User not found";
   // }
   // header("Location: registrazione.php?causa=1");
   exit();
}
// Password errata
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$pwd_registrata = $row["passwrd"];
if ($pwd_digitata != $pwd_registrata) {
   // header("Location: registrazione.php?causa=2");
   http_response_code(400);
   echo json_encode(array("message" => "Password not correct"));
   exit();
}

if ($stmt->rowCount() > 0) {
   session_start();
   if (!isset($_SESSION["utente"])) {
      $_SESSION["utente"] = $usr_digitato;
      //$_SESSION["utente"] = $_POST['utente'];
   }
   http_response_code(200);
   echo json_encode(array("message" => "a bravo"));

   exit();
}
