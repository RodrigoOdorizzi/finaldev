<!DOCTYPE html>
<?php
include 'conf/conf.inc.php';
include 'valida.php';
?>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="css/estilo.css">

</head>

<body>

	<div class="login">
		<?php
		echo "Bem-vindo " . $_SESSION['nome'];

		echo " User: " . $_SESSION['user'];
		?>
	</div>
</body>

</html>