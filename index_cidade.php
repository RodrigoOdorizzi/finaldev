<!DOCTYPE html>
<?php
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";
//include_once "conf/default.inc.php";
$title = "Lista de Cidades";
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
    <a href="cad_cidade.php"><button>Novo</button></a>
    <br><br>
    <form method="post">
        <input type="text" name="consulta" id="consulta" value="<? echo $consulta; ?>">
        <input type="submit" value="Pesquisar">
    </form>

    <br>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Id Estado</th>
            <th>População</th>

            <th>Detalhes</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM cidade
                             WHERE nome
                             LIKE '$consulta%'");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $cidade = new Cidade;
            $cidade->buildFromArray($linha);
        ?>
            <tr>
                <td><?php echo $cidade->getCodigo(); ?></td>
                <td><?php echo $cidade->getNome(); ?></td>
                <td><?php echo $cidade->getId_state(); ?></td>
                <td><?php echo $cidade->getPopulacao(); ?></td>

                <td><a href='show_cidade.php?id=<?php echo $cidade->getCodigo(); ?>'> <img class="icon" src="img/show.png" alt=""> </a></td>
                <td><a href='cad_cidade.php?acao=editar&codigo=<?php echo $cidade->getCodigo(); ?>'><img class="icon" src="img/edit.png" alt=""></a></td>
                <td><a href="javascript:excluirRegistro('acao_cidade.php?acao=excluir&codigo=<?php echo $cidade->getCodigo(); ?>')"><img class="icon" src="img/delete.png" alt=""></a></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>