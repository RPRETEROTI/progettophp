<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="js/main.js"></script>
	<script src="js/footer.js"></script>
	<script src="js/read-categories.js"></script>
	<script src="js/delete-event.js"></script>
	<script src="js/read-artistswithfilter.js"></script>
	<!-- <script src="js/artistTemplate.js"></script> -->


	<!-- <script src="js/create-favorite-song.js"></script> -->

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js" integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/main.css">

	<?php
	include_once './models/APPDatabase.php';
	include_once './models/Artist.php';
	session_start();
	// $sessionUser = "";
	$profile = "";
	// $filterkey="";
	// if (isset($_SESSION["filter"])) {
	// 	$filterkey= $_SESSION["filter"];
	// }
	if (isset($_SESSION["utente"])) {
		$sessionUser = $_SESSION["utente"];
		$profile = $_REQUEST["profilopagina"];
		// $filter = $_REQUEST["filter"];
	}


	echo $profile . '+';
	// $db = new APPDatabase();
	// $database = $db->getConnection();
	// $artists = new Artist($database);
	// if ($profile != "") {
	// 	$user = $artists->readWithAuthentication();
	// 	echo "capretta";
	// } else {
	// 	$user = $artists->read();
	// 	echo "porcone";
	// }
	?>

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
	$ut = "";
	if (isset($_SESSION["utente"])) {
		$ut = $_SESSION["utente"];
	} else {
		$ut = "";
	}


	?>
	<!-- <?php
			$filterkey = ($_REQUEST["filter"]);
			// if (isset($_SESSION["filter"])) {
			// 	$filterkey = $_SESSION["filter"];
			// $filterkey = $_REQUEST["filter"];
			// } 
			?> -->
	<?php
	// $filterkeyz = $_REQUEST["filter"];
	echo var_dump($_REQUEST["filter"]);

	echo var_dump($_SESSION['filter'])
	?>
	<script>
		$(document).ready(function() {
			var keyfilter;
			// show list of artists on first load
			// showCategoriesFilter();

			showArtists(keyfilter);

			// var keyFilter = "all";
			// keyFilter = $("#filterForm").find(":selected").val() ?? "all";
			// console.log("keya", keyFilter);
			// console.log("xc", $("#filterForm").find(":selected").val());
			// if (keyFilter === "all") {
			//   showArtists(keyFilter);
			// }
			$(document).on("submit", "#filterForm", function() {
				var keyFilter;
				keyFilter = $(this).find(":selected").attr("value");
				console.log("key", keyFilter);
				console.log("cetrioli");
				showArtists(keyFilter);
			});
			$(document).on("mouseover", ".cantante", function() {
				// first par = event; second (optional) par = selector (in this case the class); last par = event handler
				$(this).css("color", "white");
			});
			$(document).on("mouseout", ".cantante", function() {
				// first par = event; second (optional) par = selector (in this case the class); last par = event handler
				$(this).css("color", "black");
			});
		});

		function showArtists(keyFilter) {
			// if (keyFilter) {
			// 	<?php
					// 	unset($_SESSION['filter']);
					// 	
					?>
			// }
			// get data from the read service
			$.ajax({
				// url: "http://localhost/progetto_approcciavanzati2020/app/api/read.php?accesso=<?php echo $ut; ?>&filterKey=" + keyFilter,

				url: "http://localhost/progetto_approcciavanzati2020/app/api/read.php?filterKey=" + keyFilter,
				// keyFilter ? "http://localhost/progetto_approcciavanzati2020/app/api/read.php?filterKey=" + keyFilter : 
				type: "GET",
				success: function(data) {
					console.log("datacheck", data);
					console.log("keyFilter", keyFilter);
					// keyFilter = keyFilter === "all" ? keyFilter : data.artists.category;
					// alert("ready");
					// html for listing products
					readArtistsTemplate(data); // data = server's response (= list of artists, as JSON object)
				},
				error: function(xhr, err, exc) {
					// show error to console
					console.log(xhr, err, exc);
					console.log("capra");
					//console.warn(xhr.responseText);
					// console.log(form_data);
				},
			});
			return false;
		} // showProducts	
	</script>
	<!-- <script>
		// product list html
		function readArtistsTemplate(data) {
			// data = list of products, as JSON object: {"products": [{..},{..}, ]}
			console.log("data", data);
			console.log("dataar", data.artists);

			containerHtml = `<div class="container-fluid p-0">`;
			// loop through returned list of data
			$.each(data.artists, function(key, val) {
				console.log("datasingolo", data.artists);
				containerHtml +=
					`<div class="background-artist row align-items-center ">
					<div style="background-image: url(assets/images/` +
					val.fotoart +
					`)" class="container-img-artist col-12 col-sm-6"></div>
                    <div class="d-flex flex-column artist-name col-12 col-sm-5 col-md-6 col-xl-6">
                        <h5 class="cantante">` +
					val.name +
					`</h5>
                        <p>Canzone artista:` +
					val.song +
					`</p>
                        <p>Ora esibizione:` +
					val.hourexhibition +
					`</p>
                        <p>Data esibizione:` +
					val.dateexhibition +
					`</p>
					<?php
					// if ($ut != "") {
					// 	echo "<div>";
					// 	echo "<h5 class=\"song-section-title\">Inserisci la tua canzone preferita</h5>";
					// 	// echo "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"formvalidato\">";
					// 	echo "<form action=\"#\" method=\"post\" id=\"formsong\">";
					// 	echo "<div class=\"form-row\">";
					// 	echo "<div class=\"form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7\">";
					// 	echo "<textarea name=\"song\" type=\"text\" id=\"song\" class=\" credenziali form-control\"  maxlength=\"100\" value=\"\" aria-describedby=\"passwordHelpBlock\" ></textarea>";
					// 	echo "</div>";
					// 	echo "<div class=\" col-12 col-xl-5 d-flex justify-content-center\">";
					// 	echo "<button type=\"submit\" class=\"btn h-75\"code  data-id=\"`$val.code`\" style=\"background-color: white;align-items: center;align-content: center;display: flex;\">SAVE</button>";
					// 	echo "</div>";
					// 	echo "</div>";
					// 	echo "</form>";
					// 	echo "</div>";
					// };
					?>
					</div>
					</div>`
			});
			containerHtml += `</div>`;

			// inject to 'page-content' of our app
			$(".artist-section").html(containerHtml);
		}
	</script> -->
	<style>
		.cantante {
			color: black;
			font-family: Swistblnk Monthoers;
			margin: auto;
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
			border-bottom: 2px solid white
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
			flex-direction: column;
		}

		.song-section-title {
			font-size: 16px;
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
			<div class="col-10 col-sm-10 col-md-5 col-lg-6">
				<img id="logo" class="w-100" src="assets/images/logo.png" alt="">
			</div>
			<div class="d-none d-md-block col-md-7 col-lg-4 offset-lg-2">
				<ul class="pl-2">
					<li> <a class="notActive pagina" href="home.php">HOME</a></li>
					<li><a id="activePage" href="#" tabindex="" accesskey="">ARTISTS</a></li>
					<?php
					$mypage = mypage()
					?>
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
					<h1>ARTIST</h1>
				</div>
			</div>
			<!-- <div id="feedback"></div> -->
			<!-- <div class="row my-2">
				<div class="col-12 d-flex align-items-center justify-content-end">
					<button id="load-categories" class="btn py-2 px-5" style="background-color:#039ed8">
						FILTER
					</button>
				</div>
			</div> -->

			<div class=" container-fluid p-0">
				<form action="#" method="POST" id="filterForm">
					<div class="form-row my-2">
						<div class="form-group col-8 d-flex align-items-center justify-content-end">
							<button type="submit" class="btn py-2 px-5" style="background-color:#039ed8">
								FILTER
							</button>
						</div>
						<div class="form-group event-filter-by-category d-flex align-items-center col-4 d-flex justify-flex-end">
						</div>
					</div>
				</form>

			</div>
			<div class="artist-section"></div>
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
						echo " <li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";
					} else {
						echo " <li><a id=\"subdrop\" href=\"registrazione.php?causa=0\">LOGIN</a></li>";
					}
					?>
					<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<li> <a id="activePage" href="">ARTISTS</a></li>
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
	<!-- <?php
			// unset($_SESSION['filter']);
			?> -->
</body>

</html>