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
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title> Doenças</title>
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


                 <div class="wow fadeIn mt-5">


                     <h2 class="h1 pt-5 pb-3">Lista de Doenças</h2>
                 </div>


                 <div class="wow fadeIn mt-5">

                     <p class="px-5 pb-3 lead blue-grey-text">
                         Você está em: <a href="index.php">Index </a>
                     </p>

                 </div>



                 <div class="row">


                     <div class="col-md-4 mb-5 wow fadeInUp   data-wow-delay=" .3s"><i class="fa fa-heartbeat fa-3x green-text"></i>
                         <a href="index_doenca.php">
                             <h3 class="h4 mt-3">Fabricantes</h3>
                             <p class="mt-3 blue-grey-text">
                                 Aqui você encontra a lista de doenças cadastrados no sistema.
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

                         <br><br>
                         <form method="post">
                             <div class="form-group col-lg-12">
                                 <input type="text" class="form-control" name="consulta" id="consulta" placeholder="Ex: Covid">
                                 <input type="submit" class="btn btn-secondary btn-sm" value="Pesquisar">


                             </div>
                         </form>
                         <a href="cad_doenca.php">
                             <button class="btn btn-sm btn-secondary" style="float: right; ">Cadastrar Doenças</button>
                         </a>
                         <br>



                         <table class="table table-bordered">
                             <thead>
                                 <tr>

                                     <th scope="col">Nome</th>
                                     <th scope="col">Detalhes</th>
                                     <th scope="col">Alterar</th>
                                     <th scope="col">Excluir</th>

                                 </tr>
                             </thead>
                             <tbody>



                                 <?php
                                    $pdo = Conexao::getInstance();
                                    $consulta = $pdo->query("SELECT * FROM doenca
                             WHERE nome
                             LIKE '$consulta%'");
                                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                        $doenca = new Doenca;
                                        $doenca->buildFromArray($linha);
                                    ?>
                                     <tr>

                                         <td><?php echo $doenca->getNome(); ?></td>

                                         <td><a href='show_doenca.php?id=<?php echo $doenca->getCodigo(); ?>'> <i class="fa fa-search fa-2x black-text" style="text-align: center;"></i> </a></td>
                                         <td><a href='cad_doenca.php?acao=editar&codigo=<?php echo $doenca->getCodigo(); ?>'><i class="fa fa-pencil-square-o fa-2x black-text""></i></a></td>
                                        <td><a href=" javascript:excluirRegistro('acao_doenca.php?acao=excluir&codigo=<?php echo $doenca->getCodigo(); ?>')"><i class="fa fa-trash-o fa-2x black-text""></a></td>
                                    </tr>                                                                                                  
                                <?php } ?>



                        

                            </tbody>
                        </table>


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