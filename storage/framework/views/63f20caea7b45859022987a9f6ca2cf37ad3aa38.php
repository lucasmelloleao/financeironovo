<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="img/favicon.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Lucas Mello Leão">
        <!-- Add Your favicon here -->
        <!--<link rel="icon" href="img/favicon.ico">-->

        <title>Gestão Comercial</title>

        <!-- Bootstrap core CSS -->

        <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css'); ?>" />    

        <!-- Animation CSS -->

        <link rel="stylesheet" href="<?php echo asset('css/animate.min.css'); ?>" />



        <link rel="stylesheet" href="<?php echo asset('font-awesome/css/font-awesome.min.css'); ?>" />    

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">




    </head>
    <body id="page-top">

        <div class="navbar-wrapper">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Inicio</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="#page-top">Home</a></li>
                         <!--   <li><a class="page-scroll" href="#atividades">Atividades</a></li> !-->
                            <!--   <li><a class="page-scroll" href="#team">Team</a></li> !-->
                           <!-- <li><a class="page-scroll" href="#sobreasem">Sobre a Sem</a></li> -->
                            <!--   <li><a class="page-scroll" href="#pricing">Pricing</a></li> !-->
                           <!-- <li><a class="page-scroll" href="#localizacao">Localização</a></li>  -->
                            <li><a href="<?php echo e(url('painel')); ?>">Restrito <span class="fa fa-sign-in">	</a></li>
                             
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

<!--
        <div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#inSlider" data-slide-to="0" class="active"></li>
                <li data-target="#inSlider" data-slide-to="1"></li>
        

            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><br/>
                                <br/>
                                <br/>
                            </h1>
                            <p>.</p>
                            <p>


                            </p>
                        </div>
                        <div class="carousel-image wow zoomIn">
                            <img class="img-responsive" src="img/cabecalho.png" alt="laptop"/>
                        </div>
                    </div>
                    <!-- Set background for slide in css -->
                    <div class="header-back one"></div>
<!--
                </div>
                <div class="item">
                    <div class="container">
                        <div class="carousel-caption blank">
                            <h1></h1>
                            <p></p>

                        </div>
                    </div>
                    <!-- Set background for slide in css -->
    <!--                <div class="header-back two"></div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="carousel-caption blank">
                            <h1></h1>
                            <p></p>

                        </div>
                    </div>
                    <!-- Set background for slide in css -->
   <!--                 <div class="header-back tree"></div>
                </div>



            </div>
            <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section id="atividades"  class="container features">
            <div class="row">
                <br>
                <br>

                <a href="http://www.febnet.org.br/" target="_blank" title="Federação Espírita Brasileira"><img src="img/links/FEB.png" /></a>
                <a href="http://www.feparana.com.br/" target="_blank" title="Federação Espírita do Paraná"><img src="img/links/FEP.png" /></a>
                <a href="http://www.reflexao.com.br/" target="_blank" title="Momento de Reflexão"><img src="img/links/Momento_de_Reflexao.png" /></a>
                <a href="http://www.momento.com.br/" target="_blank" title="Momento Espirita"><img src="img/links/Momento_Espirita.png" /></a>
                <a href="http://www.spiritist.org/" target="_blank" title="Conselho Espirita Internacional"><img src="img/links/Conselho_Espirita_Internacional.png" /></a>
                <p>
                    <br> 

                <div class=" text-center wow zoomIn"> 
                    <hr>
                    <center> 
                        <ul class="list-inline social-icon">
                            <li><a href="https://twitter.com/semeimei"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/semeimei/?ref=ts&fref=ts"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://plus.google.com/+SociedadeEsp%C3%ADritaMeimeiCampoMour%C3%A3o?gl=br&hl=pt-BR"><i class="fa fa-google"></i></a>
                            <li><a href="https://www.youtube.com/user/socespiritameimei"><i class="fa fa-youtube"></i></a>                                
                            </li>
                        </ul>
                    </center>
                    <hr>
                </div>

      

                <h1> <center> Atividades </center></h1>
                <br> <br>



                <div>
                    <table class="table table-hover">


                        <tr>
                            <th>Data</th>
                            <th>Horário</th>
                            <th>Atividade</th>
                        </tr>


                    </table>  



                </div>     

            </div>
            <br> <br>
            <br> <br>



        </section> 















        <!--
                <section  class="container features">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="navy-line"></div>
                            <h1>Over 40+ unique view<br/> <span class="navy"> with many custom components</span> </h1>
                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-center wow fadeInLeft">
                            <div>
                                <i class="fa fa-mobile features-icon"></i>
                                <h2>Full responsive</h2>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
                            </div>
                            <div class="m-t-lg">
                                <i class="fa fa-bar-chart features-icon"></i>
                                <h2>6 Charts Library</h2>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center  wow zoomIn">
                            <img src="img/perspective.png" alt="dashboard" class="img-responsive">
                        </div>
                        <div class="col-md-3 text-center wow fadeInRight">
                            <div>
                                <i class="fa fa-envelope features-icon"></i>
                                <h2>Mail pages</h2>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
                            </div>
                            <div class="m-t-lg">
                                <i class="fa fa-google features-icon"></i>
                                <h2>AngularJS version</h2>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="navy-line"></div>
                            <h1>Discover great feautres</h1>
                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
                        </div>
                    </div>
                    <div class="row features-block">
                        <div class="col-lg-6 features-text wow fadeInLeft">
                            <small>INSPINIA</small>
                            <h2>Perfectly designed </h2>
                            <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
                            <a href="" class="btn btn-primary">Learn more</a>
                        </div>
                        <div class="col-lg-6 text-right wow fadeInRight">
                            <img src="img/dashboard.png" alt="dashboard" class="img-responsive pull-right">
                        </div>
                    </div>
                </section>
        
                <section id="team" class="gray-section team">
                    <div class="container">
                        <div class="row m-b-lg">
                            <div class="col-lg-12 text-center">
                                <div class="navy-line"></div>
                                <h1>Our Team</h1>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 wow fadeInLeft">
                                <div class="team-member">
                                    <img src="img/avatar3.jpg" class="img-responsive img-circle img-small" alt="">
                                    <h4><span class="navy">Amelia</span> Smith</h4>
                                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>
                                    <ul class="list-inline social-icon">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="team-member wow zoomIn">
                                    <img src="img/avatar1.jpg" class="img-responsive img-circle" alt="">
                                    <h4><span class="navy">John</span> Novak</h4>
                                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                                    <ul class="list-inline social-icon">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeInRight">
                                <div class="team-member">
                                    <img src="img/avatar2.jpg" class="img-responsive img-circle img-small" alt="">
                                    <h4><span class="navy">Peter</span> Johnson</h4>
                                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                                    <ul class="list-inline social-icon">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                            </div>
                        </div>
                    </div>
                </section>
        
                <section class="features">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="navy-line"></div>
                                <h1>Even more great feautres</h1>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
                            </div>
                        </div>
                        <div class="row features-block">
                            <div class="col-lg-3 features-text wow fadeInLeft">
                                <small>INSPINIA</small>
                                <h2>Perfectly designed </h2>
                                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
                                <a href="" class="btn btn-primary">Learn more</a>
                            </div>
                            <div class="col-lg-6 text-right m-t-n-lg wow zoomIn">
                                <img src="img/iphone.jpg" class="img-responsive" alt="dashboard">
                            </div>
                            <div class="col-lg-3 features-text text-right wow fadeInRight">
                                <small>INSPINIA</small>
                                <h2>Perfectly designed </h2>
                                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
                                <a href="" class="btn btn-primary">Learn more</a>
                            </div>
                        </div>
                    </div>
        
                </section>
                <section class="timeline gray-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="navy-line"></div>
                                <h1>Our workflow</h1>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
                            </div>
                        </div>
                        <div class="row features-block">
        
                            <div class="col-lg-12">
                                <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon navy-bg">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
        
                                        <div class="vertical-timeline-content">
                                            <h2>Meeting</h2>
                                            <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the sale.
                                            </p>
                                            <a href="#" class="btn btn-xs btn-primary"> More info</a>
                                            <span class="vertical-date"> Today <br/> <small>Dec 24</small> </span>
                                        </div>
                                    </div>
        
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon navy-bg">
                                            <i class="fa fa-file-text"></i>
                                        </div>
        
                                        <div class="vertical-timeline-content">
                                            <h2>Decision</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                            <a href="#" class="btn btn-xs btn-primary"> More info</a>
                                            <span class="vertical-date"> Tomorrow <br/> <small>Dec 26</small> </span>
                                        </div>
                                    </div>
        
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon navy-bg">
                                            <i class="fa fa-cogs"></i>
                                        </div>
        
                                        <div class="vertical-timeline-content">
                                            <h2>Implementation</h2>
                                            <p>Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. </p>
                                            <a href="#" class="btn btn-xs btn-primary"> More info</a>
                                            <span class="vertical-date"> Monday <br/> <small>Jan 02</small> </span>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
        
                        </div>
                    </div>
        
                </section>
        !-->
     <!--   <section id="sobreasem" class="navy-section testimonials" style="margin-top: 0">



            <div class="container">
                <div class="row">
                    <div class=" text-center wow zoomIn">
                        <i class="fa fa-comment big-icon"></i>





                        <h1>Sobre a SEM</h1>

                        <img class="img-responsive" src="images/sem.jpg"/>

                        <h3> <center>História</center></h3>
                        <div class="panel panel-default" style="color: #006621">
                            <span>
                                <p>A Sociedade Espírita Meimei, iniciou suas atividades no dia 02 de setembro de 1984, data da aprovação do seu estatuto e da composição da primeira diretoria. Nasceu com a disposição de um pequeno grupo, de 9 pessoas, com esforço, dedicação e força de vontade. Abraçou um ideal no bem e conseguiu construir a sua instalação física.</p>
                                <p>Acreditando, “que fora da caridade não há salvação” e a “fé sem obras é morta”, em 31 de outubro do mesmo ano decidiu-se pela fundação do Dispensário Espírita Meimei, cujo propósito na área assistencial era o de atender as crianças carentes no sistema de semi-internato, mas tarde no sistema de internato, proporcionando aos assistidos, alimentação, assistência médica, medicamentos, roupas, etc, o que aos poucos foi estendido aos familiares onde foi formado a Caravana Fraterna que tinha por objetivo o de visitar as famílias assistidas, proporcionando a elas conforto material, espiritual e orientações dentro das possibilidades dos caravaneiros.</p>
                                <p>Para melhor atender as famílias assistidas e para que elas ficassem mais próximas dos filhos que estavam no dispensário e até mesmo criar um motivo a mais para que os pais não se distanciassem dos filhos, e objetivando estreitar os laços em família, foi criado o “Domingo Fraterno”, com encontros nos primeiros e terceiros domingos de cada mês. Participavam entre 150 a 200 pessoas em cada domingo, onde era servido um almoço. Antes, porém, eles recebiam palestras com informações envolvendo: educação dos filhos, vivência em família, ética, moral, cidadania, higiene, valor do trabalho, do estudo, etc.</p>
                                <p>O trabalho do dispensário hoje está sendo realizado pelas trabalhadoras da Sociedade Espírita Meimei, Tia Jacyra e Tia Alba, pois elas acabaram se identificando e assumindo o trabalho direto com as crianças.</p>
                                <p>Outro trabalho assistencial que iniciou na Sociedade Espírita Meimei foi os cursos de informática para jovens carentes dos 12 aos 25 anos. Esse trabalho foi ampliado em outro espaço.</p>
                                <p>Graças ao esforço de seus trabalhadores as atividades iniciadas na Sociedade Espírita Meimei não têm terminado, mas sim ampliadas, recebendo o reconhecimento da comunidade mourãoense.</p>
                                <p>Em 2000 foi iniciada uma nova atividade, ofertando cursos de alfabetização, crochê, tricô, bordado e culinária. Da mesma forma que nas outras atividades, as frequentadoras, além de receber as informações necessárias para o aprendizado dos cursos oferecidos, recebem acompanhamento de visitas nas casas, e de palestras que buscam oferecer conhecimentos na construção de uma sociedade democrática e solidária, valorizando o diálogo como forma de esclarecer conflitos e tomar decisões, bem como construir uma imagem positiva de si, o respeito próprio traduzido pela confiança em sua capacidade de escolher e realizar seu projeto de vida e pela legitimação das normas morais que garantam, a todos, essa realização. Oferecido ainda, informações: de higiene, educação de filhos, vivência familiar e em comunidade, religiosidade, respeitando acima de tudo a crença e a religião de cada um, buscando despertar os valores da vida, que necessitam como cidadãos plenamente reconhecidos e conscientes de seu papel na sociedade. Infelizmente, esse projeto foi finalizado em 2004. Mas a intenção de voltar ainda está entre os trabalhadores.</p>
                                <p>Todo o trabalho assistencial da Sociedade Espírita Meimei é realizado por companheiros que se eximam de perceber ordenados, colaborando com finalidade cristã, gratuitamente. As doações e donativos recebidos apresentam, periodicamente, relatórios estatísticos e financeiros, demonstrativos das atividades desenvolvidas, como satisfação justa e necessária aos cooperadores.</p>
                            </span> 
                            <h3 style="color: #006621"><center>Dados sobre a nossa Instituição</center></h3>
                            <ul>
                                <p> <a href="documentos/Diretoria_2012-2014.pdf" target="_blank"><span class="glyphicon glyphicon-eye-open"> </span>  Diretoria </a></p>
                                <p>   <a href="documentos/Estatuto.pdf" target="_blank"><span class="glyphicon glyphicon-eye-open"> </span> Estatuto</a></p>
                                <p>  <a href="documentos/Regimento_Interno.pdf" target="_blank"><span class="glyphicon glyphicon-eye-open"> </span> Regimento Interno</a> </p>
                            </ul>

                        </div>

                        <br />	

                    </div>	
                </div>
            </div>
        </section>

        <!--
        <section class="comments gray-section" style="margin-top: 0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="navy-line"></div>
                                <h1>What our partners say</h1>
                                <p>Donec sed odio dui. Etiam porta sem malesuada. </p>
                            </div>
                        </div>
                        <div class="row features-block">
                            <div class="col-lg-4">
                                <div class="bubble">
                                    "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                                </div>
                                <div class="comments-avatar">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/avatar3.jpg">
                                    </a>
                                    <div class="media-body">
                                        <div class="commens-name">
                                            Andrew Williams
                                        </div>
                                        <small class="text-muted">Company X from California</small>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4">
                                <div class="bubble">
                                    "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                                </div>
                                <div class="comments-avatar">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/avatar1.jpg">
                                    </a>
                                    <div class="media-body">
                                        <div class="commens-name">
                                            Andrew Williams
                                        </div>
                                        <small class="text-muted">Company X from California</small>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4">
                                <div class="bubble">
                                    "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                                </div>
                                <div class="comments-avatar">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/avatar2.jpg">
                                    </a>
                                    <div class="media-body">
                                        <div class="commens-name">
                                            Andrew Williams
                                        </div>
                                        <small class="text-muted">Company X from California</small>
                                    </div>
                                </div>
                            </div>
        
        
        
                        </div>
                    </div>
        
                </section>
                <section class="features">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="navy-line"></div>
                                <h1>More and more extra great feautres</h1>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-1 features-text">
                                <small>INSPINIA</small>
                                <h2>Perfectly designed </h2>
                                <i class="fa fa-bar-chart big-icon pull-right"></i>
                                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
                            </div>
                            <div class="col-lg-5 features-text">
                                <small>INSPINIA</small>
                                <h2>Perfectly designed </h2>
                                <i class="fa fa-bolt big-icon pull-right"></i>
                                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-1 features-text">
                                <small>INSPINIA</small>
                                <h2>Perfectly designed </h2>
                                <i class="fa fa-clock-o big-icon pull-right"></i>
                                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
                            </div>
                            <div class="col-lg-5 features-text">
                                <small>INSPINIA</small>
                                <h2>Perfectly designed </h2>
                                <i class="fa fa-users big-icon pull-right"></i>
                                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
                            </div>
                        </div>
                    </div>
        
                </section>
                <section id="pricing" class="pricing">
                    <div class="container">
                        <div class="row m-b-lg">
                            <div class="col-lg-12 text-center">
                                <div class="navy-line"></div>
                                <h1>App Pricing</h1>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 wow zoomIn">
                                <ul class="pricing-plan list-unstyled">
                                    <li class="pricing-title">
                                        Basic
                                    </li>
                                    <li class="pricing-desc">
                                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                                    </li>
                                    <li class="pricing-price">
                                        <span>$16</span> / month
                                    </li>
                                    <li>
                                        Dashboards
                                    </li>
                                    <li>
                                        Projects view
                                    </li>
                                    <li>
                                        Contacts
                                    </li>
                                    <li>
                                        Calendar
                                    </li>
                                    <li>
                                        AngularJs
                                    </li>
                                    <li>
                                        <a class="btn btn-primary btn-xs" href="#">Signup</a>
                                    </li>
                                </ul>
                            </div>
        
                            <div class="col-lg-4 wow zoomIn">
                                <ul class="pricing-plan list-unstyled selected">
                                    <li class="pricing-title">
                                        Standard
                                    </li>
                                    <li class="pricing-desc">
                                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                                    </li>
                                    <li class="pricing-price">
                                        <span>$22</span> / month
                                    </li>
                                    <li>
                                        Dashboards
                                    </li>
                                    <li>
                                        Projects view
                                    </li>
                                    <li>
                                        Contacts
                                    </li>
                                    <li>
                                        Calendar
                                    </li>
                                    <li>
                                        AngularJs
                                    </li>
                                    <li>
                                        <strong>Support platform</strong>
                                    </li>
                                    <li class="plan-action">
                                        <a class="btn btn-primary btn-xs" href="#">Signup</a>
                                    </li>
                                </ul>
                            </div>
        
                            <div class="col-lg-4 wow zoomIn">
                                <ul class="pricing-plan list-unstyled">
                                    <li class="pricing-title">
                                        Premium
                                    </li>
                                    <li class="pricing-desc">
                                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                                    </li>
                                    <li class="pricing-price">
                                        <span>$160</span> / month
                                    </li>
                                    <li>
                                        Dashboards
                                    </li>
                                    <li>
                                        Projects view
                                    </li>
                                    <li>
                                        Contacts
                                    </li>
                                    <li>
                                        Calendar
                                    </li>
                                    <li>
                                        AngularJs
                                    </li>
                                    <li>
                                        <a class="btn btn-primary btn-xs" href="#">Signup</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row m-t-lg">
                            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg">
                                <p>*Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. <span class="navy">Various versions</span>  have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                        </div>
                    </div>
        
                </section>
        !-->

  <!--      <section id="localizacao" class="gray-section contact">
            <div class="container">
                <div class="row m-b-lg">
                    <div class="col-lg-12 text-center">
                        <div class="navy-line"></div>
                        <h1>Localização</h1>

                    </div>
                </div>
                <div class="row m-b-lg">
                    <div class="col-lg-3 col-lg-offset-3">
                        <address>


                            <h3>Endereço</h3> 
                            <p>Av. Comendador Norberto Marcondes, 28, esquina com a Rua Cruzeiro do Oeste.
                                <br/>Centro, Campo Mourão - PR
                                <br/>CEP: 87302-060</p>

                            <h3>Contato</h3>
                            <p>(44) 3017-1247 - Falar com Edson
                                <br/>(44) 3523-1494 - Falar com João
                                <br/>E-mail: <a href="contato.php"><b>sem@sem.org.br</b></a></p>

                            <div style="padding:20px;">
                                <iframe class="embed-responsive-item" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=CUi-60HpsGPRFTQPkf4d75Hg_Cn3r1dYEnXtlDEydgpE_2Bp4Q&amp;q=Sociedade+Esp%C3%ADrita+Meimei+-+Avenida+Comendador+Noberto+Marcondes,+Campo+Mour%C3%A3o+-+Parana&amp;aq=0&amp;oq=Sociedade+Esp%C3%ADrita+mei&amp;sll=-24.043113,-52.388091&amp;sspn=0.011268,0.01929&amp;ie=UTF8&amp;hq=Sociedade+Esp%C3%ADrita+Meimei+-&amp;hnear=Av.+Comendador+Noberto+Marcondes+-+Campo+Mour%C3%A3o+-+Paran%C3%A1,+87308-580&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>     
                            </div>                          


                    </div>
                    </address>
                </div>




                <div class="row">
                    <div class="text-center">
                        <a href="mailto:sem@sem.org.br" class="btn btn-primary">Envie-nos um email</a>
                        <p></p>
                        <p></p>

                    </div>
                </div>
                <div class="row">
                    <div class="text-center ">
                        <p><strong>&copy; 2017 Sem </strong><br/> Sociedade Espírita Meimei.</p>
                    </div>
                </div>
            </div>

        </section>






-->






        <script src="<?php echo asset('js/jquery-2.1.1.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/pace.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/classie.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/cbpAnimatedHeader.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/wow.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/inspinia.js'); ?>" type="text/javascript"></script>



        <script src="<?php echo asset('js/app.js'); ?>" type="text/javascript"></script>

    </body>
</html>
