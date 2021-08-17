 <!DOCTYPE html>
 <?php
    require_once "conf/Conexao.class.php";
    require_once "conf/Crud.class.php";
    require_once "autoload.php";
    //include_once "conf/default.inc.php";
    $title = "Lista de Cidade";
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


                     <h2 class="h1 pt-5 pb-3">Lista de Cidades</h2>
                 </div>


                 <div class="wow fadeIn mt-5">



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

                         <br><br>
                         <form method="post">
                             <div class="form-group col-lg-12">
                                 <input type="text" class="form-control" name="consulta" id="consulta" placeholder="Ex: Covid">
                                 <input type="submit" class="btn btn-secondary btn-sm" value="Pesquisar">


                             </div>
                         </form>
                         <a href="cad_cidade.php">
                             <button class="btn btn-sm btn-secondary" style="float: right; ">Cadastrar Cidade</button>
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
                                    $consulta = $pdo->query("SELECT * FROM cidade
                             WHERE nome
                             LIKE '$consulta%'");
                                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                        $cidade = new Cidade;
                                        $cidade->buildFromArray($linha);
                                    ?>
                                     <tr>

                                         <td><?php echo $cidade->getNome(); ?></td>

                                         <td><a href='show_cidade.php?id=<?php echo $cidade->getCodigo(); ?>'> <i class="fa fa-search fa-2x black-text" style="text-align: center;"></i> </a></td>
                                         <td><a href='cad_cidade.php?acao=editar&codigo=<?php echo $cidade->getCodigo(); ?>'><i class="fa fa-pencil-square-o fa-2x black-text""></i></a></td>
                                        <td><a href=" javascript:excluirRegistro('acao_cidade.php?acao=excluir&codigo=<?php echo $cidade->getCodigo(); ?>')"><i class="fa fa-trash-o fa-2x black-text""></a></td>
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