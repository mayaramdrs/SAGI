<?php
				include("conecta.php");
				if (isset($_POST['hora'])) {
					$hora = $_POST['hora'];
					$quantidade = $_POST['quantidade'];
					$alimento = $_POST['alimento'];
					$consulta = $MySQLi->query("INSERT INTO tb_alimentacao
																(ALI_HORA,
																ALI_QUANTIDADE,
															  ALI_ALIMENTO) 
																VALUES 
																('$hora', '$quantidade', '$alimento')");
					header("Location: administrador.php");
		}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SAGI</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="SAGI-Logo.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="administrador.php?">Administrador</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="listar_doacoes.php?">Doações</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">
                        <span>
                            NOVA ALIMENTAÇÃO
                        </span><br><br><br>
                        <form action = "?" method = "POST">
                        <center>
														<div class="form-group col-md-6">
                                <label for="inputAddress2" style=" display: inline; float: left; font-size: 1.25rem">Horario da Comida</label>
                                <input type="time" name = "hora" required class="form-control" id="inputAddress2" placeholder="Digite a hora">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress" style=" display: inline; float: left; font-size: 1.25rem">Quantidade do alimento</label>
                                <input type="text" name = "quantidade" required class="form-control" id="inputAddress" placeholder="Digite a quantidade">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style=" display: inline; float: left; font-size: 1.25rem">Alimento</label>
                                <input type="text" name = "alimento" required class="form-control" id="inputEmail4" placeholder="Digite o alimento">
                            </div>
                        </center>
                       
                            <button type="submit" class="btn btn-dark btn-lg" href="administrador.php?">Registrar</button>
                        </form>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-lg-center">Copyright ©️ SAGI 2021</div>
                </div>
            </div>
        </footer>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>