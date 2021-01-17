<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="js/footer.js"></script>
	<script src="js/delete-event.js"></script>
	<script src="js/filter-event.js"></script>
	<script src="js/read-categories.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js" integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/main.css">

	<?php
	include_once './models/APPDatabase.php';
	?>

	<?php function mypageMobile()
	{
		if (isset($_SESSION["utente"])) {
			echo "<li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";
		} else {
			echo "<li><a id=\"subdrop\" href=\"registrazione.php\">LOGIN</a></li>";
		}
	}
	?>

	<style>
		.event-name {
			color: black;
			font-family: Swistblnk Monthoers;
			margin: auto;
			font-weight: bold;

		}

		.eventcontent {
			font-weight: bold;
			border-bottom: 2px solid black
		}

		#feedback {
			position: fixed;
			top: 135px;
			width: 50%;
			right: 0px
		}

		.left {
			left: 0px
		}

		.right {
			right: 0px
		}

		.artist-name {
			height: 100%;
		}

		@media screen and (min-width:1280px) {
			.event-name {
				font-size: 3em;
			}

			.container-img-artist {
				height: 30em;
				background-size: cover;
			}

			.eventcontent {
				font-size: 18px;
			}
		}

		@media screen and (min-width:360px) and (max-width:1279px) {
			.eventcontent {
				font-weight: bold;
				font-size: 16px;
			}

			.event-name {
				font-size: 2em;
			}

			.container-img-artist {
				height: 26em;
				background-size: cover;
			}
		}

		.background-artist {
			background-color: #49c6e5;
			border-bottom: 2px solid white
		}


		.artist-margin {
			margin: 0.3em;
		}

		.artist-name {
			position: relative;
			flex-direction: column;
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

		.filterbtn {
			background-color: black;
			color: white;
			font-weight: bold;
			font-size: 20px;
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
					<li> <a class="notActive pagina" href="index.php">HOME</a></li>
					<li><a id="activePage" tabindex="" accesskey="">EVENTI</a></li>
					<li> <a class="notActive pagina" href="eventcreate.php">CREATE</a></li>
					<li><a id="subdrop" href="logout.php">LOGOUT</a></li>
				</ul>
			</div>
			<div class="container-menu-icon col-2 col-sm-2 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu();">☰</a>
			</div>
			<div id="feedback"></div>
		</div>
		<div class="content container-fluid">
			<div class="row">
				<div class="cover col-12">
					<h1>EVENTS </h1>
				</div>
			</div>
			<div class=" container-fluid p-0">
				<div class="event-filter-by-category"></div>
				<div class="artist-section"></div>
				<div class="artist-section-filtered"></div>
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
					<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<li> <a id="activePage" href="">EVENTS</a></li>
					<li><a class="notActive pagina" href="eventcreate.php" tabindex="" accesskey="">CREATE</a></li>
					<li><a href="#" class="icona mt-5" onclick="ritornamenu()"><i class="fas fa-arrow-circle-left" style="font-size: 2em;"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>