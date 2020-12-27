<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/main.css">

	<?php
	session_start();
	unset($_SESSION["faq"]);
	?>

	<style>
		.mypage {

			font-family: Swistblnk Monthoers;
			font-size: 1em;
			text-align: left;
			color: black;
		}

		.profilo {

			font-family: Swistblnk Monthoers;
			font-size: 2em;
			text-align: center;
			color: red;
		}

		.img-action {
			top: 0em;
			left: 2em;
		}

		.profile-photo {
			border-radius: 8.75rem;
			max-width: 100%;
			height: 90%;
		}

		.lista {
			list-style-type: none;
		}
	</style>
	<title>Piscinas Sounds </title>
</head>

<body>

	<div class="deskview container-fluid p-0 m-0 ">
		<div class="navigation-menu row m-0" id="myTopnav">
			<div class="col-10 col-sm-10 col-md-3 col-lg-5">
				<img id="logo" class="w-100" src="assets/images/logo.png" alt="">
			</div>
			<div class="d-none d-md-block col-md-9 col-lg-7">
				<ul class="pl-2">
					<?php
					$host = "127.0.0.1:3307";
					$phpuser = "root";
					$phppwd = "";
					$dbname = "approcciavanzatiprogetto";

					$conn = new mysqli($host, $phpuser, $phppwd, $dbname);


					$profile = $_REQUEST["profilopagina"];

					$sql = "select usr from profilo where usr=\"$profile\" ";

					$result = $conn->query($sql);

					$row = $result->fetch_assoc();
					$profiloscelto = $row["usr"];


					echo "<li> <a class=\"notActive pagina\" href=\"index.php?profilo=$profiloscelto\">HOME</a></li>"

					?> <li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
					<li><a class="notActive pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>
					<li><a class="notActive pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
					<li> <a id="activePage" href="">MYPAGE</a></li>
					<li><a id="subdrop" href="logout.php" tabindex="2" accesskey="8">LOGOUT</a></li>

				</ul>
			</div>
			<div class="container-menu-icon col-2 col-sm-2 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu();">☰</a>
			</div>
		</div>
		<div class="content">
			<div class=" row">
				<div class="cover col-12">
					<h1>MyPAGE</h1>
				</div>
			</div>

			<div class="row my-4">

				<?php

				$host = "127.0.0.1:3307";
				$phpuser = "root";
				$phppwd = "";
				$dbname = "approcciavanzatiprogetto";

				$conn = new mysqli($host, $phpuser, $phppwd, $dbname);


				$profile = $_REQUEST["profilopagina"];

				$query = "select * from profilo where usr=\"$profile\" ";

				$result = $conn->query($query);

				$row = $result->fetch_assoc();

				$usr_digitato = $row["usr"];
				$pwd_digitata = $row["passwr"];
				$nome = $row["nome"];
				$cognome = $row["cognome"];
				$indirizzo = $row["indirizzo"];
				$numerocivico = $row["numerocivico"];
				$iban = $row["iban"];
				$email = $row["email"];
				$foto = $row["imgprofilo"];
				$citta = $row["citta"];
				$cap = $row["zip"];
				$stato = $row["stato"];
				$intestatario = $row["intestatario"];


				echo "<div class=\" col-12 col-lg-3 \">";
				echo "<h1 class=\"profilo\">FOTO</h1>";
				echo "<div class=\"mx-2 row\">";
				echo "<div class=\"col-md-12\">";
				if ($foto != '') {
					echo "<img class=\"  profile-photo  w-100 \" src=\"./uploadimg/$foto\">";
				};
				if ($foto == '') {
					echo "<img class=\" profile-photo  w-100\" src=\"assets/images/samu.jpg\">";
				};
				echo "</div>";
				echo "</div> ";
				echo "<div class=\"d-flex justify-content-center row\">";
				echo " <form action=\"registrazionemodificata.php?profilo=$usr_digitato\" method=\"post\" enctype=\"multipart/form-data\">";
				echo "<div class=\"form-row\">";
				echo "<div class=\"custom-file form-group  col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">";
				echo " <input type=\"file\" name=\"fileToUpload\"class=\"custom-file-input\" id=\"custom-File\"><label class=\"img-action custom-file-label\" for=\"customFile\">Inserisci foto</label>";
				echo "</div>   </div>";

				echo "<div class=\"form-row\">";
				echo "<div class=\"form-group  d-flex justify-content-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">";
				echo " <input type=\"submit\"  class= \" my-2 btn btn-primary\" value=\"Upload Image\" name=\"submit\">";
				echo "</div>  </div> ";

				echo "</form> </div>";
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



				echo "<div class=\"mb-3 col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4\">";
				echo "<h1 class=\"profilo\">I MIEI BIGLIETTI</h1>";

				if ($quante_tuple  == 0) {

					echo "<p class=\"profilo\" >Al momento non hai acquistato nessun biglietto. Goditi il nostro festival e fai l'acquisto</p>";
					echo "<div style=\"text-align:center;\" ><a href=\"ticket.php?ticketpage=$profiloscelto\" class=\"but btn btn-primary\">Acquista subito</a></div>";
				} else {

					echo " <ul  class=\"lista\">";
					while ($row = $result->fetch_assoc()) {
						$quantita = $row["quantita"];
						$biglietto = $row["tipobiglietto"];


						echo "<li class=\"mypage\">Ticket:$quantita $biglietto</li>";
					}


					echo " </ul>";


					echo "<div style=\"text-align:center;\" ><a href=\"artisti.php\" ><button aligncenter class=\" btn btn-primary\">Scopri il festival</button></a></div>";
					echo "</div>";
				}
				?>
			</div>
		</div>
	</div>
	<footer>
		<div class="footer flex flex-column">
			<div class="column flex mb-2">
				<img id="logo" src="assets/images/logo.png" alt="">
				<div class="section-brand">
					<p>7-8-9 Settembre 2018<p>
							<p>Piscinas(Sardegna)<p>
				</div>
			</div>
			<div class="column flex">
				<form action="newsletter.php" method="post">
					<div class="form-group d-flex flex-column align-items-center">
						<div class="d-flex justify-content-center">
							<h3 class="title">Newsletter</h5>
						</div>
						<div class="d-flex justify-content-center w-25">
							<label for="em" class="col-form-label"></label>
							<input type="email" name="em" id="em" class="form-control" placeholder="Email">
						</div>
						<div class="d-flex justify-content-center py-2">
							<button type="submit" class="btn btn-primary">Iscriviti</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</footer>
	<div class="mobileview container-fluid">
		<div class="mobilecontainer row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<ul>
					<li><a href="#" class="icona" onclick="ritornamenu()">X</a></li>
					<li><a id="subdrop" href="logout.php" tabindex="2" accesskey="8">LOGOUT</a></li>
					<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
					<li><a class="notActive pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>
					<li><a class="notActive pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
					<li> <a id="activePage" href="">MYPAGE</a></li>

				</ul>
			</div>
		</div>
	</div>

</body>

</html>