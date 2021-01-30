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
	<script src="js/create-event.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js" integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/main.css">


	<?php
	// print_r($_SESSION);
	?>

	<?php function mypageMobile()
	{
		if (isset($_SESSION["utente"])) {
			echo "<li><a id=\"subdrop\" href=\"logout.php\"  tabindex=\"2\" accesskey=\"8\">LOGOUT</a></li>";
		} else {
			echo "<li><a id=\"subdrop\" href=\"registrazione.php\" tabindex=\"2\" accesskey=\"8\">LOGIN</a></li>";
		}
	}
	?>
	<style>
		.title {
			text-align: center;
			padding: 8px;
			font-weight: bold;
		}

		.modal {
			display: block;
		}

		.createbtn {
			background-color: #039ed8;
			padding: 10px 30px;
			border-radius: 6px;
			align-items: center;
			justify-content: center;
			font-size: 20px;
			font-weight: bold;
			margin-top: 10px;
			color: white;
			width: 50%;
		}


		.imgbutton {
			position: absolute;
			top: 38px;
			/* right: 187px; */
			bottom: 0;
			z-index: 78;
			display: block;
			height: 2.25rem;
			padding: .375rem .75rem;
			line-height: 1.5;
			color: white;
			content: "Browse";
			background-color: #039ed8;
			z-index: 10;
			width: 95px;
			left: 8px;
			border-left: 1px solid #ced4da;
			border-radius: .25rem;
			border-style: hidden;
			font-weight: bold;
			text-align: center;
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
		<div class="errorModal"></div>
		<div class="navigation-menu row m-0" id="myTopnav">
			<div class="col-10 col-sm-10 col-md-5 col-lg-6">
				<img id="logo" src="assets/images/newlogo.png" alt="">
			</div>
			<div class="d-none d-md-block col-md-7 col-lg-4 offset-lg-1">
				<ul class="pl-2">
					<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<?php
					if (isset($_SESSION["utente"])) {
						echo "<li><a class=\"notActive pagina\" href=\"eventi.php\">EVENTS</a></li>";
					}
					?>
					<li> <a id="activePage" href="">CREATE</a></li>

					<?php if (isset($_SESSION["utente"])) {
						echo " <li><a id=\"subdrop\" href=\"logout.php\">LOGOUT</a></li>";
					} else {
						echo " <li><a id=\"subdrop\" href=\"registrazione.php\">LOGIN</a></li>";
					} ?>
				</ul>
			</div>
			<div class="container-menu-icon col-2 col-sm-2 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu()">☰</a>
			</div>
		</div>
		<div class="content container-fluid p-0">
			<div class="row m-0">
				<div class="cover col-12">
					<h1>CREATE</h1>
				</div>
			</div>
			<div class="container-fluid registration p-0">
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
					<li><a class="notActive pagina" href="index.php">HOME</a></li>
					<?php
					if (isset($_SESSION["utente"])) {
						$ut = $_SESSION["utente"];
						echo "<li><a class=\"notActive pagina\" href=\"eventi.php\">EVENTS</a></li>";
					}
					?>
					<li> <a id="activePage" href="#">CREATE</a></li>
					<li><a href="#" class="icona mt-5" onclick="ritornamenu()"><i class="fas fa-arrow-circle-left" style="font-size: 2em;"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<script src="js/jquery.validate.min.js"></script>
</body>


</html>