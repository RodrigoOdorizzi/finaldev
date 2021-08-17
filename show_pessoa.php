 <!DOCTYPE html>
 <?php
    require_once "conf/Conexao.class.php";
    require_once "acao_pessoa.php";

    //include_once "conf/default.inc.php";

    $title = "Lista de pessoas";
    $id = isset($_GET['id']) ? $_GET['id'] : "1";



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


             </div>
             </div>
         </section>





         <div id="content" style="height: 700px;">
             <div class="container">
                 <!-- section default -->
                 <section class="row no-gutters" id="features">
                     <div class="col-lg-12 lighten-1 text-white" style="background-color: #f8fecd;">




                         <a href="cad_pessoa.php">
                             <button class="btn btn-sm btn-secondary" style="float: right; ">Cadastrar pessoa</button>
                         </a>




                         <a href="index_pessoa.php"> <button class="btn btn-sm btn-secondary" style="float: right; ">Listar</button>
                         </a>



                         <a href="cad_pessoa.php?acao=editar&codigo=<?php echo $id; ?>"> <button class="btn btn-sm btn-secondary" style="float: right; ">Alterar</button></a>
                         </br></br>

                         <div class="mostra" style="color:#000">
                             <?php
                                echo show_pessoa($id);
                                ?>
                         </div>






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