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
	session_start(); ?>

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

	<script>
		$(document).ready(function() {
			if (document.documentElement.clientWidth < 768) {
				$(".cambio").insertBefore(".cambio1");
			}
		});
	</script>

	<style>
		.artisti {
			font-family: Swistblnk Monthoers;
			font-size: 1.5em;
			color: #0066cc;
		}

		@media screen and (min-width: 768px) {
			.title-day {
				font-size: 4em;
			}
		}

		@media screen and (min-width: 360px) and (max-width:767px) {
			.title-day {
				font-size: 2em;
			}
		}

		.calendario {
			border-radius: 5.75rem;
			max-width: 95%;
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
					<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
					<li> <a id="activePage" href="#">PROGRAM</a></li>
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
			<div class="row mb-2">
				<div class="cover col-12">
					<h1>PROGRAM</h1>
				</div>
			</div>
			<div class="row">
				<div class=" col-12 col-md-6">
					<h1 class="title-day">Day #1 <br />7 <br />Settembre <br />2018</h1>
				</div>
				<div class="col-12 col-md-6 d-flex flex-column">
					<div class="d-flex">
						<img class=" calendario w-100 mw-100" src="assets/images/trentau.jpg" alt="Cappa">
					</div>
					<div class="d-flex justify-content-center">
						<h3 class="artisti"> <i class="far fa-clock"></i>22-00 Prodigy</h3>
					</div>

					<div class="d-flex flex-row justify-content-between">
						<div class="d-flex flex-column">
							<div class="d-flex">
								<img class="calendario w-100" src="assets/images/tazenda.jpg" alt="Cappa">
							</div>
							<div class="d-flex  justify-content-center">
								<h3 class="artisti"> <i class="far fa-clock"></i>18-20 Tazenda</h3>
							</div>
						</div>
						<div class="d-flex flex-column">
							<div class="d-flex"><img class="calendario w-100" src="assets/images/calcutta.jpg" alt="Cappa">
							</div>
							<div class="d-flex  justify-content-center">
								<h3 class="artisti"> <i class="far fa-clock"></i>16-18 Calcutta</h3>
							</div>
						</div>
						<div class="d-flex flex-column">
							<div class="d-flex  justify-content-center"><img class="calendario w-100" src="assets/images/tameimpala.jpg" alt="Cappa">
							</div>
							<div class="d-flex">
								<h3 class="artisti"> <i class="far fa-clock"></i>20-22 Tame Impala</h3>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-12 col-md-6 d-flex flex-column cambio1">
					<div class="d-flex">
						<img class=" calendario w-100 mw-100" src="assets/images/unoss.jpg" alt="Cappa">
					</div>
					<div class="d-flex justify-content-center">
						<h3 class="artisti"> <i class="far fa-clock"></i>22-00 Max Gazze'</h3>
					</div>

					<div class="d-flex flex-row justify-content-between">
						<div class="d-flex flex-column">
							<div class="d-flex">
								<img class="calendario w-100" src="assets/images/coez.png" alt="Cappa">
							</div>
							<div class="d-flex  justify-content-center">
								<h3 class="artisti"> <i class="far fa-clock"></i>18-20 Coez </h3>

							</div>
						</div>
						<div class="d-flex flex-column">
							<div class="d-flex"><img class="calendario w-100" src="assets/images/first.jpg" alt="Cappa">
							</div>
							<div class="d-flex  justify-content-center">
								<h3 class="artisti"> <i class="far fa-clock"></i>16-18 First Aid Kit </h3>
							</div>
						</div>
						<div class="d-flex flex-column">
							<div class="d-flex  justify-content-center"><img class="calendario w-100" src="assets/images/cosmo1.jpg" alt="Cappa">
							</div>
							<div class="d-flex">
								<h3 class="artisti"> <i class="far fa-clock"></i>20-22 Cosmo</h3>
							</div>
						</div>
					</div>
				</div>
				<div class=" col-12 col-md-6 cambio">
					<h1 class="title-day">Day #2 <br />8 <br />Settembre<br /> 2018</h1>
				</div>
			</div>

			<div class="row">
				<div class=" col-12 col-md-6">
					<h1 class="title-day">Day #3 <br />9<br /> Settembre<br /> 2018</h1>
				</div>
				<div class="col-12 col-md-6 d-flex flex-column">
					<div class="d-flex">
						<img class=" calendario w-100 mw-100" src="assets/images/duess.jpg" alt="Cappa">
					</div>
					<div class="d-flex justify-content-center">
						<h3 class="artisti"> <i class="far fa-clock"></i>22-00 Samuel</h3>
					</div>

					<div class="d-flex flex-row justify-content-between">
						<div class="d-flex flex-column">
							<div class="d-flex">
								<img class="calendario w-100" src="assets/images/levant.jpg" alt="Cappa">
							</div>
							<div class="d-flex  justify-content-center">
								<h3 class="artisti"> <i class="far fa-clock"></i>18-20 Levante</h3>
							</div>
						</div>
						<div class="d-flex flex-column">
							<div class="d-flex"><img class="calendario w-100" src="assets/images/t.png" alt="Cappa">
							</div>
							<div class="d-flex  justify-content-center">
								<h3 class="artisti"> <i class="far fa-clock"></i>16-18 My Bloody Valentine</h3>
							</div>
						</div>
						<div class="d-flex flex-column">
							<div class="d-flex  justify-content-center"><img class="calendario w-100" src="assets/images/marlene.png" alt="Cappa">
							</div>
							<div class="d-flex">
								<h3 class="artisti"> <i class="far fa-clock"></i>20-22 Marlene Kuntz</h3>
							</div>
						</div>
					</div>
				</div>

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
					<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
					<li> <a id="activePage" href="">PROGRAM</a></li>
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