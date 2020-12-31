
		
		

		
		
		<?php
     $host = "127.0.0.1:3307";
   $username = "root";
   $password = "";
   $database = "approcciavanzatiprogetto";

	$quantita= $_REQUEST["quantita"];
	$biglietto= $_REQUEST["biglietto"];
   $profilosel= $_REQUEST["profiloscelto"];
   $conn = new mysqli($host,$username,$password,$database);
   $sql0="select * from biglietti where username=\"$profilosel\" AND tipobiglietto=\"$biglietto\"  ";
     $result = $conn->query($sql0);
	  $row = $result->fetch_assoc();
    $quantitaold= $row["quantita"];
	$biglietto= $row["tipobiglietto"];
   $profilosel= $row["username"];
    if(($profilosel =! "" && $biglietto != ""){
	$sql = "UPDATE biglietti SET quantita='$quantita' where username=\"$profilosel\" AND tipobiglietto=\"$biglietto\" "

   }
    if(($profilosel == "" && $biglietto == ""){
   
 $sql = "insert into biglietti(username,tipobiglietto,quantita) values('$profilosel','$biglietto','$quantita')";
  $result = $conn->query($sql);
	 }
	 session_start();
   if(!isset($_SESSION["carrello"])){
	  $_SESSION["carrello"]=array();

   }	
   
   header("Location:ticket.php?ticketpage=$profilosel");exit;
	?>	
		
		
	    <?php

   $host = "127.0.0.1:3307";
   $phpuser = "root";
   $phppwd = "";
   $dbname = "approcciavanzatiprogetto";
		 
   $conn = new mysqli($host,$phpuser,$phppwd,$dbname);
		  
		  
$profile=$_REQUEST["profilopagina"];
		  
		  $query = "select * from profilo where usr=\"$profile\" ";

		  $result = $conn->query($query);
		  
		  $row = $result->fetch_assoc();
		 
		 $usr_digitato = $row["usr"];
   $pwd_digitata = $row["passwr"];
   $nome= $row["nome"];
   $cognome= $row["cognome"];
   $indirizzo= $row["indirizzo"];
   $numerocivico= $row["numerocivico"];
   $iban= $row["iban"];
   $email= $row["email"];
   $foto= $row["imgprofilo"];
   $citta= $row["citta"];
   $cap= $row["zip"];
   $stato= $row["stato"];
   $intestatario= $row["intestatario"];
	  
	  
	echo "<div class=\" col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3\">";
	echo"<div class=\"fotopr row\">";
		echo "<div class=\"fotopr1 col-md-12\">";
	if( $foto!=''){
	echo "<img class=\"  calendario w-100 \" src=\"uploadimg/$foto\">";
	 };
 if( $foto==''){
	echo "<img class=\" calendario w-100\" src=\"samu.jpg\">";
	 };
	 echo"</div>";  
	 echo"</div> ";
	echo"<div class=\"fotocarica row\">";
	echo" <form action=\"registrazionemodificata.php?profilo=$usr_digitato\" method=\"post\" enctype=\"multipart/form-data\">";
    
	
    
		
	
	
	echo"<div class=\"form-row\">";
	echo"<div class=\"custom-file form-group  col-md-10\">";
	  echo" <input type=\"file\" name=\"fileToUpload\"class=\"custom-file-input\" id=\"custom-File\"><label class=\"up custom-file-label\" for=\"customFile\">Inserisci foto</label>";
 echo"</div>   </div>";  

 echo"<div class=\"form-row\">";
 echo"<div class=\"form-group col-md-10\">";
    echo" <input type=\"submit\"  class= \"foto btn btn-primary\" value=\"Upload Image\" name=\"submit\">";
     echo"</div>  </div> ";
	
    echo"</form> </div>";
	echo "</div>";
    echo "<div class=\" col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5\">";
	echo "<h1 class=\"profilo\">PROFILO</h1>";  
	echo "<ul class=\"lista\">";
   	echo "<li class=\"mypage\">Nome:$nome";	   
	echo "</li>";
	echo "<li class=\"mypage\">Cognome:$cognome";
	echo "</li>";
	echo "<li class=\"mypage\">Indirizzo:$indirizzo.$numerocivico";
	echo "</li>";
	echo "<li class=\"mypage\">Città:$citta- Stato:$stato";
	echo "</li>";
	echo "<li class=\"mypage\"> Email:$email";
	echo "</li>";
	echo "<li class=\"mypage\">Iban:$iban";
	echo "</li>";
	echo "<li class=\"mypage\">Intestatario:$intestatario";
	echo "</li>"; 
	echo "</ul>";
 
echo "</div>";
				        
		  $query1 = "select * from biglietti where username=\"$profile\" ";

		  $result = $conn->query($query1);
		  
		 $quante_tuple = $result->num_rows;   
		 
	
		
	echo"<div class=\"bigliet col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4\">";
	 echo"<h1 class=\"profilo\">I MIEI BIGLIETTI</h1>";
		
		if( $quante_tuple  == 0){
		
		echo"<p class=\"profiloo\" >Al momento non hai acquistato nessun biglietto. Goditi il nostro festival e fai l'acquisto</p>";
		 echo"<a href=\"ticket.php?ticketpage=$profiloscelto\" class=\"but btn btn-primary\">Acquista subito</a>";
  	}
	else  {

	echo" <ul  class=\"lista\">"; 
		 while($row = $result->fetch_assoc()){
			 	$quantita= $row["quantita"];
	$biglietto= $row["tipobiglietto"];


	  echo"<li class=\"mypage\">Ticket:$quantita $biglietto</li>";
	 }	
	

	echo" </ul>";
	
	
	echo"<a href=\"artisti.php\" ><button class=\" btn btn-primary\">Scopri il festival</button></a>";	
		echo"</div>";
	
 }
?>	  
</div>
		
		
		
		
		
		
		
		
		
		
		
		
		