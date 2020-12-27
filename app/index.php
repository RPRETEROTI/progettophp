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

	<?php
	session_start();
	unset($_SESSION["faq"]);
	?>

	<style>
		.content .description {
			font-family: Swistblnk Monthoers;
			justify-content: center;
			display: flex;
			align-items: center;
			font-weight: bold;
			padding: 24px;
			background-color: #039ed8;
		}

		.content .home-call-to-action {
			background: #039ed8;
			display: flex;
			height: 460px;
			border-radius: 35%;
			align-items: center;
			justify-content: center;
		}

		.content .home-call-to-action .artists,
		.content .home-call-to-action .program {
			color: white;
			font-size: 25px;
			font-weight: bold
		}

		.carousel-caption {
			border: 4px solid white;
			height: 300px;
		}

		.evento {
			color: red;
			font-family: Swistblnk Monthoers;
			font-size: 2em;
			line-height: 100px;
			text-align: center;
			text-transform: uppercase;
			text-shadow: 0px 0px 10px #323232;
			position: relative;
			top: 10px;
		}

		.claim-carousel {
			color: white;
			font-family: Swistblnk Monthoers;
			font-size: 1.5em;
			line-height: 60px;
			text-align: center;
			text-transform: uppercase;
			text-shadow: 0px 0px 10px #323232;
			position: relative;
			top: 30px;
		}

		.imgcarousel {
			height: 28.5rem;
		}

		.carousel-container {
			border: 1px solid blue;
			z-index: 5;
		}

		.abbonamento {
			font-family: Swistblnk Monthoers;
			font-size: 3em;

		}

		.marchio {
			margin-left: 5em;
			margin-right: 5em;
			height: 40%;
		}

		.logo-home {
			margin-top: 9rem;
			height: 20rem;
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
					<li> <a id="activePage" href="provaajax.php">HOME</a></li>
					<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
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
			<div class="carousel-container row no-gutters">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="carousel slide" data-ride="carousel" id="miocarousel">
						<ol class="carousel-indicators">
							<li data-target="#miocarousel" data-slide-to="0" class="active"></li>
							<li data-target="#miocarousel" data-slide-to="1"></li>
							<li data-target="#miocarousel" data-slide-to="2"></li>
							<li data-target="#miocarousel" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="imgcarousel w-100" src="assets/images/backsito.jpg" alt="copertina">
								<div class="carousel-caption">
									<h1 class="claim-carousel">PISCINASSOUND</h1>
									<h2 class="evento">7-8-9<br /> Settembre 2018</h2>
								</div>
							</div>
							<div class="carousel-item">
								<img class="imgcarousel w-100" src="assets/images/trentau.jpg" alt="copertina">
								<div class="carousel-caption">
									<h1 class="claim-carousel">PRODIGY</h1>
									<h2 class="evento">7 Settembre 2018</h2>
								</div>
							</div>
							<div class="carousel-item">
								<img class="imgcarousel w-100" src="assets/images/unos.jpg" alt="copertina">
								<div class="carousel-caption">
									<h1 class="claim-carousel">MAX GAZZE'</h1>
									<h2 class="evento">8 Settembre 2018</h2>
								</div>
							</div>
							<div class="carousel-item">
								<img class="imgcarousel w-100" src="assets/images/duess.jpg" alt="copertina">

								<div class="carousel-caption">
									<h1 class="claim-carousel">SAMUEL</h1>
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

			<div class="row no-gutters">
				<div class="col-12">
					<h3 class="description"> Non solo una sequenza di concerti e artisti per riempire un cartellone, ma una line up ambiziosa e mai schiava delle mode che mescola
						leggende internazionali e nuove stelle italiane. Scopri gli artisti e acquista i biglietti</h3>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-12 col-md-6">
					<div class="home-call-to-action m-3 p-2">
						<a class="artists" href="artisti.php" tabindex="" accesskey=""> DISCOVER THE ARTISTS</a></li>
					</div>
				</div>
				<div class="col-12 col-md-6 ">
					<div class="home-call-to-action m-3 p-2">
						<a class="artists" href="artisti.php" tabindex="" accesskey="">READ THE PROGRAM</a></li>
					</div>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="marchio d-none d-md-block col-md-10">
					<img class="logo-home w-100" src="assets/images/logo.png" alt="">
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">
					<h2 class="abbonamento" style="text-align:center;">ABBONAMENTI</h2>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-12 col-sm-12 col-md-4 my-4 px-3  d-flex justify-content-around">
					<div class="card">
						<img class="card-img-top" src="assets/images/ticket.png" alt="ticket">
						<div class="card-body">
							<a href="accessoticket.php" class="btn btn-primary">Acquista subito</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-4 my-4  px-3 d-flex justify-content-around">
					<div class="card">
						<img class="card-img-top" src="assets/images/tick2.png" alt="ticket">
						<div class="card-body">
							<a href="accessoticket.php" class="btn btn-primary">Acquista subito</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-4 my-4 px-3 d-flex justify-content-around">
					<div class="card">
						<img class="card-img-top" src="assets/images/tick3.png" alt="ticket">
						<div class="card-body">
							<a href="accessoticket.php" class="btn btn-primary">Acquista subito</a>
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
					<li> <a id="activePage" href="">HOME</a></li>
					<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
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