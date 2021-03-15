<?php 
			include("conecta.php");
					$codigo = $_GET['codigo'];
					if(isset($_POST['nome'])){
						$nome = $_POST['nome'];
						$codigogato = $_POST['codigogato'];
						$raca = $_POST['raca'];
						$condicao = $_POST['condicao'];
						$genero = $_POST['genero'];
						$dtnascimento = $_POST['dtnascimento'];
						$consulta = $MySQLi->query("UPDATE tb_gatos set 
							GAT_NOME = '$nome',
							GAT_RACA = '$raca',
							GAT_CONDICAO= '$condicao',
							GAT_GENERO = '$genero',
							GAT_DTNASCIMENTO = '$dtnascimento'
							WHERE GAT_CODIGO = $codigogato");
							header("Location: administrador.php");
			}

	$consulta2 = $MySQLi ->query("SELECT * FROM tb_gatos WHERE GAT_CODIGO = $codigo");
	$consulta3 = $consulta2 ->fetch_assoc();
	

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
				<script>
					function mensagem(){
						alert("Editado com sucesso!");
					}
				</script>
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
                            Perfil
                        </span><br><br>
                        <form action = "?" method = "POST">
                        <center>
												<div class="form-group col-md-6">
                                <label style=" display: inline; float: left; font-size: 1.25rem">Id do gato</label>
                                <input type="text" class="form-control" name = "codigogato" value="<?php echo $consulta3['GAT_CODIGO']; ?>" READONLY STYLE="pointer-events: none;background: #ccc;">
                            </div>

                            <div class="form-group col-md-6">
                                <label style=" display: inline; float: left; font-size: 1.25rem">Nome do gato</label>
                                <input type="text" name = "nome" class="form-control" value="<?php echo $consulta3['GAT_NOME']; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label style=" display: inline; float: left; font-size: 1.25rem">Raça do gato</label>
                                <input type="text" name= "raca" class="form-control" value="<?php echo $consulta3['GAT_RACA']; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label style=" display: inline; float: left; font-size: 1.25rem">Ano de nascimento do gato</label>
                                <input type="date" name = "dtnascimento"class="form-control" value="<?php echo $consulta3['GAT_DTNASCIMENTO']; ?>">
                            </div>
                            <div class="form-group col-md-6">
                              <label style=" display: inline; float: left; font-size: 1.25rem">Gênero do gato</label>
                              <select class="form-control" name = "genero" value = "<?php echo $consulta3['GAT_GENERO']; ?>">
                                <option selected>...</option>
                                <option>Fêmea</option>
                                <option >Macho</option>
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label style=" display: inline; float: left; font-size: 1.25rem">Condição corporal do gato</label>
                              <select class="form-control" name = "condicao" <?php echo $consulta3['GAT_CONDICAO']; ?>>
                                <option selected>...</option>
                                <option vamue = "Abaixo do peso">Gato Magro (1-4)</option>
                                <option value = "Ideal" >Gato com Peso Ideal (5)</option>
                                <option value = "Acima do peso">Gato Acima do Peso (6 – 9)</option>
                
                              </select>
                            </div>
                            
                        </center>

                            <img src="gato.png" style="width: 100px; height: 100px"><br><br>
                          <button onclick = "mensagem()" class="btn btn-dark btn-lg" href="administrador.php?">  Salvar</button>
                            <a type="button" class="btn btn-dark btn-lg" href="administrador.php?">Cancelar</a>
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