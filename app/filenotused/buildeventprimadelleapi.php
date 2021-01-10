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
    <script src="js/create-event.js"></script>


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
            top: 3px;
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

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="title">Crea il tuo prossimo evento</h2>
                    </div>
                </div>

                <form action="#" method="post" id="formvalidato">
                    <div class="row m-3">
                        <div class="offset-1 offset-md-3 col-11 col-md-7 col-lg-6 ">
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-12">
                                    <label for="name" class="col-form-label">Nome*</label>
                                    <input name="name" type="text" id="name" class=" credenziali form-control" placeholder="" maxlength="20" value="" aria-describedby="passwordHelpBlock">
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
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                                    <label for="code">Codice*</label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Codice" aria-describedby="passwordHelpBlock">
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Il tuo codice deve essere lungo 5 caratteri
                                    </small>
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                                    <label for="checkcode"> Conferma codice*</label>
                                    <input type="text" class="form-control" id="checkcode" name="checkcode" placeholder=" Conferma Codice" aria-describedby="passwordHelpBlock">
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Il tuo codice deve essere lungo 5 caratteri
                                    </small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-12 col-md-6 offset-md-3 ">
                                    <div class="testt">Carica</div>
                                    <input type="file" class="form-control" id="img" name="img" placeholder="inserisci img">

                                </div>
                                <div class="custom-file form-group  col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <label class="img-action custom-file-label" for="customFile">Inserisci foto</label>
                                    <input type="file" name="fileToUpload" class="custom-file-input" id="custom-File">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12 col-sm-12 ">
                                    <label for="descr" class="col-form-label">Descrizione</label>
                                    <!-- <input name="nome" type="text" id="nome" class="form-control" placeholder="" value=""> -->
                                    <textarea class="form-control" id="descr" name="descr" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-4 offset-md-4">
                                    <label for="price">Prezzo*</label>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" aria-describedby="passwordHelpBlock">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-12">
                                    <label for="cemail"> Scegli categoria:*</label>
                                    <div class="form-check form-check-inline ml-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="a1" value="a1">
                                        <label class="form-check-label" for="a1">MUSIC</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="c3" value="c3">
                                        <label class="form-check-label" for="c3">CULTURE</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="b2" value="b2">
                                        <label class="form-check-label" for="b2">SPORT</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="d4" value="d4">
                                        <label class="form-check-label" for="d4">CUCINA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-9 col-sm-4 offset-md-2">
                                    <label for="indirizzo">Data</label>
                                    <input type="date" class="form-control" id="date" name="date" placeholder="GG/MM/AA">
                                </div>
                                <div class="form-group col-3 col-sm-3">
                                    <label for="hour">Ora</label>
                                    <input type="time" class="form-control" id="hour" name="hour" placeholder="00">
                                </div>
                            </div>
                            <!-- <div class="form-row"> -->
                            <!-- <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
									<label for="city">Foto</label>
									<input type="text" class="form-control" id="city" name="city">
								</div> -->
                            <!-- <div class="form-group">
								<label for="exampleFormControlFile1">Example file input</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div> -->
                            <!-- <div class="form-row">
								<div class="custom-file form-group  col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<input type="file" name="fileToUpload" class="custom-file-input" id="custom-File"><label class="img-action custom-file-label" for="customFile">Inserisci foto</label>
								</div>
							</div> -->

                            <!-- <div class="form-row">
									<div class="form-group  d-flex justify-content-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<input type="submit" class=" my-2 btn btn-primary" value="Upload Image" name="submit">
										<div> </div>
									</div> -->
                            <div class="form-row mt-4">
                                <div class=" col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn createbtn" style="background-color:#039ed8">CREA</button>
                                </div>
                            </div>
                            <!-- </div> -->
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
<!-- <script src="js/jquery.validate.min.js"></script>
<script src="js/validazione.js"></script> -->

</html>