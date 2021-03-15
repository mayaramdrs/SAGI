<?php 
	include("conecta.php");
	$codigo = $_GET['codigo'];
	$busca = $MySQLi ->query("SELECT * FROM tb_gatos WHERE GAT_CODIGO = $codigo");
	$consulta = $busca->fetch_assoc();
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
                            Perfil
                        </span><br><br>
                        <label style="border-bottom: solid; width: 500px; text-align:left; font-size: 1.75rem">Nome: <?php echo $consulta['GAT_NOME']?></label><br>
                        <label style="border-bottom: solid; width: 500px; text-align:left; font-size: 1.75rem">Raça: <?php echo $consulta['GAT_RACA']?></label><br>
                        <label style="border-bottom: solid; width: 500px; text-align:left; font-size: 1.75rem">Data de Nascimento: <?php echo $consulta['GAT_DTNASCIMENTO']?></label><br>
                        <label style="border-bottom: solid; width: 500px; text-align:left; font-size: 1.75rem">Gênero: <?php echo $consulta['GAT_GENERO']?></label><br>
                        <label style="border-bottom: solid; width: 500px; text-align:left; font-size: 1.75rem">Condição Corporal: <?php echo $consulta['GAT_CONDICAO']?></label><br>
                        <img src="<?php echo $consulta['GAT_CONDICAO']?>" style="width: 100px; height: 100px"><br><br>

                        <a type="button" class="btn btn-dark btn-lg" href="editar_gato.php?codigo=<?PHP echo $consulta['GAT_CODIGO']; ?>">Editar</a>
                        <a type="button" class="btn btn-dark btn-lg" href="deletar_gatos.php?excluir=<?PHP echo $consulta['GAT_CODIGO']; ?>">Excluir</a>
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