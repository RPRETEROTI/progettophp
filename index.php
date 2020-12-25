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
	  








		

<?php 
 session_start();
unset($_SESSION["faq"]);
 ?>	  


	  
	  
<style>
	  
  
	  
body{
font-size:100%;width:100%;line-height: 1.8;
}
.content {padding-top:138px; }		  
h1{text-align:center;}

a.fa:hover {
  color: black;
}
a.fa {
  text-decoration: none;
}

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
	height:28.5rem;
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
z-index:8;width:100%;
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
	.nave li{	
font-size:35px;}
.nave {	
height:23%;
}.content {padding-top:136px; }	
.ads,.abn{	
font-size:6em;		
}	
.inizii{padding:0%; margin-right:6%;
	}
}
@media screen and (max-width:1200px) {
	.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
	.nave li{	
font-size:32px;top:10px;
}
.nave {	
height:23%;
}.content {padding-top:110px; }
.ads,.abn{	
font-size:6em;		
}
.inizii{padding:0%; margin-right:6%;
	}
}
@media screen and (max-width:992px) {
.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
	.nave li{	
font-size:25px;
}
.inizii{padding:0%; margin-right:6%;
	}
.nave {	
height:23%;
}.content {padding-top:126px; }
.ads,.abn{	
font-size:6em;
}
}		

@media screen and (max-width:850px) {
	.fa {
   padding:20px 8px;
  font-size: 36px;
  

}
	.nave li{	
font-size:20px;
}
.inizii{padding:0%; margin-right:6%;
	}
.nave {width:100%;height:23%;}.content {padding-top:138px; }
.ads,.abn{	
font-size:6em;

}
}
@media screen and (max-width:767px) {
.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
.nave li{display:none;}
.nave {width:100%;height:25%;}
#logos{width:100%;height:100%;
}
.inizii{padding:0%; margin-right:0%;margin-left:6%;
	}

.content {padding-top:132px; }
.nave {background-color:#039ed8; }
a.icon {
display:block;
}
.as{display:inline-block;
position: relative;
right:0px;
top:8px;
}
.ads,.abn{	
font-size:5em;

}	
}	
@media screen and (max-width:575px) {
.fa {
   padding:20px 21px;
  font-size: 36px;
  

}
.evento {font-size:3em; }
.ads,.abn{	
font-size:3em;
	}

.inizii{padding:0%; margin-right:0%;margin-left:6%;
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
	
	}
.inizi{padding:0%; margin-left:6%;
	}	
	
	
.news{position:relative;margin:0px auto;
		}	
	
	

	.fa {

  text-decoration: none;

}
.fa:hover {
    opacity: 0.7;
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
	.abn{
	font-family:Swistblnk Monthoers;
	
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
	.marchio{margin-left:5em;margin-right:5em;height:40%;
	}
	
	.logone{margin-top:9rem;height:20rem;
		}
		.news{position:relative;padding-bottom:5rem;
		}

	.stacco{margin-top:2rem;
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
		    <li> <a id="inizio" href="provaajax.php" >HOME</a></li>
            <li><a class="vmenu pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
		    <li><a class="vmenu pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>		
		    <li><a class="vmenu pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
		   
	    
				<?php
			 if(isset($_SESSION["utente"])){
			 $ut = $_SESSION["utente"]; 
			echo "<li class=\"drop\"> <a class=\"pagina\" href=\"profilo.php?profilopagina=$ut\">MYPAGE</a>";
			 echo" <li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";}
		else{
			echo"<li><a class=\"vmenu pagina\" href=\"registrazione.php?causa=0\" tabindex=\"2\" accesskey=\"8\">MYPAGE</a></li>";
		    echo" <li><a id=\"subdrop\" href=\"registrazione.php?causa=0\">LOGIN</a></li>";	}	
		?>
	</ul>
		</div>
		  <div class="as col-2 col-sm-3 d-md-none">
		<a href="#" class="icon" onclick="cambiamenu();">☰</a>
		</div>
	</div>	 
	  <div class="content">
	  <div class="uno row">
	     <div class="due scorro col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
 <div class="tre scorro carousel slide" data-ride="carousel" id="miocarousel">
			    <ol class="carousel-indicators">
				  <li data-target="#miocarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#miocarousel" data-slide-to="1"></li>
				  <li data-target="#miocarousel" data-slide-to="2"></li>
				 <li data-target="#miocarousel" data-slide-to="3"></li>
				</ol>
				<div class="quattro carousel-inner">
				   <div class="cinque carousel-item active">
				    <img  class="imgcarous w-100"  src="backsito.jpg" alt="copertina">
					<div class="carousel-caption col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
						<h1 class="star">PISCINASSOUND</h1>
					<h2 class="evento">7-8-9<br/> Settembre 2018</h2>
		            </div>
					</div>
					<div class="sei carousel-item">
				    <img  class="imgcarous w-100"  src="trentau.jpg" alt="copertina">
					<div class="carousel-caption col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
						<h1 class="star">PRODIGY</h1>
					<h2 class="evento">7 Settembre 2018</h2>
					</div>	
					</div>
					<div class="sette carousel-item">
				    <img  class="imgcarous w-100"  src="unos.jpg" alt="copertina">
				   <div class="carousel-caption col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
					<h1 class="star">MAX GAZZE'</h1>
					<h2 class="evento">8 Settembre 2018</h2>
					</div>
					 </div>
				<div class="otto carousel-item">
				     <img  class="imgcarous w-100"  src="duess.jpg" alt="copertina">
					 
					<div class="carousel-caption col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
					   	<h1 class="star">SAMUEL</h1>
					<h2 class="evento">9 Settembre 2018</h2>
						</div>
					   </div>
				   </div>
					<a class="carousel-control-prev" href="#miocarousel" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#miocarousel" role="button" data-slide="next">
				  <span class="carousel-control-next-icon"></span>
				</a>
			</div>
			</div>
		 </div>
				   

     
 <div class=" stacco row">
		 
		 
		 <div class="inizi col-10 col-sm-10 col-md-5 col-lg-5 col-xl-5">
		   <h2> SU DI NOI </h2>
			
			<p style="text-align:left;">
			Non solo una sequenza di concerti e artisti per riempire un cartellone, ma una line up ambiziosa e mai schiava delle mode che mescola
			leggende internazionali e nuove stelle italiane.

  </p> <p style="text-align:left;">In tre giorni si scoprono musiche nuove, strane, forti, non necessariamente rassicuranti, ma che fanno bene, 
  si urla fino a perdere la voce, si salta e balla come mai prima, e ci si risveglia felici, non perchè ne vale la pena, ma perchè ne vale la gioia…

</p> <p style="text-align:left;">Un festival che osa altro che non sia l’ovvietà, l'(im)possibile al posto del facile, senza ostinarsi 
ad inseguire quel che sarà o rimpiangere ciò che è stato, e farlo proponendo una varietà di attitudini e musiche diverse che difficilmente 
si possono vedere tutte insieme nel quotidiano. Sarà tutto come non avete immaginato.

</p> <p style="text-align:left;">PISCINAsSOUND racconta le città del mondo a Piscinas e Piscinas, 
a sua volta, al mondo intero rendendo centrali quelle musiche di confine e quei luoghi di periferia dove incontrarsi e 
dove incontrare, dove trovare romantiche memorie e contemporanee suggestioni in concerti di assoluta eccellenza internazionale, 
scambiare esperienze in momenti di formazione, scoprire produzioni originali ed eventi esclusivi, divenendo cassa di risonanza dei 
linguaggi della musica e delle sue diverse contaminazioni con le altre forme dell’arte.
<h2 class="ads">7-8-9 Settembre 2018</h2>
</p> 
<p style="text-align:left;">La Musica va goduta, non va spiegata.
Perchè l’unico istante in cui il futuro può essere deciso è questo istante.
Che il PiscinasSound possa aver inizio.
	Non solo una sequenza di concerti e artisti per riempire un cartellone, ma una line up ambiziosa e mai schiava delle mode che mescola
			leggende internazionali e nuove stelle italiane.
Non solo una sequenza di concerti e artisti per riempire un cartellone, ma una line up ambiziosa e mai schiava delle mode che mescola
			leggende internazionali e nuove stelle italiane.
Non solo una sequenza di concerti e artisti per riempire un cartellone, ma una line up ambiziosa e mai schiava delle mode che mescola
			leggende internazionali e nuove stelle italiane.
		
			
	
			
<p style="text-align:left;">Il PiscinasSound festival si svolge per il secondo anno in mezzo alle dune di Piscinas nell'entroterra della Sardegna.
	  E' uno dei festival estivi più interessanti per scoprire artisti indipendenti italiani e internazionali.La lineup 2018 si conferma molto varia</p>
	  <p style="text-align:left;">Non vi resta che venire a trovarci e prendere i biglietti del festival</p>
	  		</div>	
			
			
			
			
			
			
			
	  
   <div class="inizii b col-10 col-sm-10 col-md-5 col-lg-5 col-xl-5">
		   <h3> HANNO DETTO DEL PISCINAsSOUND </h3>
  
 

<p style="text-align:left;">“Uno dei festival italiani più raffinati con una line up ricercatissima!“ <em>Radio Deejay</em></p> 

<p style="text-align:left;">“Con Todays l’Italia sembra finalmente adeguarsi agli standard elevati europei!” Soundwall</p> 

<p style="text-align:left;">“Una vera immersione urbana, in assoluto tra le mete più cool dell’estate italiana!“ Ansa</p> 

<p style="text-align:left;">“Assoluta eccellenza internazionale, all’altezza dei migliori festival d’Europa!“ LaPresse</p> 

<p style="text-align:left;">“Un festival clamoroso!“ Vogue Italia</p> 

<p style="text-align:left;">“Todays è diventato uno dei principali festival nazionali e uno dei pochi veri appuntamenti internazionali.
 La certezza di non avere mai un live sotto un livello che va da ottimo a eccellente” Rumore Mag</p> 

<p style="text-align:left;">“Mai monotono e capace di soddisfare le aspettative di chi è giunto da tutta Europa!” Sentireascoltare</p> 

<p style="text-align:left;">“Per una volta il rientro dalle vacanze non è più un dramma!” Zero</p> 

<p style="text-align:left;">“Con Todays Torino è al centro del mondo rock europeo!” </p> 
La Stampa

<p style="text-align:left;">“Todays conferma Torino la città più attiva in musica!” Internazionale</p> 

<p style="text-align:left;">“Il festival che vuole osare, ricco di suggestioni, grandi nomi e primizie!” La Repubblica</p> 

<p style="text-align:left;">“Todays dimostra come sia possibile costruire una prospettiva che va oltre il semplice evento” Rolling Stone</p> 

<p style="text-align:left;">“Impulso vitale e forza motrice di aggregazioni culturali dedite all’innovazione e alla ricerca” Rockerilla</p> 

<p style="text-align:left;">“Un importante appuntamento europeo” Deer Waves</p> 

<p style="text-align:left;">“Un evento davvero unico, emozionante e già archiviato dalla Storia!” Jaymag
<h2 class="ads">Enjoy The Festival</h2></p> 
  
  </div>
  
  
  
  </div>
   
 
 
 <div class="row">

     
	 <div class=" marchio d-none d-md-block col-md-10">
<img  class="logone w-100" src="a.png" alt="">
</div>  
	  </div> 
     
 
  
  <div class="row"> 
  <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">
  <h2 class="abn" style="text-align:center;">ABBONAMENTI</h2></div></div>
  <br/> <br/>
  <div class="row"> 
   
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
   
     <div class="row"> 
   <div class=" news col-12 col-sm-12 col-md-3 col-lg-4 col-xl-4">
   <div class="card">
  <img   class="card-img-top" src="ticket.png" alt="ticket">
  <div class="card-body">
<a href="accessoticket.php" class="btn btn-primary">Acquista subito</a>
  </div>
</div>
 </div>
  
     <div class=" news  col-12 col-sm-12  col-md-3 col-lg-4 col-xl-4">
   <div class="card">
  <img   class="card-img-top" src="tick2.png" alt="ticket">
  <div class="card-body">
<a href="accessoticket.php" class="btn btn-primary">Acquista subito</a>
  </div>
</div>
 </div>
  
   <div class=" news  col-12 col-sm-12  col-md-3 col-lg-4 col-xl-4">
   <div class="card">
  <img   class="card-img-top" src="tick3.png" alt="ticket">
  <div class="card-body">
<a href="accessoticket.php" class="btn btn-primary">Acquista subito</a>
  </div>
</div>
 </div>
  
   </div> 
   </div>  </div> 
  
  
  

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
		    <?php
			 if(isset($_SESSION["utente"])){
			 $ut = $_SESSION["utente"]; 
			 echo" <li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";}
		else{
		    echo" <li><a id=\"subdrop\" href=\"registrazione.php?causa=0\">LOGIN</a></li>";	}	
		?>
		<li> <a id="inizio" href="" >HOME</a></li>
            <li><a class="vmenu pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
		    <li><a class="vmenu pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>		
		    <li><a class="vmenu pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
		 <?php
			 if(isset($_SESSION["utente"])){
			 $ut = $_SESSION["utente"]; 
			echo "<li class=\"drop\"> <a class=\"pagina\" href=\"profilo.php?profilopagina=$ut\">MYPAGE</a>";	}	
			 else{
			echo"<li><a class=\"vmenu pagina\" href=\"registrazione.php?causa=0\" tabindex=\"2\" accesskey=\"8\">MYPAGE</a></li>";
		  	}	
		?>
		
		</ul>    
	</div>     
	 </div>
 </div>	
  </body>
  </html>
  
  
  
  
  



 


 







 
 
 
 
 
 
 
 
 
 

   
   
   
   
   
  
	





 
   

 


	

































		
		
 
  
	
					
		
		 
		 
		 
		
		 
		 
		
 
 
 






 


 
	