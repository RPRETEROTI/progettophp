<?php
   $usr_digitato = $_REQUEST["usr"];
   $pwd_digitata = $_REQUEST["pwd"];
   
   $host = "127.0.0.1:3307";
   $phpuser = "root";
   $phppwd = "";
   $dbname = "approcciavanzatiprogetto";
		 
   $conn = new mysqli($host,$phpuser,$phppwd,$dbname);
   
   $sql = "select passwr from profilo where usr=\"$usr_digitato\" ";
   
   $result = $conn->query($sql);

 
      $quante_tuple = $result->num_rows; 
   if ($quante_tuple== 0){
	   // Utente non registrato
	   header("Location: registrazione.php?causa=1");
	   exit();
   }
    // Password errata
   $row = $result->fetch_assoc();
   $pwd_registrata = $row["passwr"]; 
   if ($pwd_digitata != $pwd_registrata){
	   header("Location: registrazione.php?causa=2");
	   exit();
   }
   
   session_start();
   if(!isset($_SESSION["utente"])){
	   $_SESSION["utente"]=$usr_digitato;
	

   }
   header("Location:index.php?profilo=$usr_digitato");
   exit();
?>








