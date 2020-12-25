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
		session_start();
		unset($_SESSION["faq"]);					     				       
			   ?>						   
						  
	  
	  
	  
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
	.mypage{
		
	font-family:Swistblnk Monthoers;
	font-size:2em;text-align:left;color:black;
	}  
	.but{position:relative;top:2rem;left:4rem;
		}
	
	
	.profilo{
		
	font-family:Swistblnk Monthoers;
	font-size:4em;text-align:center;color:red;top:2em;
	}	
	
.profiloo{
		
	font-family:Swistblnk Monthoers;
	font-size:2em;text-align:center;color:red;
	}	
	
		
@media (min-width: 500px) and (max-width:992px) {
.proi{	
width: 22rem;
height:12rem;
}

	}
	@media (min-width: 993px) and (max-width:3000px) {
.proi{	
width: 22rem;
height:18rem;
}

	}	
	
.b{
		
	background-color: #e8e8e8 ;
	
	}	


		
	
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
.aes{	
	font-size:2em;
	}
}

@media screen and (max-width:1200px) {
	.cover h1{
font-size:10em;}
	.ads{	
	
	font-size:6em;
	}		


	.fa {
   padding:20px 21px;
  font-size: 25px;
  

}
	.nave li{	
font-size:32px;top:10px;
}
.nave {	
height:19%;
}	
.content {padding-top:110px; }
.aes{	
	font-size:2em;
	}
}

@media screen and (max-width:1024px) {
	.fa {
   padding:20px 21px;
  font-size: 25px;
  

}
	} 


@media screen and (max-width:992px) {
.fa {
 
  font-size: 36px;
    padding:20px 21px;

}
.mypage,.profiloo{
		

	font-size:1.5em;
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
.aes{	
	font-size:2em;
	}
}
		
@media screen and (max-width:850px) {
	
	.fa {
 
    padding: 20px 8px;
    
  font-size: 36px;
  

}
	.mypage,.profiloo{
		

	font-size:1.5em;
	}  
	.nave li{	
font-size:20px;
}.ads{	
	
	font-size:6em;
	}		

.nave {width:100%;height:23%;}.content {padding-top:138px; }
.aes{	
	font-size:2em;
	}
}

@media screen and (max-width:767px) {
.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
.mypage,.profiloo{
		

	font-size:1.5em;
	}  
.aes{	
	font-size:2em;
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
.aes{	
	font-size:1.2em;
	}	
	.mypage,.profiloo{
		

	font-size:1.5em;
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
			.up{

top:0em;left;2em;
}	
		.foto{
position:relative;
top:2em;
}	
	.calendario {
border-radius: 8.75rem;max-width:100%;height:90%;
}
		.fotopr{
height:50%;
}	
		.fotocarica{
margin:2em;
}		
		.fotopr1{
padding-top:2rem;
}	
		.lista{
list-style-type:none;
}	
		.bigliet{
margin-bottom:3em;
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
		<?php
		 $host = "127.0.0.1:3307";
   $phpuser = "root";
   $phppwd = "";
   $dbname = "approcciavanzatiprogetto";
		 
   $conn = new mysqli($host,$phpuser,$phppwd,$dbname);
		  
		  
$profile=$_REQUEST["profilopagina"];
		  
		  $sql = "select usr from profilo where usr=\"$profile\" ";

		  $result = $conn->query($sql);
		  
		  $row = $result->fetch_assoc();
		  $profiloscelto = $row["usr"];
		
		
		echo "<li> <a class=\"vmenu pagina\" href=\"index.php?profilo=$profiloscelto\">Home</a></li>"
		
		?>
		
		
		 <li><a class="vmenu pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
		    <li><a class="vmenu pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>		
		    <li><a class="vmenu pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
		    <li><a id="inizio" tabindex="2" accesskey="8">MYPAGE</a></li>
		    <li><a id="subdrop" href="logout.php" tabindex="2" accesskey="8">LOGOUT</a></li>
	    </ul>
		</div>
		  <div class="as col-2 col-sm-3 d-md-none">
		<a href="#" class="icon" onclick="cambiamenu();">☰</a>
		</div>
	</div>	 
		 
		 
		
		   <div class="content">
		  <div class=" row">
	     <div class="cover art col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
 
			<h1>MyPAGE</h1>
			
			
			</div>
		 </div> 
	  
	  <div class="row" style="margin-top:20px;">
	    
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
	  
	  
	echo "<div class=\" col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3\">";
	echo "<h1 class=\"profilo\">FOTO</h1>";  
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
	echo"<div class=\"custom-file form-group  col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">";
	  echo" <input type=\"file\" name=\"fileToUpload\"class=\"custom-file-input\" id=\"custom-File\"><label class=\"up custom-file-label\" for=\"customFile\">Inserisci foto</label>";
 echo"</div>   </div>";  

 echo"<div class=\"form-row\">";
 echo"<div class=\"form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">";
    echo" <input type=\"submit\"  class= \"foto btn btn-primary\" value=\"Upload Image\" name=\"submit\">";
     echo"</div>  </div> ";
	
    echo"</form> </div>";
	echo "</div>";
    echo "<div class=\" col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4\">";
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
				        
		  $sql1 = "select * from biglietti where username=\"$profile\" ";

		  $result = $conn->query($sql1);
		  
		 $quante_tuple = $result->num_rows;   
		 
	
		
	echo"<div class=\"bigliet col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4\">";
	 echo"<h1 class=\"profilo\">I MIEI BIGLIETTI</h1>";
		
		if( $quante_tuple  == 0){
		
		echo"<p class=\"profiloo\" >Al momento non hai acquistato nessun biglietto. Goditi il nostro festival e fai l'acquisto</p>";
		 echo"<div style=\"text-align:center;\" ><a href=\"ticket.php?ticketpage=$profiloscelto\" class=\"but btn btn-primary\">Acquista subito</a></div>";
  	}
	else  {

	echo" <ul  class=\"lista\">"; 
		 while($row = $result->fetch_assoc()){
			 	$quantita= $row["quantita"];
	$biglietto= $row["tipobiglietto"];


	  echo"<li class=\"mypage\">Ticket:$quantita $biglietto</li>";
	 }	
	

	echo" </ul>";
	
	
	echo"<div style=\"text-align:center;\" ><a href=\"artisti.php\" ><button aligncenter class=\" btn btn-primary\">Scopri il festival</button></a></div>";	
		echo"</div>";
	
 }
?>	  
</div>
		
		
		
		
		
 

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
	   
	   
	
	      <div style="text-align:center;"><button type="submit" class="btn btn-primary">Iscriviti</button></div>
	   
	   
	   
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
		    <li><a id="subdrop" href="logout.php" tabindex="2" accesskey="8">LOGOUT</a></li>
			<li> <a class="vmenu pagina" href="index.php" >HOME</a></li>
            <li><a class="vmenu pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
		    <li><a class="vmenu pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>		
		    <li><a class="vmenu pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
		    <li><a id="inizio" href="" tabindex="2" accesskey="8">MYPAGE</a></li>
		</ul>    
	</div>     
	 </div>
 </div>	
	



  </body>

  
  
  
  
  
  </html>
		 































