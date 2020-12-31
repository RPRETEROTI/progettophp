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
		.scheda {
			height: 100%;
			width: 100%
		}

		.title {
			font-family: Swistblnk Monthoers;
			font-size: 3em;
			text-align: center;
			color: red;
		}

		.descr {
			font-family: Swistblnk Monthoers;
			font-size: 1.5em;
			text-align: left;
			color: black;
			margin: 2em;
		}

		.container-ticket {
			position: relative;
		}

		.pulsante {
			position: fixed;
			display: block;
			transform: rotate(270deg);
			top: 175px;
			left: -22px;
			text-align: center;
			font-family: Swistblnk Monthoers;
			text-transform: uppercase;
			color: black;
			z-index: 7;
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
					<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<li> <a id="activePage" href="">ARTISTS</a></li>
					<li><a class="notActive pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>
					<li><a class="notActive pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
					<?php
					$mypage = mypage()
					?>
				</ul>
			</div>
			<div class="container-menu-icon col-2 col-sm-2 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu();">☰</a>
			</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="cover col-12">
					<h1>ARTIST </h1>
				</div>
			</div>

			<?php

			$cantantescelto = $_REQUEST["cantantesel"];

			$host = "127.0.0.1:3307";
			$phpuser = "root";
			$phppwd = "";
			$dbname = "approcciavanzatiprogetto";

			$conn = new mysqli($host, $phpuser, $phppwd, $dbname);

			$query = "select * from artisti where codice='$cantantescelto'";

			$result = $conn->query($query);
			$row = $result->fetch_assoc();

			$fotoart = $row["fotoartista"];
			$nomeart = $row["nome"];
			$codice = $row["codice"];
			$data = $row["data"];
			$ora = $row["ora"];
			$descrz = $row["descrizione"];
			$video = $row["video"];

			echo "<div class=\"my-3 row\">";
			echo "<div class=\" col-12 col-md-10 col-lg-12 \">";
			echo "<h1 class=\"title\"><i>$nomeart</i> <br/>$data Settembre 2018 h:$ora</h1>";
			echo "</div>";
			echo "</div>";
			echo "<div class=\"mt-2 row\">";
			echo "<div class=\" col-2 col-md-1 container-ticket \">";
			echo "</div>";
			echo "<div class=\" col-10 mb-2 offset-1 offset-md-0 col-md-5\">";
			echo "<img class=\" scheda \" src=\"assets/images/$fotoart\">";
			echo "</div>";
			echo "<div class=\"col-10 offset-1 offset-md-0 col-md-5 \">";
			echo "<div class=\"embed-responsive h-100 embed-responsive-4by3\">";
			echo "<iframe class=\"embed-responsive-item \" src=\"assets/videos/$video\" allowfullscreen></iframe>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "<div class=\"row\">";
			echo "<div class=\" col-12 col-sm-12 col-md-12 \">";
			echo "<p class=\"descr\" >$descrz";
			echo "</p>";
			echo "</div>";
			echo "</div>";
			?>
			<div class="pulsante">
				<a href="accessoticket.php" class="btn btn-primary">Ticket</a>
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
					<?php
					if (isset($_SESSION["utente"])) {
						$ut = $_SESSION["utente"];
						echo " <li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";
					} else {
						echo " <li><a id=\"subdrop\" href=\"registrazione.php?causa=0\">LOGIN</a></li>";
					}
					?>
					<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<li> <a id="activePage" href="">ARTISTS</a></li>
					<li><a class="notActive pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>
					<li><a class="notActive pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
					<?php
					if (isset($_SESSION["utente"])) {
						$ut = $_SESSION["utente"];
						echo "<li class=\"drop\"> <a class=\"pagina\" href=\"profilo.php?profilopagina=$ut\">MYPAGE</a>";
					} else {
						echo "<li><a class=\"notActive pagina\" href=\"registrazione.php?causa=0\" tabindex=\"2\" accesskey=\"8\">MYPAGE</a></li>";
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>