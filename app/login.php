<?php

include_once './models/APPDatabase.php';
include_once './models/Credentials.php';

$db = new APPDatabase();
$database = $db->getConnection();
$credentials = new Credentials($database);
$usr_digitato = $_GET['usr'];
$pwd_digitata = $_GET['pwd'];
$stmt = $credentials->login($usr_digitato, $pwd_digitata);

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
// header("Location:index.php?profilo=$usr_digitato");
header("Location:index.php");

exit();
