<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js" integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="style/main.css">

	<?php
	session_start();
	?>

	<script>
		$(document).ready(function() {
			$(".cantante").mouseover(function() {
				$(this).css("color", "white");
			});
			$(".cantante").mouseout(function() {
				$(this).css("color", "black");
			});
		});
	</script>

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
		.cantante {
			color: black;
			font-family: Swistblnk Monthoers;
			margin: auto;
		}

		.artist-name {
			height: 90px;
		}

		@media screen and (min-width:1280px) {
			.cantante {
				font-size: 3em;
			}
		}

		@media screen and (min-width:360px) and (max-width:1279px) {
			.cantante {
				font-size: 2em;
			}
		}

		.background-artist {
			background-color: #039ed8;
		}


		.container-img-artist {
			height: 22em;
			background-size: cover;
		}

		.artist-margin {
			margin: 0.3em;
		}

		.artist-name {
			position: relative;
		}

		.artist {
			border-bottom: 5px solid #84b4eb;
			position: relative;
		}

		.icon {
			color: white;
			font-size: 1.5em
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
					<li> <a class="notActive pagina" href="home.php">HOME</a></li>
					<li><a id="activePage" href="#" tabindex="" accesskey="">ARTISTS</a></li>
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

		<div class="content container-fluid">
			<div class="row">
				<div class="cover col-12">
					<h1>ARTIST </h1>
				</div>
			</div>

			<?php
			$host = "127.0.0.1:3307";
			$phpuser = "root";
			$phppwd = "";
			$dbname = "approcciavanzatiprogetto";

			$conn = new mysqli($host, $phpuser, $phppwd, $dbname);

			//prima riga//

			$sql = "select fotoartista,nome,codice from artisti where nome='my bloody valentine' or nome='samuel'; ";

			$result = $conn->query($sql);

			echo "<div class=\"background-artist row \">";

			while ($row = $result->fetch_assoc()) {
				$fotoart = $row["fotoartista"];
				$nomeart = $row["nome"];
				$codice = $row["codice"];

				echo "<div class=\"artist col-12 col-sm-6\">";
				echo "<div class=\"row p-2\">";
				echo "<div style=\"background-image: url(assets/images/$fotoart);\"class=\"container-img-artist col-12 col-sm-7 col-md-12 col-xl-6 \">";
				echo "<div class=\"\" ><a href=\"accessoticket.php\"  class=\" artist-margin  btn btn-primary\">Acquista</a>";
				echo "<a  href=\"schedaartista.php?cantantesel=$codice\" class=\"artist-margin  btn btn-primary\">Dettagli</a></div>";
				echo "</div>";
				echo "<div class=\"background-artist d-flex artist-name col-12 col-sm-5 col-md-12 col-xl-6\">";
				echo "<h5  class=\"cantante\">$nomeart</h5>";
				echo "<i class=\"far fa-heart icon\"></i>";
				echo "</div></div></div>";
			}
			echo "</div>";
			//seconda riga//

			$query = "select fotoartista,nome,codice from artisti where nome='calcutta' or nome='first aid kit'; ";

			$result = $conn->query($query);

			echo "<div class=\"background-artist  row \">";

			while ($row = $result->fetch_assoc()) {
				$fotoart = $row["fotoartista"];
				$nomeart = $row["nome"];
				$codice = $row["codice"];

				echo "<div class=\"artist col-12 col-sm-6 col-md-6 col-xl-6\">";
				echo "<div class=\"row p-2\">";
				echo "<div class=\"background-artist  col-12 col-sm-5 col-md-12 col-xl-6\">";
				echo "<h5  class=\"cantante\">$nomeart</h5>";
				echo "<i class=\"far fa-heart icon\"></i>";
				echo "</div>";
				echo "<div style=\"background-image:  url(assets/images/$fotoart);\"class=\"container-img-artist col-12 col-sm-7 col-md-12 col-xl-6 \">";
				echo "<div class=\"\" ><a href=\"accessoticket.php\"  class=\"artist-margin  btn btn-primary\">Acquista</a>";
				echo "<a  href=\"schedaartista.php?cantantesel=$codice\" class=\"artist-margin  btn btn-primary\">Dettagli</a></div>";

				echo "</div>";
				echo "</div></div>";
			}
			echo "</div>";

			//terza riga//
			$query = "select fotoartista,nome,codice from artisti where nome='max gazze' or nome='prodigy'; ";

			$result = $conn->query($query);
			echo "<div class=\"background-artist row\">";

			while ($row = $result->fetch_assoc()) {
				$fotoart = $row["fotoartista"];
				$nomeart = $row["nome"];
				$codice = $row["codice"];

				echo "<div class=\"artist col-12 col-sm-6\">";
				echo "<div class=\"row p-2\">";
				echo "<div style=\"background-image: url(assets/images/$fotoart);\"class=\"container-img-artist  col-12 col-sm-7 col-md-12 col-xl-6 \">";
				echo "<div class=\"\" ><a href=\"accessoticket.php\"  class=\" artist-margin  btn btn-primary\">Acquista</a>";
				echo "<a  href=\"schedaartista.php?cantantesel=$codice\" class=\"artist-margin  btn btn-primary\">Dettagli</a></div>";
				echo "</div>";
				echo "<div class=\"background-artist d-flex artist-name col-12 col-sm-5 col-md-12 col-xl-6\">";
				echo "<h5  class=\"cantante\">$nomeart</h5>";
				echo "<i class=\"far fa-heart icon\"></i>";
				echo "</div></div></div>";
			}
			echo "</div>";

			//quarta riga//
			$query = "select fotoartista,nome,codice from artisti where nome='coez' or nome='levante'; ";

			$result = $conn->query($query);
			echo "<div class=\"background-artist  row\">";

			while ($row = $result->fetch_assoc()) {
				$fotoart = $row["fotoartista"];
				$nomeart = $row["nome"];
				$codice = $row["codice"];

				echo "<div class=\"artist col-12 col-sm-6 col-md-6 col-xl-6\">";
				echo "<div class=\"row p-2\">";
				echo "<div class=\"background-artist  col-12 col-sm-5 col-md-12 col-xl-6\">";
				echo "<h5  class=\"cantante\">$nomeart</h5>";
				echo "<i class=\"far fa-heart icon\"></i>";
				echo "</div>";
				echo "<div style=\"background-image:  url(assets/images/$fotoart);\"class=\"container-img-artist col-12 col-sm-7 col-md-12 col-xl-6 \">";
				echo "<div class=\"\" ><a href=\"accessoticket.php\"  class=\"artist-margin  btn btn-primary\">Acquista</a>";
				echo "<a  href=\"schedaartista.php?cantantesel=$codice\" class=\"artist-margin  btn btn-primary\">Dettagli</a></div>";

				echo "</div>";
				echo "</div></div>";
			}
			echo "</div>";

			//quinta riga//
			$query = "select fotoartista,nome,codice from artisti where nome='tazenda' or nome='tame impala'; ";

			$result = $conn->query($query);
			echo "<div class=\"background-artist row s\">";

			while ($row = $result->fetch_assoc()) {
				$fotoart = $row["fotoartista"];
				$nomeart = $row["nome"];
				$codice = $row["codice"];

				echo "<div class=\"artist col-12 col-sm-6\">";
				echo "<div class=\"row p-2\">";
				echo "<div style=\"background-image: url(assets/images/$fotoart);\"class=\"container-img-artist col-12 col-sm-7 col-md-12 col-xl-6 \">";
				echo "<div class=\"\" ><a href=\"accessoticket.php\"  class=\" artist-margin  btn btn-primary\">Acquista</a>";
				echo "<a  href=\"schedaartista.php?cantantesel=$codice\" class=\"artist-margin  btn btn-primary\">Dettagli</a></div>";
				echo "</div>";
				echo "<div class=\"background-artist d-flex artist-name col-12 col-sm-5 col-md-12 col-xl-6\">";
				echo "<h5  class=\"cantante\">$nomeart</h5>";
				echo "<i class=\"far fa-heart icon\"></i>";
				echo "</div></div></div>";
			}
			echo "</div>";


			//sesta riga//
			$query = "select fotoartista,nome,codice from artisti where nome='marlene kuntz' or nome='cosmo'; ";

			$result = $conn->query($query);
			echo "<div class=\"background-artist  row \">";

			while ($row = $result->fetch_assoc()) {
				$fotoart = $row["fotoartista"];
				$nomeart = $row["nome"];
				$codice = $row["codice"];

				echo "<div class=\"artist col-12 col-sm-6 col-md-6 col-xl-6\">";
				echo "<div class=\"row p-2\">";
				echo "<div class=\"background-artist  col-12 col-sm-5 col-md-12 col-xl-6\">";
				echo "<h5  class=\"cantante \">$nomeart</h5>";
				echo "<i class=\"far fa-heart icon\"></i>";
				echo "</div>";
				echo "<div style=\"background-image:  url(assets/images/$fotoart);\"class=\"container-img-artist col-12 col-sm-7 col-md-12 col-xl-6 \">";
				echo "<div class=\"\" ><a href=\"accessoticket.php\"  class=\"artist-margin  btn btn-primary\">Acquista</a>";
				echo "<a  href=\"schedaartista.php?cantantesel=$codice\" class=\"artist-margin  btn btn-primary\">Dettagli</a></div>";

				echo "</div>";
				echo "</div></div>";
			}
			echo "</div>";

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