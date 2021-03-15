<?php
include("conecta.php");
ob_start();
session_start();
$msg=0;
if(isset($_POST['email'])) {
	$email = $_POST['email'];
    $senha = $_POST['senha'];
	$consulta = $MySQLi->query("SELECT * FROM tb_usuario WHERE USU_EMAIL = '$email' AND USU_SENHA = '$senha'");
	if($resultado = $consulta->fetch_assoc()){
		$_SESSION['codigocliente'] = $resultado['USU_CODIGO'];
		echo $_SESSION['codigocliente'];
		header("Location: administrador.php");
	}else{
		$msg = 1;	
	}
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
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.html">Administrador</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="doacoes.html">Doações</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">
                        <span>
                            Login
                        </span><br>
												
                        <form action = "?" method = "POST">
												<?php if($msg=1) echo "<span style='text-align: center; color:red'></span>"; ?>
                        <center>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style=" display: inline; float: left; font-size: 1.25rem">E-mail</label>                         
																<input class="form-control" id="username" name="email" type="text" placeholder="Usuário" autocomplete="off">
                            </div>         

                            <div class="form-group col-md-6">
                                <label for="inputAddress2" style=" display: inline; float: left; font-size: 1.25rem">Senha</label>
																<input class="form-control" id="password" name="senha" type="password" placeholder="Senha">
                            </div>
                        </center>
                        
                        </div></br>
                            <button type="submit" class="btn btn-dark btn-lg" >Entrar</button>
                        </form>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-lg-center">Copyright © SAGI 2021</div>
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

