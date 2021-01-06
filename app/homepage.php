<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="js/main.js"></script>

	<script src="js/footer.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/main.css">

	<script>
		// $(document).ready(function() {
		// 	$(document).on("submit", "#formsong", function() {
		// 		// first par = event; second (optional) par = selector (in this case the id); last par = event handler

		// 		// get form data
		// 		var form_data = JSON.stringify($("#formsong").serializeObject());
		// 		console.log("form_data", form_data);
		// 	});
		// });
		// $.fn.serializeObject = function() {
		// 	var o = {};
		// 	var a = this.serializeArray();
		// 	$.each(a, function() {
		// 		if (o[this.name] !== undefined) {
		// 			if (!o[this.name].push) {
		// 				o[this.name] = [o[this.name]];
		// 			}
		// 			o[this.name].push(this.value || "");
		// 		} else {
		// 			o[this.name] = this.value || "";
		// 		}
		// 	});
		// 	return o;
		// };
	</script>
	<?php
	print_r($_SESSION);
	?>
	<?php function mypage()
	{

		if (isset($_SESSION["utente"])) {
			// echo "<li class=\"drop\"> <a class=\"pagina\" href=\"profilo.php?profilopagina=$ut\">MYPAGE</a>";
			// echo "<li><a class=\"notActive pagina\" href=\"artisticonfilter.php\" >ARTISTSTest</a></li>";
			echo "<li><a class=\"notActive pagina\" href=\"eventi.php\" >EVENTI</a></li>";
			echo "<li><a class=\"notActive pagina\" href=\"buildevent.php\" >BUILDEVENT</a></li>";
			echo " <li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";
		} else {
			// echo "<li><a class=\"notActive pagina\" href=\"registrazione.php?causa=0\" tabindex=\"2\" accesskey=\"8\">MYPAGE</a></li>";
			echo " <li><a id=\"subdrop\" href=\"registrazione.php\">LOGIN</a></li>";
		}
	}
	?>
	<?php function buttonHome()
	{
		if (isset($_SESSION["utente"])) {
			$ut = $_SESSION["utente"];
			echo " <div class=\"row no-gutters\">";
			echo " <div class=\"col-12 col-md-6\">";
			echo " <div class=\"home-call-to-action m-3 p-2\">";
			echo " <a class=\"artists\" href=\"eventi.php\"> DISCOVER THE EVENTS</a></li>";
			echo " </div>";
			echo " </div>";
			echo " <div class=\"col-12 col-md-6 \">";
			echo " <div class=\"home-call-to-action m-3 p-2\">";
			echo " <a class=\"artists\" href=\"buildevent.php\">BUILD YOUR EVENT</a></li>";
			echo " </div>";
			echo " </div>";
			echo " </div>";
		} else {
			echo " <div class=\"row no-gutters\">";
			echo " <div class=\"col-12 col-md-12\">";
			echo " <div class=\"home-call-to-action m-3 p-2\">";
			echo " <a class=\"artists\" href=\"registrazione.php\">SIGN UP</a></li>";
			echo " </div>";
			echo " </div>";
			echo " </div>";
		}
	}
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

		#logo {
			height: 90px;
			width: 90px;
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
	<!-- <script src="js/test.js"></script> -->


	<!-- <script src="js/create-favorite-song.js"></script> -->
	<!-- <form action="#" method="post" id="formsong">
		<div class="form-row">
			<div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7">
				<textarea name="song" type="text" id="song" class=" credenziali form-control" maxlength="100"></textarea>
			</div>
			<div class=" col-12 col-xl-5 d-flex justify-content-center">
				<button type="submit" class="btn h-75" data-id="" style="background-color: white;align-items: center;align-content: center;display: flex;">SAVE</button>
			</div>
		</div>
	</form> -->


	<?php
	// include_once './models/APPDatabase.php';
	// include_once './models/Artist.php';

	// $db = new APPDatabase();
	// $database = $db->getConnection();
	// $sql = 'SELECT nome FROM artisti WHERE codice="co"';
	// $stmt = $database->prepare($sql);
	// $stmt->execute();
	// $tot=$stmt->rowCount();
	// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	// 	echo 'Il nome dello scopatore è:'.$row['nome'];
	// }
	// Per me è la cipolla: $tot";
	// $artists = new Artist($db);
	// $x= $artists->read();
	// $ciao = $x
	?>
	<?php
	// include_once './models/APPDatabase.php';
	// include_once './models/Artist.php';

	// $db = new APPDatabase();
	// $database = $db->getConnection();
	// $artists = new Artist($database);
	// $stmt = $artists->read();
	// $tot = $stmt->rowCount();

	// $artists = array();
	// $artists["artists"] = array();
	// // $sql = 'SELECT nome FROM artisti WHERE codice="co"';
	// // $stmt = $database->prepare($sql);
	// // $stmt->execute();
	// // $tot=$stmt->rowCount();
	// // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	// // 	echo 'Il nome dello scopatore è:'.$row['nome'];
	// // }
	// Per me è la cipolla: $tot";
	// $artists = new Artist($db);
	// $x= $artists->read();
	// $ciao = $x
	?>
	<!-- <script src="js/read-artists.js"></script> -->
	<!-- <div id='page-content'></div> -->

	<div class="test"></div>
	<div class="artist-section"></div>

	<div class="deskview container-fluid p-0 m-0 ">
		<div class="navigation-menu row m-0" id="myTopnav">
			<div class="col-10 col-sm-10 col-md-5 col-lg-6">
				<img id="logo" src="assets/images/newlogo.png" alt="">
			</div>
			<div class="d-none d-md-block col-md-7 col-lg-4 offset-lg-2">
				<ul class="pl-2">
					<li> <a id="activePage" href="homepage.php">HOME</a></li>
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
					<form id="formsong" action="#" method="post">
						First name: <input type="text" name="FirstName"><br>
						Last name: <input type="text" name="LastName"><br>
						<button type="submit" class="btn c h-75" style="background-color: white;align-items: center;align-content: center;display: flex;">SAVE</button>

					</form>
					<h3 class="description"> Non solo una sequenza di concerti e artisti per riempire un cartellone, ma una line up ambiziosa e mai schiava delle mode che mescola
						leggende internazionali e nuove stelle italiane. Scopri gli artisti e acquista i biglietti</h3>
				</div>
			</div>
			<?php
			$mypage = buttonHome();
			?>
			<div class="row no-gutters">
				<div class="marchio d-none d-md-block col-md-10">
					<img class="logo-home w-100" src="assets/images/logo.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<footer id="footer">
	</footer>
	<div class="mobileview container-fluid">
		<div class="mobilecontainer row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<ul>
					<li><a href="#" class="icona" onclick="ritornamenu()">X</a></li>
					<?php
					if (isset($_SESSION["utente"])) {
						$ut = $_SESSION["utente"];
						echo "<li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";
					} else {
						echo "<li><a id=\"subdrop\" href=\"registrazione.php?causa=0\">LOGIN</a></li>";
					}
					?>
					<li> <a id="activePage" href="">HOME</a></li>
					<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
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