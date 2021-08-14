<!DOCTYPE html>
<?php
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";
//include_once "conf/default.inc.php";
$title = "Lista de Doenças";
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
    <a href="cad_Historico_vacina.php"><button>Novo</button></a>
    <br><br>
    <form method="post">
        <input type="text" name="consulta" id="consulta" value="<? echo $consulta; ?>">
        <input type="submit" value="Pesquisar">
    </form>

    <br>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Id Paciente</th>
            <th>Id Enfermeiro</th>
            <th>Id vacina</th>

            <th>Detalhes</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM Historico_vacina
                             WHERE id_paciente
                             LIKE '$consulta%'");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $Historico_vacina = new Historico_vacina;
            $Historico_vacina->buildFromArray($linha);
        ?>
            <tr>
                <td><?php echo $Historico_vacina->getCodigo(); ?></td>
                <td><?php echo $Historico_vacina->getData(); ?></td>
                <td><?php echo $Historico_vacina->getId_paciente(); ?></td>
                <td><?php echo $Historico_vacina->getId_enfermeiro(); ?></td>
                <td><?php echo $Historico_vacina->getId_vacina(); ?></td>

                <td><a href='show_Historico_vacina.php?id=<?php echo $Historico_vacina->getCodigo(); ?>'> <img class="icon" src="img/show.png" alt=""> </a></td>
                <td><a href='cad_Historico_vacina.php?acao=editar&codigo=<?php echo $Historico_vacina->getCodigo(); ?>'><img class="icon" src="img/edit.png" alt=""></a></td>
                <td><a href="javascript:excluirRegistro('acao_Historico_vacina.php?acao=excluir&codigo=<?php echo $Historico_vacina->getCodigo(); ?>')"><img class="icon" src="img/delete.png" alt=""></a></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>