<?php

$emaildigitata = $_REQUEST["em"];
 $host = "127.0.0.1:3307";
   $user = "root";
   $pwd = "";
   $db = "approcciavanzatiprogetto";
		 
   $conn = new mysqli($host,$user,$pwd,$db);
  $sql = "INSERT INTO newsletter(email) VALUES('$emaildigitata')";
  $result = $conn->query($sql);
  header("Location:index.php");
   exit();
?>

















?>