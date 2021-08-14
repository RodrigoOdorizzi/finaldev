<!DOCTYPE html>
<?php
include_once "acao_endereco.php";
$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
$obj;
if ($acao == 'editar') {
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    if ($codigo > 0)
        $obj = show_endereco($codigo);
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
    <a href="index_endereco.php"><button>Listar</button></a>
    <a href="cad_endereco.php"><button>Novo</button></a>
    <br><br>



    <form action="acao_endereco.php" method="post">
        <input readonly type="text" name="codigo" id="codigo" value="<?php if ($acao == "editar") echo $obj->getCodigo();
                                                                        else echo 0; ?>"><br>
        <input required=true type="text" name="id_cidade" id="nome" value="<?php if ($acao == "editar") echo $obj->getId_cidade(); ?>"><br>
        <input required=true type="text" name="rua" id="rua" value="<?php if ($acao == "editar") echo $obj->getRua(); ?>"><br>
        <input required=true type="text" name="bairro" id="bairro" value="<?php if ($acao == "editar") echo $obj->getBairro(); ?>"><br>
        <input required=true type="text" name="numerocasa" id="numerocasa" value="<?php if ($acao == "editar") echo $obj->getNumerocasa(); ?>"><br>

        <br><button type="submit" name="acao" id="acao" value="salvar">Salvar</button>
    </form>



</body>

</html>