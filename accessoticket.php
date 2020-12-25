<?php
  session_start();
  if(isset($_SESSION["utente"])){
	  $ut = $_SESSION["utente"]; 
header("Location:ticket.php?ticketpage=$ut");
	  exit();
  }
  else{
	  header("Location:registrazione.php?causa=0");
	  exit();
  }
?>

