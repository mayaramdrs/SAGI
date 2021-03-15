<?php 
	include("conecta.php");
	$consulta = $MySQLi->query ("SELECT * FROM tb_gatos");
	$consulta2 = $MySQLi->query ("SELECT * FROM tb_alimentacao");
	
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
                       
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adiministrador.php?">Administrador</a></li>
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
                            GATOS CADASTRADOS
                        </span><br><br>
                        <div class="mb-3" align="right">
                          <a class="btn btn-dark" href= "adicionar_gato.php">Cadastrar Novo Gato</a>
                          <a class="btn btn-dark" href= "adicionar_doacao.php">Cadastrar Nova Doação</a>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3"> 
                              
                  <div class="mb-3" align="align-items-center"> 
									<?php while($dado = $consulta -> fetch_array()) {?>

                      <div>
                      <button type="button" class="btn btn-dark" ><a href ="perfil_gatos.php?codigo=<?PHP echo $dado['GAT_CODIGO']; ?>"> <img src="<?PHP echo $dado['GAT_IMAGEM']; ?>" style="width: 100px; height: 100px"></a><br><br><a href="perfil_gatos.php?codigo=<?PHP echo $dado['GAT_CODIGO']; ?>"><?php echo $dado['GAT_NOME'] ?></a><br></button>
                      <label></label>
                    
      
											<?php } ?>
                  
                  </div></br>

                
                  <span>
                            INFORMAÇÕES DA ALIMENTAÇÃO DOS GATOS
                        </span><br><br>

                <table width="1100" border="1px">
								<?php while($dado2 = $consulta2 -> fetch_array()) {?>
                   <thead>
                   <tr>
                  
                       <th>Horário</th>
                       <th>Quantidade</th>
                       <th>Alimento</th>
        
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                       <td><?PHP echo $dado2['ALI_HORA']; ?></td>
                       <td><?PHP echo $dado2['ALI_QUANTIDADE']; ?></td>
                       <td><?PHP echo $dado2['ALI_ALIMENTO']; ?></td>
											 <?php } ?>     
											 </tbody>      
								       
											 </table>
          
                </div>
                <div class="col">
                  <a href="adicionar_alimentacao.php?" style="font-size: 1.85rem">Nova Alimentação</a>
                </div>
                <br>   <br>    <br>
                
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