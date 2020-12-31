<?php

include_once './models/APPDatabase.php';
include_once './models/Credentials.php';

$usr_digitato = $_REQUEST["usr"];
$pwd_digitata = $_REQUEST["pwd"];


$db = new APPDatabase();
$database = $db->getConnection();
$credentials = new Credentials($database, $usr_digitato, $pwd_digitata);
$stmt = $credentials->login();


$quante_tuple = $stmt->rowCount();

if ($quante_tuple == 0) {
   // Utente non registrato
   header("Location: registrazione.php?causa=1");
   exit();
}
// Password errata
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$pwd_registrata = $row["passwr"];
if ($pwd_digitata != $pwd_registrata) {
   header("Location: registrazione.php?causa=2");
   exit();
}

session_start();
if (!isset($_SESSION["utente"])) {
   $_SESSION["utente"] = $usr_digitato;
}
header("Location:index.php?profilo=$usr_digitato");
exit();
