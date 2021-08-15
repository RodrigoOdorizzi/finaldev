<?php
include 'connect/connect.php';

$acao = '';
if (isset($_GET["acao"]))
	$acao = $_GET["acao"];

if ($acao == "logoff") {
	session_start();
	session_destroy();
	header("location:login.php");
} else {
	if (isset($_POST["acao"])) {
		$acao = $_POST["acao"];
		if ($acao == "login") {
			$user = $_POST['user'];
			$senha = $_POST['pass'];
			logar($user, $senha);
		}
	}
}

function logar($user, $senha)
{
	$sql = "SELECT * FROM " . $GLOBALS['tb_login'] .
		" WHERE user = '$user'";
	$result = mysqli_query($GLOBALS['conexao'], $sql);
	$senhaBD = "";
	$usuario = "";
	$nome = "";

	while ($row = mysqli_fetch_array($result)) {
		$senhaBD = $row['senha'];
		$usuario = $row['user'];
		$nome = $row['nome'];
	}

	$senha = sha1($senha);
	if ($senha == $senhaBD) {
		session_start();
		$_SESSION['user'] = $usuario;
		$_SESSION['nome'] = $nome;
		header("location:index.php");
	} else
		header("location:login.php");
}
