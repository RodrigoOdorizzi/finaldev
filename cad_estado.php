<!DOCTYPE html>
<?php
include_once "acao_estado.php";
require_once "conf/Conexao.class.php";
require_once "acao_estado.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
$obj;
if ($acao == 'editar') {
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    if ($codigo > 0)
        $obj = show_estado($codigo);
}

?>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Vacinacao</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/mdb.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">


</head>
<meta charset="UTF-8">
<title> <?php echo $title; ?> </title>

<script>
    function excluirRegistro(url) {
        if (confirm("Confirmar Exclusão?"))
            location.href = url;
    }
</script>
</head>

<body>




    <body id="top">

        <?php include 'header.php' ?>

        <section class="text-center py-5 grey lighten-4" id="about">
            <div class="container">
                <div class="wow fadeIn">
                    <h2 class="h1 pt-5 pb-3">Cadastro de estados</h2>

                </div>
                <div class="row">


                </div>
            </div>
        </section>






        <div id="content">
            <div class="container">
                <!-- section default -->
                <section class="row no-gutters" id="features">
                    <div class="col-lg-12 lighten-1 text-white" style="background-color: #f8fecd;">


                        <br>
                        <a href="index_estado.php"><button class="btn btn-sm btn-secondary" style="float: right; ">Listar</button></a>



                        <form action="acao_estado.php" method="post">
                            <input readonly type="text" class="form-control" placeholder="Código não editável" name="codigo" id="codigo" value="<?php if ($acao == "editar") echo $obj->getCodigo();
                                                                                                                                                else echo 0;        ?>"><br>
                            <input required=true type="text" class="form-control" placeholder="uf" name="uf" id="uf" value="<?php if ($acao == "editar") echo $obj->getUf(); ?>"><br>
                            <input required=true type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="<?php if ($acao == "editar") echo $obj->getNome(); ?>"><br>



                            <br><button class="btn btn-sm btn-secondary" type="submit" name="acao" id="acao" value="salvar">Salvar</button>
                        </form>


                        <a href="index.php"><button class="btn btn-sm btn-secondary " style="float: right;">Home</button>




                    </div>
                </section>


            </div>
        </div>

        <?php include 'footer.php' ?>


        <script type=" text/javascript" src="scripts/jquery.min.js?ver=1.1.0"></script>
        <script type="text/javascript" src="scripts/popper.min.js?ver=1.1.0"></script>
        <script type="text/javascript" src="scripts/bootstrap.min.js?ver=1.1.0"></script>
        <script type="text/javascript" src="scripts/wow.min.js?ver=1.1.0"></script>
        <script type="text/javascript" src="scripts/mdb.min.js?ver=1.1.0"></script>
        <script>
            new WOW().init();
        </script>
    </body>

</html>