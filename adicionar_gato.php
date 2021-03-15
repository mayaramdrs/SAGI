<?php
				include("conecta.php");
				if (isset($_POST['nome'])) {
					$nome = $_POST['nome'];
					$raca = $_POST['raca'];
					$genero = $_POST['genero'];
					$condicao = $_POST['condicao'];
					$dtnascimento = $_POST['dtnascimento'];
					$msg = false;
					if(isset($_FILES['imagem'])){
						$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
						$novo_nome = md5(time()).$extensao;
						$diretorio = "upload/";
					move_uploaded_file($_FILES['imagem']['tmp_name'],  $diretorio.$novo_nome);
					}
					$consulta = $MySQLi->query("INSERT INTO tb_gatos 
																(GAT_NOME, 
																GAT_RACA,
																GAT_GENERO,
																GAT_CONDICAO,
																GAT_DTNASCIMENTO,
																GAT_IMAGEM) 
																VALUES 
																('$nome', '$raca', '$genero', '$condicao', '$dtnascimento', '$novo_nome')");
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
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="administrador.php">Administrador</a></li>
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
                            CADASTRAR GATO
                        </span><br><br><br>
                        <form action = "?" method = "POST" enctype="multipart/form-data">
                        <center>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style=" display: inline; float: left; font-size: 1.25rem">Nome</label>
                                <input type="text" name = "nome" required class="form-control" id="inputEmail4" placeholder="Digite o nome do gato">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress" style=" display: inline; float: left; font-size: 1.25rem">Raça</label>
                                <input type="text" name = "raca" required class="form-control" id="inputAddress" placeholder="Digite a raça gato">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2" style=" display: inline; float: left; font-size: 1.25rem">Ano de Nascimento</label>
                                <input type="date" name = "dtnascimento" required class="form-control" id="inputAddress2" placeholder="Digite o ano de nascimento">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style=" display: inline; float: left; font-size: 1.25rem">Gênero</label>
                                <select id="inputgen" name = "genero" placeholder="selecione o gênero." required class="form-control">
                                    <option selected>...</option>
                                    <option>Fêmea</option>
                                    <option >Macho</option>
                                </select>
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label for="inputAddress" style=" display: inline; float: left; font-size: 1.25rem">Condição Corporal</label>
                               <select id="inputgen"name = "condicao" required data-validation-required-message="Por favor, selecione a condição corporal." required class="form-control">
                                        <option selected>...</option>
                                        <option>Gato Magro (1-4)</option>
                                        <option >Gato com Peso Ideal (5)</option>
                                        <option>Gato Acima do Peso (6 – 9)</option>
            
                                        
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" style=" display: inline; float: left; font-size: 1.25rem">Adicionar foto</label>
                                <input type="file"  class="form-control"  required name = "imagem">
                            </div>
                            
                        </center><br><br>
                       
                            <button type="submit" class="btn btn-dark btn-lg" href="adm.html">Cadastrar</button>
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