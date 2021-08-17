<!DOCTYPE html>
<?php
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";



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



</head>

<body id="top">

    <?php include 'header.php' ?>

    <section class="text-center py-5 grey lighten-4" id="about">
        <div class="container">
            <div class="wow fadeIn">
                <h2 class="h1 pt-5 pb-3">Locais</h2>

                <div class="wow fadeIn mt-5">

                    <p class="px-5 pb-3 lead blue-grey-text">
                        Você está em: <a href="index.php">Index </a> -> <a href="Locais.php"> Locais</a>
                    </p>

                </div>
            </div>
            <div class="row">


                <div class="col-md-4 mb-5 wow fadeInUp   data-wow-delay=" .3s"><i class="fa fa-circle-o-notch fa-3x green-text"></i>
                    <a href="index_cidade.php">
                        <h3 class="h4 mt-3">Cidades</h3>
                        <p class="mt-3 blue-grey-text">
                            Lista das cidades cadastrados no sistema.
                        </p>
                    </a>
                </div>


                <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-circle-o-notch fa-3x cyan-text"></i>
                    <a href="index_estado.php">
                        <h3 class="h4 mt-3">Estados</h3>
                        <p class="mt-3 blue-grey-text">
                            Lista dos estados cadastrados no sistema.
                        </p>
                    </a>
                </div>


                <div class="col-md-4 mb-5 wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-circle-o-notch fa-3x red-text"></i>
                    <a href="index_endereco.php">
                        <h3 class="h4 mt-3">Endereços</h3>
                        <p class="mt-3 blue-grey-text">
                            Endereços cadastradas
                        </p>
                    </a>
                </div>

            </div>




            <div class="row col-lg-12" style="margin: auto;">




            </div>




        </div>
    </section>



    <div id="content">



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