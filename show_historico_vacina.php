<!DOCTYPE html>
<?php
//include_once "conf/default.inc.php";
require_once "conf/Conexao.class.php";
require_once "acao_Historico_vacina.php";

$title = "Lista de Historico_vacinas";
$id = isset($_GET['id']) ? $_GET['id'] : "1";
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>

<body>
    <a href="index_Historico_vacina.php"><button>Listar</button></a>
    <a href="cad_Historico_vacina.php"><button>Novo</button></a>
    <a href="cad_Historico_vacina.php?acao=editar&codigo=<?php echo $id; ?>"><button>Alterar</button></a>
    </br></br>
    <?php
    echo show_Historico_vacina($id);
    ?>
</body>

</html>