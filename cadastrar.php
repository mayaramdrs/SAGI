<?php
session_start();
include("conecta.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$raca = mysqli_real_escape_string($conexao, trim($_POST['raca']));
$genero = mysqli_real_escape_string($conexao, trim(md5($_POST['genero'])));
$condicao= mysqli_real_escape_string($conexao, trim(md5($_POST['condicao'])));
$dtnascimento = mysqli_real_escape_string($conexao, trim(md5($_POST['dtnascimento'])));

$MySQLi = "select count(*) as total from usuario where usuario = '$nome'";
$result = mysqli_query($conecta, $MySQLi);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['nome_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$MySQLi = "INSERT INTO tb_gatos (nome, raca, genero, condicao, dtnascimento) VALUES ('$nome', '$raca', '$genero', '$condicao', '$dtnascimento', NOW())";

if($conecta->query($MySQLi) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: administrador.php');
exit;
?>