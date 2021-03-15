<?php 
	include("conecta.php");
	$consulta = $MySQLi->query ("SELECT * FROM tb_doacao");
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
        <!-- Core themcone CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav">
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
                  TABELA DE DOAÇÕES
                </span><br><br>
                <table width="1100" border="1px">
								<?php while($dado = $consulta -> fetch_array()) {?>
                   <thead>
                   <tr>
                       <th>Alimento Doado</th>
                       <th>Quantidade Doada</th>
                       <th>Data de Doaçãoa</th>
                       <th>Doador</th>                  
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                       <<td><?php echo $dado['DOA_ALIMENTO'] ?></td>
               			 <td><?php echo $dado['DOA_QUANTIDADE'] ?></td>
               			 <td><?php echo $dado['DOA_DATA'] ?></td>
               			 <td><?php echo $dado['DOA_DOADOR'] ?></td>
                   </tr>
                   </tbody>
									 <?php } ?>
                </table>
                </div>
                <div>
                    <p style="font-size: 1.25rem"> Fale conosco</p>
                    <p style="font-size: 1.00rem"> E-mail: ifrn@gmail.com</p>
                    <p style="font-size: 1.00rem"> Tel (xx) x xxxx-xxxx </p>
                    <p style="font-size: 1.00rem"> Ligue ou mande um e-mail para realizar doações.</p>
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