<?php
// session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="js/footer.js"></script>
	<script src="js/authenticate.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js" integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/main.css">


	<style>
		.title {
			text-align: center;
			padding: 8px;
			font-weight: bold;
		}

		@media screen and (min-width: 768px) {
			.loginbtn {
				display: flex;
				justify-content: flex-start;
			}
		}

		@media screen and (min-width: 360px) and (max-width: 767px) {
			.loginbtn {
				display: flex;
				justify-content: center;
			}
		}

		.mypage {
			/* height: 300px; */
			margin: 2em 0em;
			justify-content: center;

		}

		.containerBtn {
			/* padding: 10px 20px;
			margin: 2em auto; */
			align-items: center;
			display: flex;

		}

		.containerBtn .btn {
			padding: 10px 30px;
			border-radius: 6px;
			align-items: center;
			justify-content: center;
			font-size: 20px;
			font-weight: bold;
			margin-top: 10px;
			color: white;
		}

		.mypage .row {
			align-items: center;
			margin: 5% auto;
		}

		.loginbtn {
			background-color: #F08080;
		}

		.signbtn {
			background-color: black;

		}

		.mypagebtn {
			/* background-color: #039ed8; */
			padding: 10px 30px;
			border-radius: 6px;
			/* margin: 2em 11em; */
			height: 80px;
			width: 250px;
			align-items: center;
			justify-content: center;
			font-size: 20px;
			font-weight: bold;
			color: white
		}

		.accesso {
			margin-right: 5px;
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
		<div></div>
		<div class="navigation-menu row m-0" id="myTopnav">
			<div class="col-10 col-sm-10 col-md-5 col-lg-6">
				<img id="logo" src="assets/images/newlogo.png" alt="">
			</div>
			<div class="d-none d-md-block col-md-7 col-lg-4 offset-lg-1">
				<ul class="pl-2">
					<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<li><a id="activePage" href="registrazione.php" tabindex="" accesskey="">CREATE</a></li>
					<li><a id="subdrop" href="">LOGIN</a></li>
				</ul>
			</div>
			<div class="container-menu-icon col-2 col-sm-2 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu()">☰</a>
			</div>
		</div>
		<div class="content container-fluid p-0">
			<div class="row m-0">
				<div class="cover col-12">
					<h1>MYPAGE</h1>
				</div>
			</div>
			<div class="container-fluid px-0 py-5 my-5">
				<div class="row m-0">
					<div class="col-12">
						<h3 class="title">Accedi O Registrati.</h3>
					</div>
				</div>
				<div class=" row buttonregistration"></div>
			</div>
			<div class="container-fluid registration">
			</div>
		</div>
	</div>
	<footer id="footer">
	</footer>
	<div class="mobileview container-fluid p-0">
		<div class="mobilecontainer row">
			<div class="col-12 mobilecol">
				<ul class="p-0">
					<li><a id="subdrop" href="" tabindex="2" accesskey="8">LOGIN</a></li>
					<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<li><a id="activePage" href="registrazione.php" tabindex="" accesskey="">CREATE</a></li>
					<li><a href="#" class="icona mt-5" onclick="ritornamenu()"><i class="fas fa-arrow-circle-left" style="font-size: 2em;"></i></a></li>

				</ul>
			</div>
		</div>
	</div>
</body>

</html>