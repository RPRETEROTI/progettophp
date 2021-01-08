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
	<script src="js/create-event2.js"></script>

	<!-- <script src="js/validazione.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js" integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/main.css">


	<?php
	print_r($_SESSION);
	?>


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

	<style>
		.title {
			text-align: center;
			padding: 8px
		}

		.usrn {
			color: red;
		}

		.switchcontainer {
			display: flex;
			justify-content: start;
			align-items: center;
			bottom: 10px;
			position: relative;
			color: #039ed8;
			font-size: 30px;
		}

		@media screen and (min-width: 768px) {
			.username {
				justify-content: flex-end;
			}

			.loginbtn {
				display: flex;
				justify-content: flex-start;
			}
		}

		@media screen and (min-width: 360px) and (max-width: 767px) {

			.username,
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
			padding: 10px 20px;
			margin: 2em auto;
		}

		.mypage .row {
			align-items: center;
			margin: 5% auto;
		}

		.loginbtn {
			background-color: #F08080;
		}

		.signbtn {
			background-color: #039ed8;

		}

		.mypagebtn {
			/* background-color: #039ed8; */
			padding: 10px 30px;
			border-radius: 6px;
			margin: 2em 11em;
		}

		.title {
			font-weight: bold;
		}

		.backgr {
			background-color: #0f4c81;
		}

		.nobackgr {
			background-color: white;
		}

		.nobackgr .btn {
			background-color: #039ed8;
		}

		.backgr .btn {
			background-color: white;
		}

		.backgr h3 {
			color: white;
		}

		.nobackgr h3 {
			color: black;
		}

		.accesso {
			margin-right: 5px;
		}

		.testt {
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
			/* padding: 10px; */
			width: 95px;
			left: 8px;
			border-left: 1px solid #ced4da;
			border-radius: .25rem;
			border-style: hidden;
		}
	</style>
	<title>Piscinas Sounds </title>
</head>

<body>
	<div class="deskview container-fluid p-0 m-0 ">
		<div></div>
		<div class="navigation-menu row m-0" id="myTopnav">
			<div class="col-10 col-sm-10 col-md-3 col-lg-5">
				<img id="logo" class="w-100" src="assets/images/logo.png" alt="">
			</div>
			<div class="d-none d-md-block col-md-9 col-lg-7">
				<ul class="pl-2">
					<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
					<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
					<li> <a id="activePage" href="">MYPAGE</a></li>
					<li><a id="subdrop" href="">LOGIN</a></li>
				</ul>
			</div>
			<div class="container-menu-icon col-2 col-sm-2 d-md-none">
				<a href="#" class="icon" onclick="cambiamenu()">☰</a>
			</div>
		</div>
		<div class="content container-fluid p-0">
			<div class="row">
				<div class="cover col-12">
					<h1>MYPAGE</h1>
				</div>
			</div>
			<div class="container-fluid registration">
			</div>
		</div>
		<footer id="footer">
		</footer>
		<div class="mobileview container-fluid">
			<div class="mobilecontainer row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<ul>
						<li><a href="#" class="icona" onclick="ritornamenu()">X</a></li>
						<li><a id="subdrop" href="" tabindex="2" accesskey="8">LOGIN</a></li>
						<li><a class="notActive pagina" href="index.php" tabindex="" accesskey="">HOME</a></li>
						<li><a class="notActive pagina" href="artisti.php" tabindex="" accesskey="">ARTISTS</a></li>
						<li> <a id="activePage" href="#">MYPAGE</a></li>

					</ul>
				</div>
			</div>
		</div>

		<script src="js/jquery.validate.min.js"></script>

		<!-- <script text="javascript">
											<input type="file" name="fileToUpload" class="custom-file-input" id="custom-File"><label class="img-action custom-file-label" for="customFile">Inserisci foto</label>

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
		</script> -->

</body>
<!-- <script src="js/jquery.validate.min.js"></script>
<script src="js/validazione.js"></script> -->

</html>