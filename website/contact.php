<?php

require("../trava.php");

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>David Alexandre Fernandes</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Language" content="pt-br, en-gb, fr, it, en-us, de, es, ru, zh, ja, po ">
    
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.ico" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='style.css' />

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>

    <body class="contact page page-template-default">
        <div class="doc-loader"></div>

        <div class="content-1170 header-holder center-relative">
            <div class="header-logo left">
                <a href="index.html">
                    <img src="images/logo.jpg" alt="Katt">
                </a>
            </div>

            <div class="header-menu">
                <div class="toggle-holder relative">
                    <div id="toggle">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                </div>

                <nav id="header-main-menu" class="big-menu">
                    <ul class="main-menu sm sm-clean">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about3.html">Publicidades</a></li>
                        <li><a href="about2.html">Vídeo-Aulas</a></li>
                        <li><a href="about.html">Tecnologias</a></li>
                        <li><a href="single.html">Galen Framework</a></li>
                        <li><a href="contact.html" class="current">Contato</a>
                            <!--ul class="sub-menu">
                                <li><a href="contact2.html">Contact + Map</a></li>
                            </ul>-->
                        </li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>


        <div id="content" class="site-content">

            <div class="header-image">
                <img src="images/contato.png" alt="">
            </div>
            <article class="content-1170 center-relative">
                <div class="content-wrapper">
                    <div class="entry-content">
                        <div class="one_half ">
                            <p><strong>Entre em contato comigo</strong></p>
                            <p>Entre em contato para informações ou dúvidas.</p>
                            <br>
                            <p>Sempre será bem vindo sugestões.</p>
                            <br>
                            <p>
                                
                                <!--ENDEREÇO-->
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>  Endereço:&nbsp;São Paulo, SP, Brasil
                                <br>
                               
                               <!--CONTATO WHATSAPP-->
                               <span><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                               <a href="https://api.whatsapp.com/send?phone=5511959364795&text=Ol%C3%A1%20Amigo!%20sou%20visitante%20do%20seu%20website." target="_blank" > +55 11 9 5936 4795</a>
                                <br>
                                <br>
                            </p>
                        </div>
                        <div class="one_half last ">
                            
                            <form class="form-horizontal" method="POST" action="envia.php" enctype="multipart/form-data">
                              <div class="contact-form">
                                  
                                <p><input id="nome" name="nome" placeholder="Informe seu nome" class="form-control input-md" required="" type="text"></p>
                                
                                <p><input id="replyto" name="replyto" placeholder="Informe seu email" class="form-control input-md" required="" type="text"></p>
                                
                                <p><input id="assunto" name="assunto" placeholder="Assunto da mensagem" class="form-control input-md" required="" type="text"></p>
                                
                                <p><textarea class="form-control" id="mensagem" name="mensagem" placeholder="Escreva sua mensagem"></textarea></p>
                                
                                <p><input type="submit" class="btn btn-inverse"></p>
                                
                             </div>
                           </form>
                        </div>
                      
                        <div class="clear"></div>
                    </div>
                </div>
            </article>

        </div>

        <!--Footer-->

        <footer class="footer">
            <div class="content-1170 center-relative">
                <ul>
                    <li class="left-footer-content">
                            © 2019 All rights reserved by <a href="https://www.davidalexandrefernandes.com.br" target="_blank">David Alexandre Fernandes</a>.
                    </li>
                    <li class="center-footer-content">
                        <a href="index.html">
                            <img src="images/footerlogo.jpg" alt="Katt">
                        </a>
                    </li>
                    <li class="right-footer-contnet">
                        
                        <a href="https://github.com/DavidAlexandre93" target="_blank"><i class="fab fa-github-square"></i></a>
                        
                       <a href="https://www.linkedin.com/in/david-alexandre-fernandes-08b005b4/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        
                       <a href="https://web.facebook.com/davidalexandrefernandes1993" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        
                      <a href="mailto:davidalexandrefernandes@outlook.com?subject=Hello%20again" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        
                    </li>
                    <li class="left-footer-content mobile">
                            © 2019 All rights reserved by <a href="https://www.davidalexandrefernandes.com.br" target="_blank">David Alexandre Fernandes</a>.
                    </li>
                </ul>
            </div>
        </footer>



        <div class="fixed scroll-top">
            <img src="images/back_to_top.png" alt="Go Top">
        </div>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
        <script type="text/javascript" src="js/queryloader2.min.js"></script>
        <script type="text/javascript" src="js/jquery.carouFredSel-6.0.0-packed.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
