<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">









	<?php
	session_start(); ?>






	<script>
		$(document).ready(function() {

			$(".credenziali").blur(function() {
				if (this.value.length < '7') {
					$(this).css("border-color", "red");
				}
			});

		});
	</script>
	<script>
		$(document).ready(function() {
			$(".credenziali").focus(function() {
				$(this).css("border-color", "");
			});

		});
	</script>







	<script>
		$(document).ready(function() {
			$(".vmenu").mouseover(function() {
				$(this).css("background-color", "red");
			});
			$(".vmenu").mouseout(function() {
				$(this).css("background-color", "");
			});

		});
	</script>



	<script type="text/javascript">
		function cambiamenu() {
			$(".normale").hide();
			$(".sorpr").show();
		}
	</script>
	<script type="text/javascript">
		function ritornamenu() {
			$(".sorpr").hide();
			$(".normale").show();
		}
	</script>



	<script>
		$(document).ready(function() {
			if (document.documentElement.clientWidth > 1200) {


				$(window).scroll(function() {
					if ($(document).scrollTop() > 150) {
						$(".nave").css("height", "19%");
						$("li").css("top", "0px");
						$(".icon").css("top", "-58px");
						$(".nave").css("top", "0px");
					} else {
						$(".nave").css("height", "23%");;
						$("li").css("top", "20px");
						$(".icon").css("top", "-40px");
						$(".nave").css("top", "0px");
					}
				});
			}
		});
	</script>


	<script>
		$(document).ready(function() {
			if (document.documentElement.clientWidth < 965) {


				$(window).scroll(function() {
					if ($(document).scrollTop() > 150) {
						$(".nave").css("height", "19%");
						$("li").css("top", "0px");
						$(".icon").css("top", "-58px");
						$(".nave").css("top", "0px");
					} else {
						$(".nave").css("height", "23%");;
						$("li").css("top", "20px");
						$(".icon").css("top", "-40px");
						$(".nave").css("top", "0px");
					}
				});
			}
		});
	</script>

	<script>
		$(document).ready(function() {
			if (document.documentElement.clientWidth < 768) {


				$(window).scroll(function() {
					if ($(document).scrollTop() > 150) {
						$(".nave").css("height", "19%");
						$("li").css("top", "0px");
						$(".icon").css("top", "-58px");
						$(".nave").css("top", "0px");
					} else {
						$(".nave").css("height", "25%");;
						$("li").css("top", "20px");
						$(".icon").css("top", "-40px");
						$(".nave").css("top", "0px");
					}
				});
			}
		});
	</script>


	<script>
		$(document).ready(function() {
			if (document.documentElement.clientWidth < 768) {
				$(".cambio").insertBefore(".cambio1");
			}
		});
	</script>


	<style>
		body {
			font-size: 100%;
			width: 100%;
			line-height: 1.8;
		}

		h1 {
			text-align: center;
		}

		.se {
			width: 100%;
			height: 35rem;
		}


		.carousel-caption {
			border: 4px solid white;
			height: 300px;
		}

		.evento {

			color: red;
			font-family: Swistblnk Monthoers;
			font-size: 5em;
			line-height: 100px;
			text-align: center;
			text-transform: uppercase;
			text-shadow: 0px 0px 10px #323232;
			position: relative;
			top: 10px;
		}

		.star {
			color: white;
			font-family: Swistblnk Monthoers;
			font-size: 3em;
			line-height: 60px;
			text-align: center;
			text-transform: uppercase;
			text-shadow: 0px 0px 10px #323232;
			position: relative;
			top: 30px;
		}

		.imgcarous {
			height: 345px;
		}

		.uno {
			border: 1px solid blue;
			z-index: 5;
		}

		.due {
			border: 1px solid blue;
			padding: 0px;
			margin-left: 0px;
		}

		.tre {
			border: 1px solid blue;
		}

		.quattro {
			border: 1px solid blue;
		}




		.ter {
			margin-left: 0px;
			height: 100%;
		}

		.qua {
			height: 100%;
		}

		.nave ul {
			list-style-type: none;

		}

		.nave li {
			display: inline-block;
			text-align: center;
			padding: 5px 9px;
			font-family: Swistblnk Monthoers;
			text-decoration: none;
			position: relative;
		}

		li a#inizio {
			color: white;
			border-bottom: 14px solid blue;
			background-color: black;
		}

		li a.pagina {
			border-bottom: 14px solid white;
			color: black;
		}

		#logos {
			width: 100%;
			height: 100%;
		}

		a.icon {
			font-size: 30px;
			color: white;
		}

		.prima {
			transition: top 0.1s;
			z-index: 5;
			width: 100%;
			position: relative;
		}

		.nave {
			background-color: #7fc4f5;
			position: fixed;
			transition: top 0.1s;
			z-index: 8;
			width: 100%;
			height: 20%;
		}

		#subdrop {
			color: black;
			padding: 20px 10px;
			text-decoration: none;
			text-align: center;
			background-color: #f9f9f9;
			display: inline-block;
		}

		#subdrop:hover {
			background-color: blue;
		}



		@media screen and (max-width:1700px) {
			.fa {
				padding: 20px 21px;
				font-size: 36px;


			}

			.cover h1 {
				font-size: 10em;
			}

			.ads {

				font-size: 6em;
			}


			.nave li {
				font-size: 35px;
			}

			.nave {
				height: 29%;
			}

			.imgcarous {
				height: 385px;
			}

			.content {
				padding-top: 136px;
			}
		}

		@media screen and (max-width:1200px) {
			.fa {
				padding: 20px 21px;
				font-size: 36px;


			}

			.cover h1 {
				font-size: 10em;
			}

			.ads {

				font-size: 6em;
			}


			.nave li {
				font-size: 32px;
				top: 10px;
			}

			.nave {
				height: 19%;
			}

			.content {
				padding-top: 110px;
			}
		}

		@media screen and (max-width:992px) {
			.fa {
				padding: 20px 21px;
				font-size: 36px;


			}

			.cover h1 {
				font-size: 10em;
			}

			.ads {

				font-size: 6em;
			}


			.nave li {
				font-size: 25px;
			}

			.nave {
				height: 23%;
			}

			.content {
				padding-top: 126px;
			}
		}

		@media screen and (max-width:850px) {
			.fa {
				padding: 20px 8px;
				font-size: 36px;


			}

			.nave li {
				font-size: 20px;
			}

			.ads {

				font-size: 6em;
			}

			.nave {
				width: 100%;
				height: 23%;
			}

			.content {
				padding-top: 138px;
			}
		}

		@media screen and (max-width:767px) {
			.fa {
				padding: 20px 21px;
				font-size: 36px;


			}

			.cover h1 {
				font-size: 10em;
			}

			.ads {

				font-size: 6em;
			}

			.nave {
				background-color: #039ed8;
			}

			.nave li {
				display: none;
			}

			.nave {
				width: 100%;
				height: 25%;
			}

			#logos {
				width: 100%;
				height: 100%;
			}

			.nave.responsive li {
				display: block;
				font-size: 30px;
				padding-top: 6px;
				padding-bottom: 6px;
				position: relative;
				right: 50px;
			}

			ul {
				margin-top: 80px;
			}

			.nave.responsive {
				position: fixed;
			}

			a.icon {
				display: block;
			}

			.as {
				display: inline-block;
				position: relative;
				right: 0px;
				top: 8px;
			}

			.cantante {
				font-size: 2em;
				position: relative;
				top: 100px;
			}

			.scelta {
				top: 12em;
			}

			.content {
				padding-top: 132px;
			}
		}

		@media screen and (max-width:576px) {
			.fa {
				padding: 20px 21px;
				font-size: 36px;


			}

			.cantante {
				font-size: 4em;
				position: relative;
				top: 0px;
			}

			.cover h1 {
				font-size: 6em;
			}

			.ads {

				font-size: 4em;
			}
		}


		.sorpr {
			display: none;
			width: 100%;
			height: 100%;
			background-color: #1f57a2;
		}

		.sorpresa ul {
			position: relative;
			margin-top: 10px;
			list-style-type: none;
		}

		.sorpresa li a#inizio {
			color: white;
			border-bottom: 10px solid blue;
			background-color: black;
			display: block;
			text-align: center;
			padding: 5px 9px;
			font-family: Swistblnk Monthoers;
			text-decoration: none;
			position: relative;
			font-size: 35px;
		}

		.sorpresa li a.pagina {
			border-bottom: 10px solid white;
			color: black;
			display: block;
			text-align: center;
			padding: 5px 9px;
			font-family: Swistblnk Monthoers;
			text-decoration: none;
			position: relative;
			font-size: 35px;
		}

		.sorpresa li a.icona {
			font-size: 40px;
			color: black;
			display: block;
			text-align: left;
			padding: 5px 9px;
			font-family: Swistblnk Monthoers;
			text-decoration: none;
			position: relative;
			font-size: 35px;
		}

		.sorpresa li a#subdrop {
			font-size: 50px;
			color: black;
			display: block;
			text-align: right;
			padding: 5px 9px;
			font-family: Swistblnk Monthoers;
			text-decoration: none;
			position: relative;
			font-size: 35px;
			background-color: #f9f9f9;
		}

		.sorpresa li a#subdrop:hover {
			background-color: blue;
		}

		.b {
			background-color: #e8e8e8;
		}

		.ads {
			font-family: Swistblnk Monthoers;
			font-size: 6em;
		}

		.inizi {
			padding: 0%;
			margin-left: 8%;
		}

		.inizii {
			padding: 0%;
			margin-right: 6%;
		}

		.news {
			position: relative;
			margin: 0px auto;
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

		.ades {
			font-family: Swistblnk Monthoers;
			font-size: 4em;
		}

		.ades1 {
			font-family: Swistblnk Monthoers;
			font-size: 1em;
		}

		.ades2 {
			border-top: 1px solid black;
			border-bottom: 1px solid black;

		}

		.a {
			border: 5px solid #1ab3c1;
		}

		#logos1 {
			width: 100%;
			height: 40%;
		}

		.ar {
			background-color: white;
		}


		.art {
			padding: 0%;
		}




		.cover {
			height: 30rem;
			background-image: url(backsito.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}

		.cover h1 {
			color: white;
			font-family: Swistblnk Monthoers;
			line-height: 100px;
			text-align: center;
			text-transform: uppercase;
			text-shadow: 0px 0px 10px #323232;
			position: relative;
			top: 17rem;

		}

		.usrn {
			color: red;
		}

		.accesso {
			margin-right: 5px;
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
					<li> <a class="vmenu pagina" href="index.php">HOME</a></li>
					<li><a class="vmenu pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
					<li><a class="vmenu pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>
					<li><a class="vmenu pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
					<li><a id="inizio" href="">MYPAGE</a></li>
					<li><a id="subdrop" href="">LOGIN</a></li>

				</ul>
			</div>
			<div class="as col-2 col-sm-3 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu();">☰</a>
			</div>
		</div>
		<div class="content">
			<div class=" row">
				<div class="cover art col-sm-12 col-md-12">

					<h1>MYPAGE</h1>


				</div>
			</div>

			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<h2 class="ades">Bentornato. Accedi al tuo profilo</h2>
				</div>
			</div>

			<form action="login.php" method="post">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
							<div class="form-group row">
								<label for="usr" class="accesso col-form-label">Username</label>
								<div>
									<input name="usr" type="text" id="usr" class="credenziali form-control">

									<?php
									$causa = $_REQUEST["causa"];
									if ($causa == 1) {
										$error_msg = "Utente inesistente";
										echo "<small id=\"passwordHelpBlock\" class=\"usrn form-text \">";
										echo "$error_msg";
										echo "</small>";
									}
									?>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
							<div class="form-group row">
								<label for="pwd" class="accesso col-form-label">Password</label>
								<div>
									<input name="pwd" type="password" id="pwd" class="credenziali form-control">
									<?php
									$causa = $_REQUEST["causa"];
									if ($causa == 2) {
										$error_msg = "Password errata";
										echo "<small id=\"passwordHelpBlock\" class=\"usrn form-text\">";
										echo "$error_msg";
										echo "</small>";
									}
									?>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
								<button type="submit" class="btn btn-warning">ACCEDI</button>
							</div>
						</div>

					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h2 class="ades">Registrati per accedere al tuo profilo ed acquistare i nostri biglietti</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<form action="registrazionecompiuta.php" method="post" enctype="multipart/form-data" id="formvalidato">
						<div class="form-row">
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<label for="user" class="col-form-label">Username*</label>
								<input name="user" type="text" id="user" class=" credenziali form-control" placeholder="" maxlength="20" value="" aria-describedby="passwordHelpBlock">
								<?php
								$causa = $_REQUEST["causa"];
								if ($causa == 4) {
									$error_msg = "Utente gia' esistente";
									echo "<small id=\"passwordHelpBlock\" class=\"usrn form-text\">";
									echo "$error_msg";
									echo "</small>";
								}
								if ($causa != 4) {
									echo "<small id=\"passwordHelpBlock\" class=\"form-text text-muted\">";
									echo "Your username must be 7 characters long.";
									echo "</small>";
								}
								?>
							</div>
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<label for="pawd" class="col-form-label">Password*</label>
								<input type="password" class="credenziali form-control" id="pawd" name="pawd" placeholder="Password" aria-describedby="passwordHelpBlock">
								<small id="passwordHelpBlock" class="form-text text-muted">
									Your password must be 7 characters long.
								</small>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<label for="nome" class="col-form-label">Nome</label>
								<input name="nome" type="text" id="nome" class="form-control" placeholder="" value=""></div>
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<label for="cogn" class="col-form-label">Cognome</label>
								<input type="text" class="form-control" id="cogn" name="cogn" placeholder="" value="">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
								<label for="email">Email*</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="passwordHelpBlock">
								<small id="passwordHelpBlock" class="form-text text-muted">
									Your email must have @
								</small>
							</div>
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
								<label for="cemail"> Conferma email*</label>
								<input type="email" class="form-control" id="cemail" name="cemail" placeholder=" Conferma Email" aria-describedby="passwordHelpBlock">
								<small id="passwordHelpBlock" class="form-text text-muted">
									Your email must have @
								</small>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
								<label for="indirizzo">Indirizzo</label>
								<input type="text" class="form-control" id="indirizzo" name="indirizzo" placeholder="1234 Main St">
							</div>
							<div class="form-group col-3 col-sm-3 col-md-4 col-lg-4 col-xl-4">
								<label for="nciv">N. civico</label>
								<input type="text" class="form-control" id="nciv" name="nciv" placeholder="00">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<label for="city">City</label>
								<input type="text" class="form-control" id="city" name="city">
							</div>
							<div class="form-group col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
								<label for="state">State</label>
								<select name="state" class="form-control">
									<?php
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
									?>
								</select>
							</div>
							<div class="form-group col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
								<label for="zip">Zip</label>
								<input type="text" class="form-control" id="zip" name="zip">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
								<label for="iban">Iban</label>
								<input type="text" class="form-control" id="iban" name="iban" placeholder="1234 Main St">
								<small id="passwordHelpBlock" class="form-text text-muted">
									Your iban must have 17 caratteri.
								</small>
							</div>
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<label for="intestatario">Intestatario</label>
								<input type="text" class="form-control" id="intestatario" name="intestatario" placeholder="Apartment, studio, or floor">
							</div>
						</div>
				</div>
				<div class=" iscr  col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					Ciaone
					<button type="submit" class="se btn btn-primary">Registrati</button></div>
				</form>
			</div>

			<br /> <br />

			<footer>
				<div class=" ar row">
					<div class=" a col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
						<img id="logos1" src="a.png" alt="">
						<div class="ades2">
							<p class="ades1" style="text-align:center;">7-8-9 Settembre 2018<p>
									<p class="ades1" style="text-align:center;">Piscinas(Sardegna)<p>
						</div>
					</div>

					<div class=" a col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
						<div class=" row">
							<div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<h5 class="ades" style="text-align:center;">Contatti</h5>
							</div>
						</div>
						<div class="row" style="margin-top:21px;margin-bottom:10px;">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div style="text-align:center;"><a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-instagram"></a></div>
							</div>
						</div>
					</div>

					<div class="a col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
						<form action="newsletter.php" method="post">

							<div class="form-group row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<h5 class="ades" style="text-align:center;">Newsletter</h5>



									<label for="em" class="col-form-label"></label>
									<input type="email" name="em" id="em" class="form-control" placeholder="Email">

								</div>
							</div>

							<div class="form-group row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">



									<div style="text-align:center;">Ciaonweee<button type="submit" class="btn btn-primary">Iscriviti</button></div>



								</div>
							</div>

						</form>
					</div>



				</div>

			</footer>
		</div>
	</div>
	<div class="sorpr container-fluid">
		<div class="sorpresa row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<ul>
					<li><a href="#" class="icona" onclick="ritornamenu();">X</a></li>
					<li><a id="subdrop" href="" tabindex="2" accesskey="8">LOGIN</a></li>
					<li> <a class="vmenu pagina" href="index.php">HOME</a></li>
					<li><a class="vmenu pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
					<li><a class="vmenu pagina" href="program.php" tabindex="" accesskey="">PROGRAM</a></li>
					<li><a class="vmenu pagina" href="contacts.php" tabindex="" accesskey="">CONTACTS</a></li>
					<li><a id="inizio" href="" tabindex="2" accesskey="8">MYPAGE</a></li>
				</ul>
			</div>
		</div>
	</div>




	<script text="javascript">
		$(document).ready(function() {
			$("#formvalidato").validate({
				rules: {

					user: {
						required: true,
						minlength: 7,
						maxlength: 7
					},
					iban: {
						maxlength: 17,
						minlength: 17
					},
					cogn: {

						notEqualTo: "#nome"
					},



					pawd: {
						required: true,
						minlength: 7,
						maxlength: 7
					},
					email: {
						required: true,
						email: true
					},
					cemail: {
						required: true,
						email: true,
						equalTo: "#email"
					},
				},
				messages: {
					email: {
						required: "Inserisci un'indirizzo email",
						email: "Inserisci un'indirizzo email valido"
					},

					cemail: {
						required: "Inserisci un'indirizzo email",
						email: "Inserisci un'indirizzo email valido",
						equalTo: "Inserisci un'indirizzo email identico"
					},



					pawd: {
						required: "Password obbligatoria",
						minlength: "La password deve avere 7 caratteri.",
						maxlength: "La password deve avere 7 caratteri."
					},
					user: {
						required: "Username obbligatorio",
						minlength: "Minimo 7 caratteri",
						maxlength: "Massimo 7 caratteri"
					},
					iban: {
						minlength: "Inserisci 17 caratteri",
						maxlength: "Inserisci 17 caratteri"
					},
					cogn: {
						notEqualTo: "Il cognome deve essere diverso dal nome"
					},

				},
				submitHandler: function(form) {
					form.submit();
				}
			});
		});
	</script>

</body>






</html>