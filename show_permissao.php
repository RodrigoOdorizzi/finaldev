<!DOCTYPE html>
<?php
//include_once "conf/default.inc.php";
require_once "conf/Conexao.class.php";
require_once "acao_permissao.php";

$title = "Lista de Permissao";
$id = isset($_GET['id']) ? $_GET['id'] : "1";
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>

<body>
    <a href="index_permissao.php"><button>Listar</button></a>
    <a href="cad_permissao.php"><button>Novo</button></a>
    <a href="cad_permissao.php?acao=editar&codigo=<?php echo $id; ?>"><button>Alterar</button></a>
    </br></br>
    <?php
    echo show_permissao($id);
    ?>
</body>

</html>