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



        <?php


        include 'index2.php'

        ?>


        <?php include 'index3.php' ?>






        <section class="text-center py-5 indigo darken-1 text-white" id="pricing">
            <div class="container">
                <div class="wow fadeIn">
                    <h2 class="h1 pt-5 pb-3">Our pricing plans</h2>
                    <p class="px-5 mb-5 pb-3 lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
                        esse quasi,
                        veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
                    </p>
                </div>
                <div class="row wow zoomIn">
                    <div class="col-lg-4 col-md-12 mb-5">
                        <div class="card card-image">
                            <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
                                <div class="card-body">
                                    <div class="h5">Individual</div>
                                    <div class="py-5"><sup class="display-4">$</sup><span class="display-1">9</span><span class="display-4">/m</span></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p><strong>1</strong> person</p>
                                        </li>
                                        <li>
                                            <p><strong>10</strong> projects</p>
                                        </li>
                                        <li>
                                            <p><strong>100</strong> features</p>
                                        </li>
                                        <li>
                                            <p><strong>20GB</strong> storage</p>
                                        </li>
                                    </ul><a class="btn btn-outline-white mt-5"> Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-5">
                        <div class="card card-image">
                            <div class="text-white text-center pricing-card d-flex align-items-center rgba-teal-strong py-3 px-3 rounded">
                                <div class="card-body">
                                    <div class="h5">Startup</div>
                                    <div class="py-5"><sup class="display-4">$</sup><span class="display-1">29</span><span class="display-4">/m</span></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p><strong>10</strong> person</p>
                                        </li>
                                        <li>
                                            <p><strong>100</strong> projects</p>
                                        </li>
                                        <li>
                                            <p><strong>200</strong> features</p>
                                        </li>
                                        <li>
                                            <p><strong>100GB</strong> storage</p>
                                        </li>
                                    </ul><a class="btn btn-outline-white mt-5"> Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-5">
                        <div class="card card-image">
                            <div class="text-white text-center pricing-card d-flex align-items-center rgba-red-strong py-3 px-3 rounded">
                                <div class="card-body">
                                    <div class="h5">Enterprise</div>
                                    <div class="py-5"><sup class="display-4">$</sup><span class="display-1">99</span><span class="display-4">/m</span></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p><strong>10+</strong> person</p>
                                        </li>
                                        <li>
                                            <p><strong>Unlimited</strong> projects</p>
                                        </li>
                                        <li>
                                            <p><strong>Unlimited</strong> features</p>
                                        </li>
                                        <li>
                                            <p><strong>1TB</strong> storage</p>
                                        </li>
                                    </ul><a class="btn btn-outline-white mt-5"> Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" id="team">
            <div class="container">
                <div class="wow fadeIn">
                    <h2 class="h1 pt-5 pb-3 text-center">Our team members</h2>
                    <p class="px-5 mb-5 pb-3 lead text-center blue-grey-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
                        esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
                    </p>
                </div>
                <div class="row mb-lg-4 center-on-small-only">
                    <div class="col-lg-6 col-md-12 mb-5 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/woman-1.jpg" alt="team member" /></div>
                        <div class="col-md-6 float-right">
                            <div class="h4">Nicole West</div>
                            <h6 class="font-weight-bold blue-grey-text mb-4">Lead Designer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
                                tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@nicolewest</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-5 wow fadeInRight" data-wow-delay=".3s">
                        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/woman-2.jpg" alt="team member" /></div>
                        <div class="col-md-6 float-right">
                            <div class="h4">Hannah Cruz</div>
                            <h6 class="font-weight-bold blue-grey-text mb-4">Photographer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
                                tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@hannahcruz</span></a>
                        </div>
                    </div>
                </div>
                <div class="row center-on-small-only">
                    <div class="col-lg-6 col-md-12 mb-5 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/man-1.jpg" alt="team member" /></div>
                        <div class="col-md-6 float-right">
                            <div class="h4">Mark Hall</div>
                            <h6 class="font-weight-bold blue-grey-text mb-4">Web Developer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
                                tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@markhall</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-5 wow fadeInRight" data-wow-delay=".3s">
                        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/man-2.jpg" alt="team member" /></div>
                        <div class="col-md-6 float-right">
                            <div class="h4">Vincent Harris</div>
                            <h6 class="font-weight-bold blue-grey-text mb-4">Web Developer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
                                tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@vincentharris</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" style="background-image:url('img/panorama-3094696_1920.jpg')">
            <div class="rgba-black-strong py-5">
                <div class="container">
                    <div class="wow fadeIn">
                        <h2 class="h1 text-white pt-5 pb-3 text-center">Contact us</h2>
                        <p class="text-white px-5 mb-5 pb-3 lead text-center">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident
                            voluptate
                            esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
                        </p>
                    </div>
                    <div class="card mb-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="https://formspree.io/youremail@example.com" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="md-form">
                                                    <input class="form-control" id="name" type="text" name="name" required="required" />
                                                    <label for="name">Your name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="md-form">
                                                    <input class="form-control" id="email" type="text" name="_replyto" required="required" />
                                                    <label for="email">Your email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form">
                                                    <input class="form-control" id="subject" type="text" name="subject" required="required" />
                                                    <label for="subject">Subject</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="md-form">
                                                    <textarea class="md-textarea" id="message" name="message" required="required"></textarea>
                                                    <label for="message">Your message</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="center-on-small-only mb-4">
                                            <button class="btn btn-indigo ml-0" type="submit"><i class="fa fa-paper-plane-o mr-2"></i>
                                                Send</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-unstyled text-center">
                                        <li class="mt-4"><i class="fa fa-map-marker indigo-text fa-2x"></i>
                                            <p class="mt-2">140, City Center, New York, U.S.A</p>
                                        </li>
                                        <li class="mt-4"><i class="fa fa-phone indigo-text fa-2x"></i>
                                            <p class="mt-2">+ 01 234 567 89</p>
                                        </li>
                                        <li class="mt-4"><i class="fa fa-envelope indigo-text fa-2x"></i>
                                            <p class="mt-2">contact@company.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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