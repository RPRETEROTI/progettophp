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


	<?php session_start(); ?>
	<?php function mypage()
	{
		if (isset($_SESSION["utente"])) {
			$ut = $_SESSION["utente"];
			echo "<li class=\"drop\"> <a class=\"pagina\" href=\"profilo.php?profilopagina=$ut\">MYPAGE</a>";
			echo " <li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";
		} else {
			echo "<li><a class=\"notActive pagina\" href=\"registrazione.php?causa=0\" tabindex=\"2\" accesskey=\"8\">MYPAGE</a></li>";
			echo " <li><a id=\"subdrop\" href=\"registrazione.php?causa=0\">LOGIN</a></li>";
		}
	}
	?>

	<style>
		.btnticket {
			width: 50%;
			padding: 18px;
		}

		.title {
			font-family: Swistblnk Monthoers;
			font-size: 2em;
			text-align: center;
			color: red;
		}

		.spot {
			color: black;
			font-family: Swistblnk Monthoers;
			font-size: 3em;
			text-align: center;
		}

		.deskview .navigation-menu li a#subdrop {
			color: black;
			padding: 20px 10px;
			text-decoration: none;
			text-align: center;
			background-color: #f9f9f9;
			display: inline-block;
		}

		.deskview #subdrop:hover {
			background-color: blue;
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
					<li> <a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
					<li><a class="notActive pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>
					<li><a class="notActive pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
					<?php
					if (isset($_SESSION["utente"])) {
						$profile = $_SESSION["utente"];
						echo "<li class=\"drop\"> <a id=\"activePage\" href=\"profilo.php?profilopagina=$profile\">MYPAGE</a>";
					}

					?>
					<li><a id="subdrop" href="logout.php" tabindex="2" accesskey="8">LOGOUT</a></li>

				</ul>
			</div>
			<div class="container-menu-icon col-2 col-sm-2 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu();">☰</a>
			</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="cover col-12 ">
					<h1>TICKET</h1>
				</div>
			</div>

			<?php

			$host = "127.0.0.1:3307";
			$phpuser = "root";
			$phppwd = "";
			$dbname = "approcciavanzatiprogetto";

			$conn = new mysqli($host, $phpuser, $phppwd, $dbname);


			$profile = $_REQUEST["ticketpage"];

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
			$citta = $row["citta"];
			$cap = $row["zip"];
			$stato = $row["stato"];
			$intestatario = $row["intestatario"];


			echo " <div class=\"row m-3\">";

			echo " <div class=\"col-12 col-md-6\">";

			echo "<legend> <h2 class=\"title\">ACQUISTO</h1></legend>";

			if (isset($_SESSION["utente"])) {
				$ut = $_SESSION["utente"];


				echo " <form  action=\"completaacquisto.php?profiloscelto=$ut\" method=\"post\"  >";

				echo " <div class=\"form-row\">";

				echo "<legend><h6 class=\"title\">Dati personali</h6></legend>";

				echo "<div class=\"form-group col-12  col-md-6\">";



				echo "<label for=\"nome\" class=\"col-form-label\">Nome</label>";

				echo "<input name=\"nome\" type=\"text\" id=\"nome\" class=\"form-control\" placeholder=\"$nome\"></div>";

				echo "<div class=\"form-group  col-12 col-sm-12  col-md-6\">";

				echo "<label for=\"cogn\" class=\"col-form-label\">Cognome</label>";

				echo " <input type=\"text\" class=\"form-control\" id=\"cogn\"  name=\"cogn\" placeholder=\"$cognome\">";

				echo " </div>";

				echo "</div>";
				echo "<div class= \"form-row\">";

				echo "<div class=\"form-group  col-12 col-sm-12 col-md-6\">";

				echo "<label for=\"email\">Email</label>";

				echo "<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"$email\">";

				echo "</div>";



				echo "<div class=\"form-group  col-12 col-sm-12 col-md-6\">";

				echo "<label for=\"cemail\"> Conferma email</label>";

				echo "<input type=\"email\" class=\"form-control\" id=\"cemail\" name=\"cemail\" placeholder=\" $email\">";

				echo "</div>";
				echo "</div>";


				echo "<div class= \"form-row\">";

				echo "<div class=\"form-group col-8 col-sm-8 col-md-8\">";

				echo "<label for=\"indirizzo\">Indirizzo</label>";

				echo "<input type=\"text\" class=\"form-control\" id=\"indirizzo\" name=\"indirizzo\" placeholder=\"$indirizzo\">";

				echo "</div>";

				echo "<div class=\"form-group col-4 col-sm-4 col-md-4\">";

				echo " <label for=\"nciv\">N.civico</label>";

				echo "<input type=\"text\" class=\"form-control\" id=\"nciv\" name=\"nciv\" placeholder=\"$numerocivico\">";

				echo " </div>";

				echo "</div>";




				echo "<div class=\"form-row\">";

				echo "<div class=\"form-group  col-6 col-sm-6 col-md-6\">";

				echo "<label for=\"city\">City</label>";

				echo "<input type=\"text\" class=\"form-control\" id=\"city\ name=\"city\" placeholder=\"$citta\">";

				echo "</div>";

				echo "<div class=\"form-group col-4 col-sm-4 col-md-4\">";

				echo "<label for=\"state\">State</label>";

				echo "<select name=\"state\" class=\"form-control\">";

				echo "<option selected>$stato</option>";


				$host = "127.0.0.1:3307";
				$phpuser = "root";
				$phppwd = "";
				$dbname = "approcciavanzatiprogetto";
				$conn = new mysqli($host, $phpuser, $phppwd, $dbname);
				$query = "select nomenaz from nazioni ";
				$result = $conn->query($query);
				while ($row = $result->fetch_assoc()) {
					$codice = $row["codice"];
					$nazione = $row["nomenaz"];
					echo "<option value=\"$codice\">$nazione</option>";
				}

				echo "</select>";

				echo " </div>";

				echo "<div class=\"form-group col-2 col-sm-2 col-md-2\">";

				echo "<label for=\"zip\">Zip</label>";

				echo "<input type=\"text\" class=\"form-control\" id=\"zip\" name=\"zip\" placeholder=\"$cap\">";

				echo "</div>";

				echo "</div>";



				echo "<div class= \"form-row\">";

				echo "<div class=\"form-group  col-12 col-sm-12 col-md-6\">";

				echo "<label for=\"iban\">Iban</label>";

				echo "<input type=\"text\" class=\"form-control\" id=\"iban\" name=\"iban\" placeholder=\"$iban\">";

				echo " </div>";

				echo "<div class=\"form-group  col-12 col-sm-12 col-md-6\">";

				echo "<label for=\"intestatario\">Intestatario</label>";

				echo "<input type=\"text\" class=\"form-control\" id=\"intestatario\" name=\"intestatario\" placeholder=\"$intestatario\">";

				echo "</div>";

				echo "</div>";

				echo "<div class= \"form-row\">";

				echo "<div class=\"form-group col-8 col-sm-8 col-md-8\">";

				echo "<label for=\"biglietto\">Tipologia biglietto</label>";

				echo " <select  name=\"biglietto\" class=\"form-control\">";
				echo "<option value=\"Daily7\">Biglietto giornaliero:7/09/2018-30€</option>";

				echo "<option  value=\"Daily8\">Biglietto giornaliero:8/09/2018-30€</option>";

				echo "<option  value=\"Daily9\">Biglietto giornaliero:9/09/2018-30€</option>";



				echo "<option  value=\"Twodays_7/8\">Biglietto bigiornaliero:7-8/09/2018-45€</option>";

				echo "<option  value=\"Twodays_7/8\">Biglietto bigiornaliero:8-9/09/2018-45€</option>";

				echo "<option  value=\"Threedays_7/8/9\">Biglietto trigiornaliero:7-8-9/09/2018-75€</option>";

				echo "</select>";

				echo "</div>";

				echo "<div class=\"form-group col-4 col-sm-4 col-md-4\">";

				echo "<label for=\"quantita\">Quantità</label>";


				echo " <select name=\"quantita\" class=\"form-control\">";



				echo "<option value=\"1\">1</option>";

				echo "<option value=\"2\">2</option>";

				echo "<option value=\"3\">3</option>";

				echo "<option value=\"4\">4</option>";

				echo "<option value=\"5\">5</option>";
				echo "</select>";

				echo "</div>";

				echo "</div>";


				echo "<div class= \"form-row\">";

				echo "<div class=\"form-group col-12 d-flex justify-content-center\">";
				echo "<button type=\"submit\" class=\"btnticket btn btn-primary\" >Acquista</button>";

				echo "</div>";
				echo "</div>";


				echo "</form>";

				echo " </div>";

				echo "<div class=\" a  col-12 col-sm-12 col-md-6\">";


				echo " <img class=\"w-100\" src=\"assets/images/a.png\" >";
				if (isset($_SESSION["carrello"])) {


					echo " <h2 class=\"spot\">Acquisto confermato.</h2>";
				};
				echo " <h2 class=\"spot\">Il miglior festival della Sardegna ti aspetta!</h2>";

				echo "</div>";
				echo "</div>";
			}
			?>


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
					<li><a id="subdrop" href="registrazione.php" tabindex="2" accesskey="8">LOGIN</a></li>
					<li><a class="activePage" href="getuser.php" tabindex="" accesskey="">HOME</a></li>
					<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
					<li><a class="notActive pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>
					<li><a class="notActive pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
					<li><a class="notActive pagina" href="registrazione.php" tabindex="" accesskey="">MYPAGE</a></li>

				</ul>
			</div>
		</div>
	</div>
</body>

</html>