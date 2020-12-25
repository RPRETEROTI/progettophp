		
		<?php
     $host = "127.0.0.1:3307";
   $username = "root";
   $password = "";
   $database = "approcciavanzatiprogetto";

	$quantita= $_REQUEST["quantita"];
	$biglietto= $_REQUEST["biglietto"];
   $profilosel= $_REQUEST["profiloscelto"];
   $conn = new mysqli($host,$username,$password,$database);
 $sql = "insert into biglietti(username,tipobiglietto,quantita) values('$profilosel','$biglietto','$quantita')";
  $result = $conn->query($sql);
	
	 session_start();
   if(!isset($_SESSION["carrello"])){
	  $_SESSION["carrello"]=array();

   }	
   
   header("Location:ticket.php?ticketpage=$profilosel");exit;
	?>	
		