<?php
  session_start();
  if(isset($_SESSION["utente"])){
$ut= $_SESSION["utente"];
 header("Location:index.php?profilo=$ut");
	  exit();
  }
  else{
	  header("Location:index.php");
	  exit();
  }
?>

