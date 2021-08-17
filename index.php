<!DOCTYPE html>
<?php
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";



//include_once "conf/default.inc.php";

$consulta = isset($_POST['consulta']) ? $_POST['consulta'] : "";



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


    <script>
        function excluirRegistro(url) {
            if (confirm("Confirmar Exclusão?"))
                location.href = url;
        }
    </script>

</head>



<body id="top">

    <?php include 'header.php' ?>

    <div id="content">


        <!-- Intro Section-->


        <section class="view hm-gradient" id="intro">
            <div class="site-bg-img d-flex align-items-center">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-10 col-lg-6 text-center text-md-left margins">
                            <div class="white-text">
                                <div class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <h1 class="h1-responsive font-weight-bold mt-sm-5">Seu sistema de vacinação.</h1>
                                    <div class="h6">
                                        Aqui você encontra informações sobre as vacinações
                                    </div>
                                </div><br>
                                <!-- opção para adicionar botões
                                <div class="wow fadeInLeft" data-wow-delay="0.3s"><a class="btn btn-white dark-grey-text font-weight-bold ml-0" href="https://www.youtube.com/watch?v=60ItHLz5WEA" target="_blank"><i class="fa fa-play mr-1"></i>
                                        View Demo</a><a class="btn btn-outline-white" href="#">Learn more</a></div>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="text-center py-5 grey lighten-4" id="about">
            <div class="container">

                <div class="row">


                    <div class="col-md-4 mb-5 wow fadeInUp   data-wow-delay=" .3s"><i class="fa fa-spinner fa-3x green-text"></i>
                        <a href="cadastros.php">
                            <h3 class="h4 mt-3">Cadastros</h3>
                            <p class="mt-3 blue-grey-text">
                                Aqui você encontra informações sobre vacinas,doenças e fabricantes.
                            </p>
                        </a>
                    </div>


                    <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-spinner fa-3x cyan-text"></i>
                        <a href="pessoas.php">
                            <h3 class="h4 mt-3">Pessoas</h3>
                            <p class="mt-3 blue-grey-text">
                                Aqui você encontra informações sobre enfermeiros, usuários e pacientes.
                            </p>
                        </a>
                    </div>


                    <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-spinner fa-3x red-text"></i>
                        <a href="Locais.php">
                            <h3 class="h4 mt-3">Locais</h3>
                            <p class="mt-3 blue-grey-text">
                                Aqui você encontra informações sobre cadastro de cidades, endereços e etc.

                            </p>
                        </a>
                    </div>





                </div>



            </div>
        </section>
    </div>


    <?php include 'footer.php' ?>


    <script type="text/javascript" src="scripts/jquery.min.js?ver=1.1.0"></script>
    <script type="text/javascript" src="scripts/popper.min.js?ver=1.1.0"></script>
    <script type="text/javascript" src="scripts/bootstrap.min.js?ver=1.1.0"></script>
    <script type="text/javascript" src="scripts/wow.min.js?ver=1.1.0"></script>
    <script type="text/javascript" src="scripts/mdb.min.js?ver=1.1.0"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>