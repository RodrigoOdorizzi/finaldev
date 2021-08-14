<!DOCTYPE html>
<?php
include_once "acao_Historico_vacina.php";
$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
$obj;
if ($acao == 'editar') {
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    if ($codigo > 0)
        $obj = show_Historico_vacina($codigo);
}
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <br>
    <a href="index_Historico_vacina.php"><button>Listar</button></a>
    <a href="cad_Historico_vacina.php"><button>Novo</button></a>
    <br><br>



    <form action="acao_Historico_vacina.php" method="post">
        <input readonly type="text" name="codigo" id="codigo" value="<?php if ($acao == "editar") echo $obj->getCodigo();
                                                                        else echo 0; ?>"><br>
        <input required=true type="text" name="data" id="data" value="<?php if ($acao == "editar") echo $obj->getData(); ?>"><br>
        <input required=true type="text" name="id_paciente" id="id_paciente" value="<?php if ($acao == "editar") echo $obj->getId_paciente(); ?>"><br>
        <input required=true type="text" name="id_enfermeiro" id="id_enfermeiro" value="<?php if ($acao == "editar") echo $obj->getId_enfermeiro(); ?>"><br>
        <input required=true type="text" name="id_vacina" id="id_vacina" value="<?php if ($acao == "editar") echo $obj->getId_vacina(); ?>"><br>



        <br><button type="submit" name="acao" id="acao" value="salvar">Salvar</button>
    </form>



</body>

</html>