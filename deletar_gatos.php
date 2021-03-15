<?php 
	include("conecta.php");
	$codigo2 = $_GET['excluir'];
  $consulta2 = $MySQLi->query("DELETE FROM tb_gatos	WHERE GAT_CODIGO = $codigo2");
  header("Location: administrador.php");
?>  

<html>
    <head></head>

    <body>
              <div class="w3-panel w3-red">
            <h3>Atenção</h3>
            <p>Realmente deseja excluir esse gato?</p>
            <button type = "submit"> Excluir</buttton>
          </div>

    </body>

</html>