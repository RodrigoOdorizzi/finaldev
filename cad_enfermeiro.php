<!DOCTYPE html>
<?php
include_once "acao_enfermeiro.php";
$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
$obj;
if ($acao == 'editar') {
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    if ($codigo > 0)
        $obj = show_enfermeiro($codigo);
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
    <a href="index_enfermeiro.php"><button>Listar</button></a>
    <a href="cad_enfermeiro.php"><button>Novo</button></a>
    <br><br>



    <form action="acao_enfermeiro.php" method="post">
        <input readonly type="text" name="codigo" id="codigo" value="<?php if ($acao == "editar") echo $obj->getCodigo();
                                                                        else echo 0; ?>"><br>
        <input required=true type="text" name="id_pessoa" id="id_pessoa" value="<?php if ($acao == "editar") echo $obj->getId_pessoa(); ?>"><br>
        <input required=true type="text" name="id_user" id="id_user" value="<?php if ($acao == "editar") echo $obj->getId_user(); ?>"><br>

        <br><button type="submit" name="acao" id="acao" value="salvar">Salvar</button>
    </form>



</body>

</html>