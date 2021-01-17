<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="js/footer.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js" integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/main.css">

	<!-- <?php
			// print_r($_SESSION);
			?> -->
	<?php function mypage()
	{

		if (isset($_SESSION["utente"])) {
			echo "<li><a class=\"notActive pagina\" href=\"eventi.php\" >EVENTI</a></li>";
			echo "<li><a class=\"notActive pagina\" href=\"eventcreate.php\" >CREATE</a></li>";
			echo " <li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";
		} else {
			echo "<li><a class=\"notActive pagina\" href=\"registrazione.php\" >CREATE</a></li>";
			echo " <li><a id=\"subdrop\" href=\"registrazione.php\">LOGIN</a></li>";
		}
	}
	?>
	<?php function mypageMobile()
	{

		if (isset($_SESSION["utente"])) {
			$ut = $_SESSION["utente"];
			echo "<li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";
		} else {
			echo "<li><a id=\"subdrop\" href=\"registrazione.php\">LOGIN</a></li>";
		}
	}
	?>
	<?php function buttonHome()
	{
		if (isset($_SESSION["utente"])) {
			echo " <div class=\"row no-gutters justify-content-around\">";
			echo " <div class=\"col-12 col-md-3 \">";
			echo " <div class=\"home-call-to-action m-3 p-2\">";
			echo " <a class=\"homebtn\" href=\"eventi.php\">EVENTS</a></li>";
			echo " </div>";
			echo " </div>";
			echo " <div class=\"col-12 col-md-3 \">";
			echo " <div class=\"home-call-to-action m-3 p-2\">";
			echo " <a class=\"homebtn\" href=\"eventcreate.php\">CREATE</a></li>";
			echo " </div>";
			echo " </div>";
			echo " </div>";
		} else {
			echo " <div class=\"row no-gutters justify-content-around\">";
			echo " <div class=\"col-12 col-md-3 \">";
			echo " <div class=\"home-call-to-action m-3 p-2\">";
			echo " <a class=\"homebtn\" href=\"registrazione.php\">CREATE</a></li>";
			echo " </div>";
			echo " </div>";
			echo " <div class=\"col-12 col-md-3\">";
			echo " <div class=\"home-call-to-action m-3 p-2\">";
			echo " <a class=\"homebtn\" href=\"registrazione.php\">SIGN UP</a></li>";
			echo " </div>";
			echo " </div>";
			echo " </div>";
		}
	}
	?>
	<style>
		.content .home-call-to-action {
			background: black;
			/* color: #039ed8; */
			display: flex;
			border-radius: 5px;
			align-items: center;
			justify-content: center;
		}

		.title-home {
			text-align: center;
			font-weight: bold
		}

		.content .home-call-to-action .homebtn {
			width: 100%;
			text-align: center;
			font-size: 25px;
			font-weight: bold
		}

		@media screen and (min-width: 1280px) {
			.claim {
				height: 500px;

			}
		}

		@media screen and (min-width: 768px) and (max-width:1279px) {
			.claim {
				height: 300px;

			}
		}

		@media screen and (min-width: 360px) and (max-width:767px) {
			.claim {
				height: 200px;

			}
		}

		.claim {
			background-image: url(assets/images/homeimg3.png);
			display: block;
			background-size: cover
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

	<title>EventYou</title>
</head>

<body>
	<div class="deskview container-fluid p-0 m-0 ">
		<div class="navigation-menu row m-0" id="myTopnav">
			<div class="col-10 col-sm-10 col-md-5 col-lg-6">
				<img id="logo" src="assets/images/newlogo.png" alt="">
			</div>
			<div class="d-none d-md-block col-md-7 col-lg-4 offset-lg-1">
				<ul class="pl-2">
					<li> <a id="activePage" href="#">HOME</a></li>
					<?php
					$mypage = mypage();
					?>
				</ul>
			</div>
			<div class="container-menu-icon col-2 col-sm-2 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu();">☰</a>
			</div>
		</div>
		<div class="content">
			<div class="container-fluid p-0">
				<div class="row m-0">
					<div class="col-12 claim"></div>
				</div>
			</div>
			<div class="container-fluid py-4">
				<div class="row">
					<div class="col-12">
						<h4 class="title-home">Crea i tuoi eventi con la nostra piattaforma dedicata</h4>
					</div>
				</div>
				<?php
				$mypage = buttonHome();
				?>
			</div>

		</div>
	</div>

	<footer id="footer">
	</footer>
	<div class="mobileview container-fluid p-0">
		<div class="mobilecontainer row">
			<div class="col-12 mobilecol">
				<ul class="p-0">
					<?php
					$mypage = mypageMobile();
					?>
					<li> <a id="activePage" href="">HOME</a></li>
					<?php
					if (isset($_SESSION["utente"])) {
						$ut = $_SESSION["utente"];
						echo "<li><a class=\"notActive pagina\" href=\"eventi.php\">EVENTS</a></li>";
					}
					?>
					<?php
					if (isset($_SESSION["utente"])) {
						$ut = $_SESSION["utente"];
						echo "<li><a class=\"notActive pagina\" href=\"eventcreate.php\">CREATE</a></li>";
					} else {
						echo "<li><a class=\"notActive pagina\" href=\"registrazione.php\">CREATE</a></li>";
					}
					?>
					<li><a href="#" class="icona mt-5" onclick="ritornamenu()"><i class="fas fa-arrow-circle-left" style="font-size: 2em;"></i></a></li>

				</ul>
			</div>
		</div>
	</div>
</body>

</html>