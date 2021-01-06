<?php

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
   echo json_encode(array("message" => "user not found"));
   // header("Location: registrazione.php?causa=1");
   exit();
}
// Password errata
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$pwd_registrata = $row["passwr"];
if ($pwd_digitata != $pwd_registrata) {
   // header("Location: registrazione.php?causa=2");
   http_response_code(400);
   echo json_encode(array("message" => "password not correct"));
   exit();
}

if ($stmt->rowCount() > 0) {
   session_start();
   if (!isset($_SESSION["utente"])) {
      $_SESSION["utente"] = $usr_digitato;
   }
   http_response_code(200);
   echo json_encode(array("message" => "a bravo"));

   exit();
}
