<!DOCTYPE html>
<?php
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";
//include_once "conf/default.inc.php";
$title = "Lista de Usuários";
$consulta = isset($_POST['consulta']) ? $_POST['consulta'] : "";

?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <link rel="stylesheet" href="css/estilo.css">
    <script>
        function excluirRegistro(url) {
            if (confirm("Confirmar Exclusão?"))
                location.href = url;
        }
    </script>
</head>

<body>
    <br>
    <a href="cad_2.php"><button>Novo</button></a>
    <br><br>
    <form method="post">
        <input type="text" name="consulta" id="consulta" value="<? echo $consulta; ?>">
        <input type="submit" value="Pesquisar">
    </form>

    <br>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Usuario</th>
            <th>Senha</th>
            <th>Id permissao</th>
            <th>Nome</th>

            <th>Detalhes</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM usuario
                             WHERE senha
                             LIKE '$consulta%'");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new Usuario;
            $usuario->buildFromArray($linha);
        ?>
            <tr>
                <td><?php echo $usuario->getCodigo(); ?></td>
                <td><?php echo $usuario->getUser(); ?></td>
                <td><?php echo $usuario->getSenha(); ?></td>
                <td><?php echo $usuario->getId_permissao(); ?></td>

                <td><?php echo $usuario->getNome(); ?></td>

                <td><a href='show_2.php?id=<?php echo $usuario->getCodigo(); ?>'> <img class="icon" src="img/show.png" alt=""> </a></td>
                <td><a href='cad_2.php?acao=editar&codigo=<?php echo $usuario->getCodigo(); ?>'><img class="icon" src="img/edit.png" alt=""></a></td>
                <td><a href="javascript:excluirRegistro('acao_2.php?acao=excluir&codigo=<?php echo $usuario->getCodigo(); ?>')"><img class="icon" src="img/delete.png" alt=""></a></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>