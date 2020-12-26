<?php

 $emaildigitata = $_REQUEST["email"];
  $nome=$_REQUEST["nome"];
$cognome=$_REQUEST["cogn"];
$testo= $_REQUEST["testo"];
   $host = "127.0.0.1:3307";
   $user = "root";
   $pwd = "";
   $db = "approcciavanzatiprogetto";
		 
   $conn = new mysqli($host,$user,$pwd,$db);
  $sql = "INSERT INTO faq(nome,email,cognome,testo) VALUES('$nome','$emaildigitata','$cognome','$testo')";
  $result = $conn->query($sql);
  
 session_start();
    $_SESSION["faq"]=$emaildigitata;
header("Location:contacts.php");
   exit();
?>

















?>