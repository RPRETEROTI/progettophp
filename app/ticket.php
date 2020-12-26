<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  

	<?php 
	   
	 session_start();?>	  
	  

	  

		  
<script>

$(document).ready(function(){
    $(".vmenu").mouseover(function(){
        $(this).css("background-color","red");
    });
$(".vmenu").mouseout(function(){
        $(this).css("background-color","");
    });

});
</script>



<script type="text/javascript">
	function cambiamenu(){
		$(".normale").hide();
		$(".sorpr").show();
		}
</script>
	<script type="text/javascript">
	function ritornamenu(){
		$(".sorpr").hide();
		$(".normale").show();
	}
</script>

		
		
	<script>
$(document).ready(function(){
 if(document.documentElement.clientWidth>1200){


 $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $(".nave").css("height","19%");
     $("li").css("top","0px");
	  $(".icon").css("top","-58px");
		$(".nave").css("top","0px");
	} else {
      $(".nave").css("height","23%");;
    $("li").css("top","20px");
	 $(".icon").css("top","-40px");
	$(".nave").css("top","0px");
	}
  });
}});
</script>	


<script>
$(document).ready(function(){
 if(document.documentElement.clientWidth<965){


 $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $(".nave").css("height","19%");
     $("li").css("top","0px");
	  $(".icon").css("top","-58px");
		$(".nave").css("top","0px");
	} else {
      $(".nave").css("height","23%");;
    $("li").css("top","20px");
	 $(".icon").css("top","-40px");
	$(".nave").css("top","0px");
	}
  });
}});
</script>	

<script>
$(document).ready(function(){
 if(document.documentElement.clientWidth<768){


 $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $(".nave").css("height","19%");
     $("li").css("top","0px");
	  $(".icon").css("top","-58px");
		$(".nave").css("top","0px");
	} else {
      $(".nave").css("height","25%");;
    $("li").css("top","20px");
	 $(".icon").css("top","-40px");
	$(".nave").css("top","0px");
	}
  });
}});
</script>	
	  
	
	  
	  
	  <style>
	
	a.fa:hover {
  color: black;
}
a.fa {
  text-decoration: none;
}	
.butt {
    height: 11em;
    width: 50%;
    padding-top: 0px;
    position: relative;
    margin-left:3em;
}
	
	.ticket{
		
	font-family:Swistblnk Monthoers;
	font-size:2em;text-align:center;color:red;
	}	
	
	
	.art {
padding:0%;
}		
		
	

	.but{position:relative;top:2rem;left:10rem;
		}
	

	
	.bordo{ border:2px solid red;	}		





	 
	  
body{
font-size:100%;width:100%;line-height: 1.8;
}
  
h1{text-align:center;}



.carousel-caption{ border:4px solid white;height:300px;
}	  
		
.evento{
		
	color: red;
	font-family:Swistblnk Monthoers;
	font-size:5em;
	line-height: 100px;
	text-align: center;
	text-transform: uppercase;
	text-shadow: 0px 0px 10px #323232;
	position:relative;top:10px;
}	
	
.star{
	color: white;
	font-family:Swistblnk Monthoers;
	font-size:3em;
	line-height: 60px;
	text-align: center;
	text-transform: uppercase;
	text-shadow: 0px 0px 10px #323232;
	position:relative;	top:30px;
}
.imgcarous{
	height:345px;
}		
.uno{ border:1px solid blue;z-index:5;
	  }	  
.due{ border:1px solid blue;padding:0px;margin-left:0px;
	  }	  
	.tre{ border:1px solid blue;
	  }	  
	.quattro{ border:1px solid blue;
	  }	  
		
		


.ter{margin-left:0px;height:100%;
	}
.qua{height:100%;
	}
		
.nave ul{	
list-style-type:none;

}
.nave li{	
display:inline-block;
text-align: center;
padding: 5px 9px;
font-family:Swistblnk Monthoers;
text-decoration:none;
position:relative;
}
li a#inizio{
color:white;
border-bottom:14px solid blue; 
background-color:black;
} 

li a.pagina{
border-bottom:14px solid white; 
color:black;
}

#logos{width:100%;height:100%;
}
a.icon {font-size:30px;color:white;
}
.prima { 
transition: top 0.1s;
z-index:5;
width:100%; position:relative;}
.nave {
background-color:#7fc4f5;
position:fixed;
transition: top 0.1s;
z-index:8;width:100%;height:20%;
}	
  
#subdrop {
color: black;
padding: 20px 10px;
text-decoration: none;
text-align:center;
background-color: #f9f9f9;	
display:inline-block;}
	
#subdrop:hover {
background-color: blue;
}
	



@media screen and (max-width:1700px) {
	.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
	.cover h1{
font-size:10em;}
	.ads{	
	
	font-size:6em;
	}		


	.nave li{	
font-size:35px;}
.nave {	
height:29%;
}.imgcarous{
	height:385px;
}		
.content {padding-top:136px; }		
}

@media screen and (max-width:1200px) {
	.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
	.cover h1{
font-size:10em;}
	.ads{	
	
	font-size:6em;
	}		


	.nave li{	
font-size:32px;top:10px;
}
.nave {	
height:19%;
}	
.content {padding-top:110px; }
}
@media screen and (max-width:992px) {
	.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
	.cover h1{
font-size:10em;}
	.ads{	
	
	font-size:6em;
	}		


	.nave li{	
font-size:25px;
}
.nave {	
height:23%;
}.content {padding-top:126px; }
}
		
@media screen and (max-width:850px) {
	.fa {
   padding:20px 8px;
  font-size: 36px;
  

}
	.nave li{	
font-size:20px;
}.ads{	
	
	font-size:6em;
	}		

.nave {width:100%;height:23%;}.content {padding-top:138px; }
}

@media screen and (max-width:767px) {
.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
.cover h1{
font-size:10em;}
.ads{	
	
	font-size:6em;
	}		
.nave {background-color:#039ed8; }
.nave li{display:none;}
.nave {width:100%;height:25%;}
#logos{width:100%;height:100%;
}
.nave.responsive li{display:block;font-size:30px;padding-top:6px;padding-bottom:6px;position:relative;right:50px;}
ul{margin-top:80px;}
.nave.responsive {position:fixed;}
a.icon {
display:block;
}
.as{display:inline-block;
position: relative;
right:0px;
top:8px;
}
.cantante{
	font-size:2em;
	position: relative;
    top: 100px;
		}
	.scelta{top:12em;
		}
.content {padding-top:132px; }	
}	
@media screen and (max-width:576px) {
.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
.cantante{
	font-size:4em;
	position: relative;
    top:0px;
		}
.cover h1{
font-size:6em;}
.ads{	
	
	font-size:4em;
	}	
}
			
.sorpr{display:none;width:100%;height:100%;background-color:#1f57a2;
}		
.sorpresa ul{position:relative;margin-top:10px;list-style-type:none;
}	
.sorpresa li a#inizio{
color:white;
border-bottom:10px solid blue; 
background-color:black;
display:block;
text-align: center;
padding: 5px 9px;
font-family:Swistblnk Monthoers;
text-decoration:none;
position:relative;
font-size:35px;
} 
.sorpresa li a.pagina{
border-bottom:10px solid white; 
color:black;
display:block;
text-align: center;
padding: 5px 9px;
font-family:Swistblnk Monthoers;
text-decoration:none;
position:relative;
font-size:35px;
}
.sorpresa li a.icona{
font-size:40px;
color:black;
display:block;
text-align:left;
padding: 5px 9px;
font-family:Swistblnk Monthoers;
text-decoration:none;
position:relative;
font-size:35px;
}

.sorpresa li a#subdrop {
font-size:50px;
color:black;
display:block;
text-align:right;
padding: 5px 9px;
font-family:Swistblnk Monthoers;
text-decoration:none;
position:relative;
font-size:35px;
background-color: #f9f9f9;	
}
	
.sorpresa li a#subdrop:hover {
background-color: blue;
}
	
.b{
background-color: #e8e8e8 ;
}	
.ads{	
	font-family:Swistblnk Monthoers;
	font-size:6em;
	}
.inizi{padding:0%; margin-left:8%;
	}	
.inizii{padding:0%; margin-right:6%;
	}	
	
.news{position:relative;margin:0px auto;
		}	
	
	

	.fa {

  text-decoration: none;
 
}
.fa:hover {
    opacity: 0.9;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}	
	
	.ades{
	font-family:Swistblnk Monthoers;
	font-size:4em;
	}
	.ades1{
	font-family:Swistblnk Monthoers;
	font-size:1em;
	}
	.ades2{
	border-top:1px solid black;border-bottom:1px solid black;
	
	}	
	
.a{border:5px solid #1ab3c1;
		}
#logos1{width:100%;height:40%;
	}		
	
.ar{background-color:white;
		}


	.art {
padding:0%;
}		

	
	
	
	
.cover {
	height:30rem;
	background-image: url(backsito.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
.cover h1 {
	color: white;
	font-family:Swistblnk Monthoers;
	line-height: 100px;
	text-align: center;
	text-transform: uppercase;
	text-shadow: 0px 0px 10px #323232;
	position:relative;
	top:17rem;

	}
	
	
.spot {
	color:black;
	font-family:Swistblnk Monthoers;
	font-size:4em;
	}	
	
		
	


</style>














	
	 <title>Piscinas Sounds </title>
  </head>
  <body>
   
	<div class="normale container-fluid">
	   <div class="pr nave row" id="myTopnav">
<div class="ter log col-5 col-sm-5 col-md-4">
		 <img id="logos" src="a.png" alt="">
	    </div> 
        <div class="qua col-5 col-sm-4 col-md-8">
		<ul>
		<li> <a class="vmenu pagina" href="index.php" >HOME</a></li>
		   <li><a class="vmenu pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
		    <li><a class="vmenu pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>		
		    <li><a class="vmenu pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
		   <?php
			 if(isset($_SESSION["utente"])){
			 $profile = $_SESSION["utente"]; 
			echo "<li class=\"drop\"> <a id=\"inizio\" href=\"profilo.php?profilopagina=$profile\">MYPAGE</a>";	}	
			
			?>
			
		    <li><a id="subdrop" href="logout.php" tabindex="2" accesskey="8">LOGOUT</a></li>
		 
        </ul>
		</div>
		  <div class="as col-2 col-sm-3 d-md-none">
		<a href="#" class="icon" onclick="cambiamenu();">☰</a>
		</div>
	</div>	 
		<div class=" content">	 
	<div class=" row">
	     <div class="cover art col-sm-12 col-md-12">
 
			<h1>TICKET</h1>
			
			
			</div>
		 </div>
			
<?php
	
	  $host = "127.0.0.1:3307";
   $phpuser = "root";
   $phppwd = "";
   $dbname = "approcciavanzatiprogetto";
		 
   $conn = new mysqli($host,$phpuser,$phppwd,$dbname);
		  
		  
$profile=$_REQUEST["ticketpage"];
		  
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
   $citta= $row["citta"];
   $cap= $row["zip"];
   $stato= $row["stato"];
   $intestatario= $row["intestatario"];
	   

	 echo" <div class=\"row\">";
	  
	 	  echo" <div class=\" a col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6\">";
	  
		  echo"<legend> <h2 class=\"ticket\">ACQUISTO</h1></legend>";
	 
  if(isset($_SESSION["utente"])){
	  $ut = $_SESSION["utente"]; 

 
	echo" <form  action=\"completaacquisto.php?profiloscelto=$ut\" method=\"post\"  >";
	   
		  echo" <div class=\"form-row\">";
	  
			  echo"<legend><h6 class=\"ticket\">Dati personali</h6></legend>";
	  
		  echo"<div class=\"form-group col-12 col-sm-12 col-md-6\">";
	  

	
		  echo"<label for=\"nome\" class=\"col-form-label\">Nome</label>";
	  
	  echo"<input name=\"nome\" type=\"text\" id=\"nome\" class=\"form-control\" placeholder=\"$nome\"></div>";
	  
	  echo"<div class=\"form-group  col-12 col-sm-12  col-md-6\">";
	  
      	  echo"<label for=\"cogn\" class=\"col-form-label\">Cognome</label>";
	  
     	  echo" <input type=\"text\" class=\"form-control\" id=\"cogn\"  name=\"cogn\" placeholder=\"$cognome\">";
	  
   	  echo" </div>";
	  
      echo"</div>";
	  echo"<div class= \"form-row\">";
	  
	  	  echo"<div class=\"form-group  col-12 col-sm-12 col-md-6\">";
	  
      	  echo "<label for=\"email\">Email</label>";
	  
      	  echo"<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"$email\">";
	  
    	  echo"</div>";
	  
	
	
		  	  echo"<div class=\"form-group  col-12 col-sm-12 col-md-6\">";
	  
      	  echo"<label for=\"cemail\"> Conferma email</label>";
	  
      	  echo"<input type=\"email\" class=\"form-control\" id=\"cemail\" name=\"cemail\" placeholder=\" $email\">";
	  
    	  echo"</div>";
	   echo"</div>";
	  
	
		  echo"<div class= \"form-row\">";
	  
		  echo"<div class=\"form-group col-8 col-sm-8 col-md-8\">";
	  
    	  echo"<label for=\"indirizzo\">Indirizzo</label>";
	  
    	  echo"<input type=\"text\" class=\"form-control\" id=\"indirizzo\" name=\"indirizzo\" placeholder=\"$indirizzo\">";
	  
  	  echo"</div>";
	  
  	  echo"<div class=\"form-group col-4 col-sm-4 col-md-4\">";
	  
   echo" <label for=\"nciv\">N.civico</label>";
	  
    	  echo"<input type=\"text\" class=\"form-control\" id=\"nciv\" name=\"nciv\" placeholder=\"$numerocivico\">";
	  
 	  echo" </div>";
	  
  	  echo"</div>";
	  
  
  
  
    echo"<div class=\"form-row\">";
	  
      echo"<div class=\"form-group  col-6 col-sm-6 col-md-6\">";
	  
        echo"<label for=\"city\">City</label>";
	  
        echo"<input type=\"text\" class=\"form-control\" id=\"city\ name=\"city\" placeholder=\"$citta\">";
	  
      echo"</div>";
	  
      echo"<div class=\"form-group col-4 col-sm-4 col-md-4\">";
	  
        echo"<label for=\"state\">State</label>";
	  
        echo"<select name=\"state\" class=\"form-control\">";
	  
          echo"<option selected>$stato</option>";
	  
	  
$host = "127.0.0.1:3307";
   $phpuser = "root";
   $phppwd = "";
   $dbname = "approcciavanzatiprogetto";
 $conn = new mysqli($host,$phpuser,$phppwd,$dbname);
$query = "select nomenaz from nazioni ";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
$codice = $row["codice"];
        $nazione = $row["nomenaz"];
        echo "<option value=\"$codice\">$nazione</option>" ;
}      

echo"</select>";
	  
     echo" </div>";
	  
      echo"<div class=\"form-group col-2 col-sm-2 col-md-2\">";
	  
        echo"<label for=\"zip\">Zip</label>";
	  
        echo"<input type=\"text\" class=\"form-control\" id=\"zip\" name=\"zip\" placeholder=\"$cap\">";
	  
      echo"</div>";
	  
    echo"</div>";
	  
  
  
  	  echo"<div class= \"form-row\">";
	  
	  echo"<div class=\"form-group  col-12 col-sm-12 col-md-6\">";
	  
      echo"<label for=\"iban\">Iban</label>";
	  
      echo"<input type=\"text\" class=\"form-control\" id=\"iban\" name=\"iban\" placeholder=\"$iban\">";
	  
   echo" </div>";
	  
    echo"<div class=\"form-group  col-12 col-sm-12 col-md-6\">";
	  
      echo"<label for=\"intestatario\">Intestatario</label>";
	  
      echo"<input type=\"text\" class=\"form-control\" id=\"intestatario\" name=\"intestatario\" placeholder=\"$intestatario\">";
	  
    echo"</div>";
	  
    echo"</div>";
	  
	  echo"<div class= \"form-row\">";
	  
    echo"<div class=\"form-group col-8 col-sm-8 col-md-8\">";
	  
        echo"<label for=\"biglietto\">Tipologia biglietto</label>";
	  
       echo" <select  name=\"biglietto\" class=\"form-control\">";
	  echo"<option value=\"Daily7\">Biglietto giornaliero:7/09/2018-30€</option>";
	  
        echo"<option  value=\"Daily8\">Biglietto giornaliero:8/09/2018-30€</option>";
	  
	    echo"<option  value=\"Daily9\">Biglietto giornaliero:9/09/2018-30€</option>";
	  
	    
	  
	    echo"<option  value=\"Twodays_7/8\">Biglietto bigiornaliero:7-8/09/2018-45€</option>";
	  
	     echo"<option  value=\"Twodays_7/8\">Biglietto bigiornaliero:8-9/09/2018-45€</option>";
	  
	     echo"<option  value=\"Threedays_7/8/9\">Biglietto trigiornaliero:7-8-9/09/2018-75€</option>";
	  
	    echo"</select>";
	  
      echo"</div>";
	  
	  echo"<div class=\"form-group col-4 col-sm-4 col-md-4\">";
	  
      echo"<label for=\"quantita\">Quantità</label>";
	  
      
       echo" <select name=\"quantita\" class=\"form-control\">";
	  
     
	  
          echo"<option value=\"1\">1</option>";
	  
        echo"<option value=\"2\">2</option>";
	  
	    echo"<option value=\"3\">3</option>";
	  
	    echo"<option value=\"4\">4</option>";
	  
	    echo"<option value=\"5\">5</option>";
		echo"</select>";
	
	echo"</div>";
	  
 echo"</div>";
	  
    
	echo"<div class= \"form-row\">";
	
	 echo"<div class=\"form-group col-md-8\">";
	echo"<button type=\"submit\" class=\"butt btn btn-primary\" >Acquista</button>";
	  
  echo"</div>";
  echo"</div>";


 echo"</form>";
	  
		  echo" </div>";
	  
			 echo"<div class=\" a  col-12 col-sm-12 col-md-6\">";			

	
	echo" <img class=\"w-100\" src=\"a.png\" >";
		if(isset($_SESSION["carrello"])){
				          

	echo" <h2 class=\"spot\">Acquisto confermato.</h2>";
};
echo" <h2 class=\"spot\">Il miglior festival della Sardegna ti aspetta!</h2>";
		
		echo"</div>";
		echo"</div>";
	 
  }
 ?> 
  
 
<footer>
	   <div class=" ar row"> 
   <div class=" a col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
	 <img id="logos1" src="a.png" alt="">
	 <div class="ades2">
	 <p class="ades1" style="text-align:center;">7-8-9 Settembre 2018<p>
	  <p class="ades1" style="text-align:center;">Piscinas(Sardegna)<p></div>
	 </div>
	 
	 
	<div class=" a col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
		   <div class=" row"> <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
	<h5 class="ades" style="text-align:center;">Contatti</h5> </div> </div>
	  <div class="row" style="margin-top:21px;margin-bottom:10px;"> <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
	<div style="text-align:center;"><a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a></div>
 </div> </div></div>
	 	 
<div class="a col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
	 <form action="newsletter.php" method="post">
	
  <div class="form-group row">
	 <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
	    <h5 class="ades" style="text-align:center;">Newsletter</h5>	
	
       
	
	   <label for="em" class="col-form-label"></label>
	<input type="email" name="em" id="em" class="form-control" placeholder="Email">
 
   </div>   </div>
   
           <div class="form-group row">
	   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
	   
	   
	
	     <div style="text-align:center;"> <button type="submit" class="btn btn-primary">Iscriviti</button></div>
	   
	   
	   
	</div>
    </div>

	</form>
	</div>  
  
  
  
  </div>
	 
 </footer>
  </div> </div>    
<div class="sorpr container-fluid">
	<div class="sorpresa row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
		<ul><li><a href="#" class="icona" onclick="ritornamenu();">X</a></li>
		    <li><a id="subdrop" href="registrazione.php" tabindex="2" accesskey="8">LOGIN</a></li>
			<li> <a id="inizio" href="getuser.php" >HOME</a></li>
            <li><a class="vmenu pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
		    <li><a class="vmenu pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>		
		    <li><a class="vmenu pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
		    <li><a class="vmenu pagina" href="registrazione.php" tabindex="2" accesskey="8">MYPAGE</a></li>
		</ul>    
	</div>     
	 </div>
 </div>	
  </body>

  
  
  
  
  
  </html>

