 <!DOCTYPE html>
 <?php session_start();
  if (isset($_SESSION['usuario']))
    header("location:index.php");
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


   <div id="content">


     <!-- Intro Section-->


     <section class="view hm-gradient" id="intro">
       <div class="site-bg-img d-flex align-items-center">
         <div class="container">
           <div class="row no-gutters">
             <div class="col-md-10 col-lg-6 text-center text-md-left margins">
               <div class="white-text">
                 <div class="wow fadeInLeft" data-wow-delay="0.3s">



                   <form action="acaoLogin.php" id="form" method="post">
                     <fieldset>
                       <legend>Autenticação</legend>
                       <label for="user">Usuário</label>
                       <input type="text" class="form-control" name="user" id="user" value=""><br /><br />
                       <label for="pass">Senha</label>
                       <input type="password" class="form-control" name="pass" id="pass" value=""><br /><br />
                       <button class="btn btn-sm btn-primary" name="acao" value="login" id="login" type="submit">
                         Entrar
                       </button>
                     </fieldset>
                   </form>



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