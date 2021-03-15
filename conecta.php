<?php 
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "db_alimentaif";

	$MySQLi = mysqli_connect($host, $usuario, $senha, $banco);
	 if (mysqli_connect_errno()) {
      die(mysqli_connect_error());
      exit();
  }





?>