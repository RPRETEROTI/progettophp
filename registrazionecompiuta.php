<?php
     $host = "127.0.0.1:3307";
   $username = "root";
   $password = "";
   $database = "approcciavanzatiprogetto";
		 
   $usr_digitato = $_REQUEST["user"];
   $pwd_digitata = $_REQUEST["pawd"];
   $nome= $_REQUEST["nome"];
   $cognome= $_REQUEST["cogn"];
   $indirizzo= $_REQUEST["indirizzo"];
   $numerocivico= $_REQUEST["nciv"];
   $iban= $_REQUEST["iban"];
   $email= $_REQUEST["email"];
   $foto= $_FILES["fileToUpload"]["name"];
   $citta= $_REQUEST["city"];
   $cap= $_REQUEST["zip"];
   $stato= $_REQUEST["state"];
   $intestatario= $_REQUEST["intestatario"];
   $conn = new mysqli($host,$username,$password,$database);

   $sql1="select usr from profilo where usr=\"$usr_digitato\" ";
     $result = $conn->query($sql1);
         $quante_tuple = $result->num_rows; 
   if ($quante_tuple!= 0){
	   // User già registrato
	   header("Location: registrazione.php?causa=4");
	   
   }
 if($quante_tuple== 0){
   $sql = "insert into profilo(usr,passwr,nome,cognome,indirizzo,numerocivico,citta,stato,zip,email,intestatario,imgprofilo,iban)
   values('$usr_digitato','$pwd_digitata','$nome','$cognome','$indirizzo','$numerocivico','$citta','$stato','$cap','$email','$intestatario','$foto','$iban')";
        $result = $conn->query($sql);
header("Location:index.php");
   
};
?>




