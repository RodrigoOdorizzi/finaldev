<!DOCTYPE html>
<?php
include_once "acao_cidade.php";
require_once "conf/Conexao.class.php";
require_once "acao_cidade.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
$obj;
if ($acao == 'editar') {
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    if ($codigo > 0)
        $obj = show_cidade($codigo);
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
                    <h2 class="h1 pt-5 pb-3">Lista de Fabricantes</h2>
                    <p class="px-5 mb-5 pb-3 lead blue-grey-text">
                        Você está em
                    </p>
                </div>
                <div class="row">


                    <div class="col-md-4 mb-5 wow fadeInUp   data-wow-delay=" .3s"><i class="fa fa-heartbeat fa-3x green-text"></i>
                        <a href="index_cidade.php">
                            <h3 class="h4 mt-3">Laboratórios</h3>
                            <p class="mt-3 blue-grey-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                                assumenda deleniti
                                hic.
                            </p>
                        </a>
                    </div>


                    <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-comments-o fa-3x cyan-text"></i>
                        <a href="index_2.php">
                            <h3 class="h4 mt-3">Feedback</h3>
                            <p class="mt-3 blue-grey-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                                assumenda deleniti
                                hic.
                            </p>
                        </a>
                    </div>


                    <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-cubes fa-3x red-text"></i>
                        <a href="index_2.php">
                            <h3 class="h4 mt-3">Execution</h3>
                            <p class="mt-3 blue-grey-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                                assumenda deleniti
                                hic.
                            </p>
                        </a>
                    </div>

                </div>
            </div>
        </section>



        <!-- section default -->
        <section class="row no-gutters" id="features">
            <div class="col-lg-3 col-md-6 col-sm-12 deep-purple lighten-1 text-white">
                <div class="p-5 text-center wow zoomIn" data-wow-delay=".1s"><i class="fa fa-line-chart fa-2x"></i>
                    <div class="h5 mt-3">Agile Frameworks</div>
                    <p class="mt-5">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 purple lighten-1 text-white">
                <div class="p-5 text-center wow zoomIn" data-wow-delay=".3s"><i class="fa fa-industry fa-2x"></i>
                    <div class="h5 mt-3">Corporate Strategy</div>
                    <p class="mt-5">Iterative approaches to corporate strategy foster collaborative thinking to further the
                        overall value proposition</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 teal lighten-1 text-white">
                <div class="p-5 text-center wow zoomIn" data-wow-delay=".5s"><i class="fa fa-users fa-2x"></i>
                    <div class="h5 mt-3"> Workplace Diversity</div>
                    <p class="mt-5">Organically grow the holistic world view of disruptive innovation via workplace diversity and
                        empowerment.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 light-blue lighten-1 text-white">
                <div class="p-5 text-center wow zoomIn" data-wow-delay=".7s"><i class="fa fa-bullhorn fa-2x"></i>
                    <div class="h5 mt-3"> Survival Strategies</div>
                    <p class="mt-5">Bring to the table win-win survival strategies to ensure proactive domination.</p>
                </div>
            </div>
        </section>




        <div id="content">
            <div class="container">
                <!-- section default -->
                <section class="row no-gutters" id="features">
                    <div class="col-lg-12 lighten-1 text-white" style="background-color: #f8fecd;">


                        <br>
                        <a href="index_cidade.php"><button class="btn btn-sm btn-secondary" style="float: right; ">Listar</button></a>



                        <form action="acao_cidade.php" method="post">
                            <input readonly type="text" class="form-control" placeholder="Código não editável" name="codigo" id="codigo" value="<?php if ($acao == "editar") echo $obj->getCodigo();
                                                                                                                                                else echo 0;        ?>"><br>
                            <input required=true type="text" class="form-control" placeholder="ID do Estado" name="id_state" id="id_state" value="<?php if ($acao == "editar") echo $obj->getId_state(); ?>"><br>
                            <input required=true type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="<?php if ($acao == "editar") echo $obj->getNome(); ?>"><br>

                            <input required=true type="text" class="form-control" placeholder="Populacao" name="populacao" id="populacao" value="<?php if ($acao == "editar") echo $obj->getPopulacao(); ?>"><br>


                            <br><button class="btn btn-sm btn-secondary" type="submit" name="acao" id="acao" value="salvar">Salvar</button>
                        </form>





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