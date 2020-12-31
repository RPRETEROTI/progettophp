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
	<link rel="stylesheet" href="style/main.css">







	<script>
		$(document).ready(function() {
			$(".notActive").mouseover(function() {
				$(this).css("background-color", "red");
			});
			$(".notActive").mouseout(function() {
				$(this).css("background-color", "");
			});
		});
	</script>
	<script type="text/javascript">
		function cambiamenu() {
			$(".deskview").hide();
			$("footer").hide();
			$(".mobileview").show();
		}
	</script>
	<script type="text/javascript">
		function ritornamenu() {
			$(".mobileview").hide();
			$(".deskview").show();
			$("footer").show();
		}
	</script>
	<script>
		$(document).ready(function() {
			if (document.documentElement.clientWidth >= 1279) {
				$(window).scroll(function() {
					if ($(document).scrollTop() > 150) {
						$(".navigation-menu").css("height", "20%");
						$(".navigation-menu ul").css("top", "40px");
					} else {
						$(".navigation-menu").css("height", "18%");
						$(".navigation-menu ul").css("top", "30px");
					}
				});
			}
		});
	</script>
	<script>
		$(document).ready(function() {
			if (document.documentElement.clientWidth < 1279) {
				$(window).scroll(function() {
					if ($(document).scrollTop() > 150) {
						$(".navigation-menu").css("height", "17%");
						$(".navigation-menu ul").css("top", "40px");
					} else {
						$(".navigation-menu").css("height", "16%");;
						$(".navigation-menu ul").css("top", "30px");
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
						$(".navigation-menu").css("height", "11%");
						$(".icon").css("top", "-58px");
						$(".navigation-menu ul").css("top", "40px");
					} else {
						$(".navigation-menu").css("height", "10%");;
						$(".icon").css("top", "-40px");
						$(".navigation-menu ul").css("top", "30px");
					}
				});
			}
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
		h1 {
			text-align: center;
		}

		@media screen and (max-width:1700px) {
			.cover h1 {
				font-size: 10em;
			}

			.aes {
				font-size: 2em;
			}
		}

		@media screen and (max-width:1200px) {
			.cover h1 {
				font-size: 10em;
			}



			.aes {
				font-size: 2em;
			}
		}

		@media screen and (max-width:992px) {

			.cover h1 {
				font-size: 10em;
			}

			.aes {
				font-size: 2em;
			}
		}

		@media screen and (max-width:850px) {
			.aes {
				font-size: 2em;
			}
		}

		@media screen and (max-width:767px) {


			.aes {
				font-size: 2em;
			}

			.cover h1 {
				font-size: 10em;
			}


			ul {
				margin-top: 80px;
			}


			.cantante {
				font-size: 2em;
				position: relative;
				top: 100px;
			}

			.scelta {
				top: 12em;
			}


		}

		@media screen and (max-width:576px) {
			.cantante {
				font-size: 4em;
				position: relative;
				top: 0px;
			}

			.cover h1 {
				font-size: 6em;
			}

			.aes {
				font-size: 1.2em;
			}

		}

		.a {
			border: 5px solid #1ab3c1;
		}


		.ar {
			background-color: white;
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



		.adas {

			font-family: Swistblnk Monthoers;
			font-size: 5em;
		}

		.aes {

			font-family: Swistblnk Monthoers;
			text-align: center;
			color: red;
		}






		.profiloo {

			font-family: Swistblnk Monthoers;
			font-size: 2em;
			text-align: center;
			color: black;
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
					<li><a id="activePage" href="#" tabindex="" accesskey="">CONTACTS</a></li>

				</ul>
			</div>
			<div class="container-menu-icon col-2 col-sm-2 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu();">☰</a>
			</div>
		</div>
		<div class="content">
			<div class=" row">
				<div class="cover art col-sm-12 col-md-12">

					<h1>CONTACTS </h1>


				</div>
			</div>


			<div class="row">

				<div class="b col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<h1 class="adas">FAQ
						<hr>Se hai dubbi,</br> scrivici!!</h1>
					<hr>
					<p class="aes">email: info@piscinassoundfestival.com<br />
						mobile: + 39.000.3172164<br />
						Ufficio Stampa:<br />
						Sound Media Activities<br />
						laura@soundmediaactivities.com <br />
						+39.3397154021<br />
					</p>
				</div>


				<div class=" b  col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-md-6">
					<form action="faq.php" method="post">

						<div class="form-row">

							<div class="form-group col-md-6">
								<label for="nome" class="col-form-label">Nome</label>
								<input name="nome" type="text" id="nome" class="form-control" placeholder="Nome"></div>
							<div class="form-group col-md-6">
								<label for="cogn" class="col-form-label">Cognome</label>
								<input type="text" class="form-control" id="cogn" name="cogn" placeholder="Cognome">
							</div>
						</div>


						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-12 ">
								<label for="textarea">Message</label>
								<textarea class=" text form-control" id="textarea" name="testo" placeholder="Text"></textarea>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<button type="submit" class="btn btn-warning">Invia</button>
							</div>
						</div>



					</form>
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


</body>






</html>