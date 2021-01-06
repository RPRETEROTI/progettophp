<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="js/main.js"></script>
	<script src="js/footer.js"></script>
	<script src="js/login.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/main.css">



	<?php session_start(); ?>


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

		@media screen and (min-width: 768px) {
			.username {
				justify-content: flex-end;
			}

			.loginbtn {
				display: flex;
				justify-content: center;
			}
		}

		@media screen and (min-width: 360px) and (max-width: 767px) {

			.username,
			.loginbtn {
				display: flex;
				justify-content: center;
			}
		}

		.accesso {
			margin-right: 5px;
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
		<div class="content container-fluid">
			<div class="row">
				<div class="cover col-12">
					<h1>MYPAGE</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-8">
					<h3 class="title">Bentornato. Accedi al tuo profilo</h3>
				</div>
			</div>
			<i class="fas fa-toggle-on"></i>
			<i class="fas fa-toggle-off"></i>
			<form action="#" method="post" id="loginForm">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-md-5 d-flex username">
							<div class="form-group row">
								<label for="usr" class="accesso col-form-label">Username</label>
								<div class="ml-2">
									<input name="usr" type="text" id="usr" class="credenziali form-control">
									<small id="passwordHelpBlock" class="usrn message form-text ">;
									</small>
									<?php
									// $causa = $_REQUEST["causa"];
									// if ($causa == 1) {
									// 	$error_msg = "Utente inesistente";
									// 	echo "<small id=\"passwordHelpBlock\" class=\"usrn form-text \">";
									// 	echo "$error_msg";
									// 	echo "</small>";
									// }
									?>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-5 d-flex justify-content-start  offset-md-1">
							<div class="form-group row">
								<div class="mr-2">
									<input name="pwd" type="password" id="pwd" class="credenziali form-control">
									<?php
									// $causa = $_REQUEST["causa"];
									// if ($causa == 2) {
									// 	$error_msg = "Password errata";
									// 	echo "<small id=\"passwordHelpBlock\" class=\"usrn form-text\">";
									// 	echo "$error_msg";
									// 	echo "</small>";
									// }
									?>
								</div>
								<label for="pwd" class="accesso col-form-label">Password</label>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-12 col-md-5 justify-content-flex-end d-flex">
							<button type="submit" class="btn" style="background-color:#039ed8">ACCEDI</button>
						</div>
						<div class="col-12 col-md-5 loginbtn">
							<button type="submit" class="btn" style="background-color:#039ed8;justify-content:flex-start">REGISTRATI</button>
						</div>
					</div>
					<!-- <div class="col-12 col-md-2 loginbtn">
						<div class="form-group row">
							<button type="submit" class="btn" style="background-color:#039ed8">ACCEDI</button>
						</div>
					</div> -->
				</div>
			</form>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<h3 class="title">Registrati per accedere al tuo profilo ed acquistare i nostri biglietti</h2>
				</div>
			</div>

			<form action="registrazionecompiuta.php" method="post" enctype="multipart/form-data" id="formvalidato">
				<div class="row m-3">
					<div class="offset-1 offset-md-3 col-11 col-md-7 col-lg-6 ">
						<div class="form-row">
							<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<label for="user" class="col-form-label">Username*</label>
								<input name="user" type="text" id="user" class=" credenziali form-control" placeholder="" maxlength="20" value="" aria-describedby="passwordHelpBlock">
								<?php
								// $causa = $_REQUEST["causa"];
								// if ($causa == 4) {
								// 	$error_msg = "Utente gia' esistente";
								// 	echo "<small id=\"passwordHelpBlock\" class=\"usrn form-text\">";
								// 	echo "$error_msg";
								// 	echo "</small>";
								// }
								// if ($causa != 4) {
								// 	echo "<small id=\"passwordHelpBlock\" class=\"form-text text-muted\">";
								// 	echo "Your username must be 7 characters long.";
								// 	echo "</small>";
								// }
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
								<input name="nome" type="text" id="nome" class="form-control" placeholder="" value="">
							</div>
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
						<div class="form-row">
							<div class=" col-12 d-flex justify-content-center">
								<button type="submit" class="btn" style="background-color:#039ed8">REGISTRATI</button>
							</div>
						</div>
					</div>
			</form>

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


	<!-- <script text="javascript">
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

</html>