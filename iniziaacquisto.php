<?php
  session_start();
  if(isset($_SESSION["utente"])){
	  $ut = $_SESSION["utente"]; 
header("Location:completaacquisto.php?profiloacquisto=$ut");
	  exit();
  }
  
?>
