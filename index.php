<?php
$envio = $_GET['envio'];
?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ilion Tecnologia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="_assets/images/favicon.png">
        <link rel="apple-touch-icon" href="_assets/images/apple-touch-icon.png">
        <!-- SCRIPTS CSS -->
        <link rel="stylesheet" href="_assets/css/fonticons.css">
        <link rel="stylesheet" href="_assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="_assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="_assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="_assets/css/magnific-popup.css">
        <!--For Plugins external css-->
        <link rel="stylesheet" href="_assets/css/plugins.css" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="_assets/css/style.css">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="_assets/css/responsive.css" />
        <!-- SCRIPTS JS UNICO -->
        <script src="_assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style type="text/css">
            .cont > ul > li > a{
                color: #4b4b4d;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse" onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='..message perso .. '; return true;">

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                <img src="_assets/images/logo_negat.png"/>
                                            </a>
                                        </div>

                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="#home">INíCIO</a></li>
                                                <li><a href="#about">SOBRE</a></li>
                                                <li><a href="#service">SERVIÇOS</a></li>
                                                <li><a href="#portfolio">PORTFÓLIO</a></li>
                                                <li><a href="#extras">EXTRAS</a></li>
                                                <li><a href="#contact">CONTATOS</a></li>
                                            </ul>

                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->
    <?php if(!empty($envio)){ ?>
    <div style='z-index:9999;display:block;width:420px;position:absolute;margin-left:-210px;left:50%;' class='alert alert-info' id='info_rate'>
    <div class='alert-icon' style="float: left;margin: 10px;">
    <i class='fa fa-check' style="color: green"></i>
    </div>
    <div class='container-fluid' style="float: left;margin: 10px;">
    Mensagem enviada com sucesso!
    </div>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close' style="float: right;margin: -10px 10px;">
    <span aria-hidden='true'><i class='fa fa-close' style="color: red;"></i></span>
    </button>
    </div>
    <?php } ?>
            <section id="home" class="home">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h2>Ilion Tecnologia</h2>
                                            <div class="separator"></div>
                                            <p>Empresa voltada para soluções em TIC (Tecnologia da Informação e Comunicação) e para novas tecnologias. Venha conhecer nosso trabalho e tirar suas ideias do papel!</p>
                                            <div class="home_btn">
                                                <a class="btn btn-primary" onclick="scrollToAnchor('about')" >SOBRE NÓS</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h2>Site + aplicativo = 1</h2>
                                            <div class="separator"></div>
                                            <p>Criamos sites com tecnologia Webapp, onde pode-se baixar o site e acessa-lo como um aplicativo, venha conhecer mais através dos nossos serviços</p>
                                            <div class="home_btn">
                                                <a class="btn btn-primary" onclick="scrollToAnchor('service')">VEJA MAIS</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h2>Novas tecnologias</h2>
                                            <div class="separator"></div>
                                            <p>Descubra um novo mundo através da RV (Realidade Virtual) com acessiblidade, ou com uma inteligência artificial para ajudar em seu passeio(museus, faculdades, ..) !</p>
                                            <div class="home_btn">
                                                <a class="btn btn-primary" onclick="scrollToAnchor('service')">QUERO CONHECER</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <a name="about"></a>
            <section id="about" class="about">
                <div class="container">
                    <div class="row">

                        <div class="main_about_area sections">
                            <div class="col-sm-10 col-sm-offset-1">

                                <div class="main_about_content">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="single_about_left_img text-center wow fadeInLeft" data-wow-duration=".6s">
                                                <img src="_assets/images/logo_ilion_norm.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-7 wow fadeInRight" data-wow-duration="700ms">
                                            <div class="single_about_right_content">
                                                <h3>SOBRE A ILION</h3>
                                                <p>Programadores e amigos, com ideia e vontade, foi o crucial para a criação da Ilion Tecnologia. Para isso foi necessário a criação de uma startup com o objetivo de facilitar a vida de usuários. Uma startup focada em novas tecnologias que veio para auxiliar as pessoas durante o seu dia a dia. Tudo começou há 2 anos, com a finalização de um projeto (My Personal Tour 360°), onde queríamos levar às pessoas a facilidade na escolha de um imóvel, visita de lugares e até a museus, sem sair da comodidade do seu lar. Essas lutas e desafios, nos trouxeram amigos e ótimos profissionais que tinham a mesma vontade que nós, nos ajudando a alcançar o objetivo de facilitar a vida dos usuários com novos projetos e propostas. É onde estamos e continuaremos a luta, para levar tecnologia para o seu dia a dia.</p>

                                                <p>Criar aplicações online, aplicativos e/ou sistemas que facilitem o dia a dia de usuários, com foco em novas tecnologias. Com o coração e razão, criamos nossos produtos e sempre prontos para um melhor atendimento, compreensão e carinho para nossos usuários,clientes, fãs e amigos !</p>

                                                <div class="home_btn">
                                                    <a class="btn btn-primary" onclick="scrollToAnchor('contact')">FALE CONOSCO</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="video" class="video text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="video_overlay" style="background-color: transparent;">
                    <div class="container">
                        <div class="row">
                            <div class="main_video">
                                <div class="col-sm-12">
                                    <div class="icon" style="height: 165px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <a name="service"></a>
            <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="main_service_area sections text-center">
                                <div class="row">
                                    <div class="head_title text-center">
                                        <h3>SERVIÇOS</h3>
                                        <p>Soluções em Tecnologia da Informação e Comunicação. Veja o que podemos fazer para sua empresa ou seu trabalho, qualquer dúvida entre em contato, podemos ajudar mais !</p>
                                        <div class="separator2"></div>
                                    </div>

                                    <div class="main_service_content">
                                        <div class="col-sm-4">
                                            <div class="single_service">
                                                <div class="single_service_icon">
                                                    <i class="fa fa-code"></i>
                                                </div>
                                                <div class="single_service_content">
                                                    <h4>SISTEMAS</h4>
                                                    <p>Criação de sistemas online (web) para empresas, com recusos de pagamento entre outros.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single_service">
                                                <div class="single_service_icon">
                                                    <i class="fa fa-mobile"></i>
                                                </div>
                                                <div class="single_service_content">
                                                    <h4>APLICATIVOS</h4>
                                                    <p>Aplicativos (hibridos ou webapp) para dispositivos ANDROID e IOS. Webapp permite fazer o site e aplicativo em apenas um só.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single_service">
                                                <div class="single_service_icon">
                                                    <i class="fa fa-desktop"></i>
                                                </div>
                                                <div class="single_service_content">
                                                    <h4>SITES</h4>
                                                    <p>Sites responsivos, usabilidade e plugins necessários para apresentação ou e-commerce.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border_devider"></div>

                                        <div class="col-sm-4">
                                            <div class="single_service">
                                                <div class="single_service_icon">
                                                    <i class="fa fa-globe"></i>
                                                </div>
                                                <div class="single_service_content">
                                                    <h4>TÉCNOLOGIA RV</h4>
                                                    <p>Aplicativo web sobre Tour virtual usando REALIDADE VIRTUAL (por photosphere), com diferenciais em todo o mercado, com acessibilidade, óculos, pinos e funções diversas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single_service">
                                                <div class="single_service_icon">
                                                    <i class="fa fa-bug"></i>
                                                </div>
                                                <div class="single_service_content">
                                                    <h4>CORREÇÃO DE ERROS</h4>
                                                    <p>Correção de erros em códigos, banco de dados, sites, aplicativos e diversos.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single_service">
                                                <div class="single_service_icon">
                                                    <i class="fa fa-cogs"></i>
                                                </div>
                                                <div class="single_service_content">
                                                    <h4>APLICAÇÕES</h4>
                                                    <p>algo inovador em mente? podemos sentar e por no papel, se é possivel nós faremos.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio" class="portfolio">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_portfolio sections">
                            <div class="head_title text-center">
                                <h3>PORTFÓLIO</h3>
                                    <p>Conheça alguns dos nossos clientes e projetos concluídos de nossa autoria ( criação e desenvolvimento pela Ilion Tecnologia ).</p>
                                    <div class="separator2"></div>
                            </div>

                            <div class="main_portfolio_content text-center">
                                <div class="grid" style="height: auto;">
                                    <div class="grid-item">
                                        <img src="_assets/images/mpt.png" alt="My Personal Tour - 360" />
                                        <div class="grid_item_overlay">
                                            <a href="http://www.iliontecnologia.com.br/mpt2" target="_blank"><i class="text_inside_port">MPT</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/qiseventos.png" alt="QISeventos" />
                                        <div class="grid_item_overlay">
                                            <a href="https://www.qiseventos.com.br" target="_blank"><i class="text_inside_port">QISeventos</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/aia.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="https://www.qiseventos.com.br/aia/index.html" target="_blank"><i class="text_inside_port">A.I.A</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/you.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="#" target="_blank"><i class="text_inside_port">seja um cliente satisfeito</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/you.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="#" target="_blank"><i class="text_inside_port">seja um cliente satisfeito</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/you.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="#" target="_blank"><i class="text_inside_port">seja um cliente satisfeito</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/you.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="#" target="_blank"><i class="text_inside_port">seja um cliente satisfeito</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/you.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="#" target="_blank"><i class="text_inside_port">seja um cliente satisfeito</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/you.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="#" target="_blank"><i class="text_inside_port">seja um cliente satisfeito</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/you.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="#" target="_blank"><i class="text_inside_port">seja um cliente satisfeito</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/you.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="#" target="_blank"><i class="text_inside_port">seja um cliente satisfeito</i></a>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <img src="_assets/images/you.png" alt="clientes" />
                                        <div class="grid_item_overlay">
                                            <a href="#" target="_blank"><i class="text_inside_port">seja um cliente satisfeito</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="extras" class="testimonial">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="main_testimonial sections text-center">
                                <div class="col-md-12" data-wow-delay="0.2s">
                                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                        <!-- Bottom Carousel Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                                <img class="img-responsive img-circle" src="_assets/images/extra_1.png" alt="">
                                            </li>
                                            <li data-target="#quote-carousel" data-slide-to="1">
                                                <img class="img-responsive img-circle" src="_assets/images/extra_2.png" alt="">
                                            </li>
                                            <li data-target="#quote-carousel" data-slide-to="2">
                                                <img class="img-responsive img-circle" src="_assets/images/extra_3.png" alt="">
                                            </li>
                                            <li data-target="#quote-carousel" data-slide-to="3">
                                                <img class="img-responsive img-circle" src="_assets/images/extra_4.jpg" alt="">
                                            </li>
                                        </ol>

                                        <!-- Carousel Slides / Quotes -->
                                        <div class="carousel-inner text-center">

                                            <!-- Quote 1 -->
                                            <div class="item active">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Participação e premiação pelo MPT 360 na EXPOTEC – Exposição Científica, Tecnológica e Cultural no CEFET - RJ, com menção honrosa na categoria de Ciência da Computação.</p>
                                                            <div class="single_test_author">
                                                                <h4>EXPOTEC</h4>
                                                                <p>2015</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 2 -->
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Apresentações e demonstrações de projetos para Comissão do consulado sul-africano, Grupo da NASA sobre estudos à trabalho no Brasil e em algumas escolas pelo estado do Rio de Janeiro, levando aprendizado para e demonstração para todos.</p>
                                                            <div class="single_test_author">
                                                                <h4></h4>
                                                                <p>2015</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!-- Quote 3 -->
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Participação e exposição de projetos em estande na Conitec - Congresso Nacional de Inovação, Trabalho e Educação Corporativa ( UERJ - RJ ).</p>
                                                            <div class="single_test_author">
                                                                <h4>CONITEC</h4>
                                                                <p>2015</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <div class="item">
                                                <blockquote>
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Participação da Hackaton na RIO2C na cidade das artes (barra - RJ)</p>
                                                            <div class="single_test_author">
                                                                <h4>RIO2C</h4>
                                                                <p>2018</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                        </div>

                                        <!-- Carousel Buttons Next/Prev -->
                                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <a name="contact"></a>
            <section id="contact" class="contact sections">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-sm-offset-3">
                            <div class="row">
                                <div class="contact_contant">
                                            <div class="single_widget wow fadeIn cont" data-wow-duration="800ms">
                                                <h4>Contatos</h4>
                                                <ul>
                                                    <li><a href=""> Douglas - (021) 98696-4552</a></li>
                                                    <li><a href=""> Matheus - (021) 96969-3385</a></li>
                                                    <li><a href=""> Suporte@iliontecnologia.com.br</a></li>
                                                    <li><a href=""> Vicente - (021) 99777-6822 - orsinueda@gmail.com</a></li>
                                                    <li><a href=""> Guilherme - (021) 98380-0122 - ghorcades@gmail.com</a></li>
                                                </ul> 
                                            </div>
                                    <div class="col-sm-6">
                                        <h4>Entre em contato para tirar dúvidas ou mais informações</h4>
                                        <small>responderemos o mais rápido possivel</small>
                                        <div class="single_contant_left">
                                            <form action="_assets/php/send_mail.php" id="formid" method="post">
                                                <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="Nome ( pessoal ou empresa )" required="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" placeholder="E-mail" required="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" placeholder="Assunto" required="">
                                                </div>

                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="8" placeholder="Mensagem"></textarea>
                                                </div>

                                                <div class="">
                                                    <input type="submit" value="ENVIAR" class="btn btn-primary">
                                                </div>
                                                <!--</div>--> 
                                            </form>
                                        </div>
                                    </div>

                                </div> <!-- End of messsage contant-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="footer" class="footer_widget">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="row">
                                    <div class="main_widget">
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                                <div class="footer_logo">
                                                    <img src="_assets/images/logo_negat.png" alt="" />
                                                </div>
                                                <p>A ilion tecnologia é uma start-up sem qualquer ajuda de terceiros, anjos ou financiamentos, sustentada somente pelos seus criadores e nossos produtos. Qualquer dúvida entre em contato diretamente conosco, por e-mail ou pela nossas redes sociais.</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-4  col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                                <h4>MATRIZ</h4>
                                                <ul>
                                                    <li><a href="">
                                                            <i class="fa fa-map-marker"></i> 
                                                            <span>Rio de Janeiro - RJ, BRASIL</span>
                                                        </a></li>
                                                </ul> 
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                                <h4>REDES SOCIAIS</h4>
                                                <div class="footer_subcribs_area">
                                                    <div class="flowus">
                                                        <a href="https://www.facebook.com/Iliontecnologia/"><i class="fa fa-facebook"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_footer text-center">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="copyright_text">
                                                <p class=" wow fadeInRight" data-wow-duration="1s">2018. TODOS OS DIREITOS RESERVADOS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <!-- BUTTON TOP -->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!--  SCRIPTS JS -->
        <script src="_assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="_assets/js/vendor/bootstrap.min.js"></script>
        <script src="_assets/js/jquery.magnific-popup.js"></script>
        <script src="_assets/js/jquery.mixitup.min.js"></script>
        <script src="_assets/js/jquery.easing.1.3.js"></script>
        <script src="_assets/js/jquery.masonry.min.js"></script>
        <script src="_assets/js/jquery.fancybox.pack.js"></script>
        <script src="_assets/js/plugins.js"></script>
        <script src="_assets/js/main.js"></script>
        <script type="text/javascript">
        function scrollToAnchor(aid){
            var aTag = $("a[name='"+ aid +"']");
            $('html,body').animate({scrollTop: aTag.offset().top},'slow');
        }
        </script>