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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>


    <body class="single-post single">

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
                        <li><a href="single.html" class="current">Galen Framework</a></li>
                        <li><a href="contact.html">Contato</a>
                            <!--<ul class="sub-menu">
                                <li><a href="contact2.html">Contact + Map</a></li>
                            </ul>-->
                        </li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

        <div id="content" class="site-content center-relative">
            <div class="header-image">
                <img src="images/galen.png" alt=""></div>
            <article class="content-1170 center-relative">
                <div class="content-wrapper">
                    <h1 class="entry-title">
                        Galen framework automação de teste, realizando o teste de regressão visual
                    </h1>
                    <div class="post-info">
                        <div class="cat-links">
                            <ul>
                                <li><a href="http://galenframework.com/">Site Official</a></li>
                            </ul>
                        </div>
                        <!--<div class="post-date">August 21st, 2015</div>
                        <div class="post-author"><a href="#">John</a></div>
                        <div class="post-read-time">15 min read</div>
                        <div class="post-num-comments"><a href="#">5 Comments</a></div>-->
                    </div>

                    <div class="entry-content">
                        <p>O Galen Framework foi criado com design responsivo em mente. Funciona da seguinte maneira:</p>
                        <br>
                        <p>     1.Galen abre uma página no navegador<br>
                                2.Redimensiona o navegador para o tamanho especificado<br>
                                3.Testa o layout com o Galen Specs</p>
                        <br>
                        <p>Caso a página não esteja diretamente acessível, o Galen Framework permite que você realize algumas operações no site primeiro. Como é baseado no Selenium, você é livre para fazer o que quiser: clicando, digitando, injetando javascript do lado do cliente, etc.</p>
                        <!--<blockquote class="inline-blockquote">-->
                            <p>Galen Specs é o idioma com o qual você define como a página deve parecer para diferentes dispositivos. A linguagem é bastante avançada e permite que você expresse o layout completo do seu site com o mínimo de texto. Dê uma olhada no exemplo a seguir.</p>
                        <!--</blockquote>-->
                        <img src="demo-images/codegalen.png" alt="">
                        <p>   Galen usa o Selenium para interagir com elementos na página e obter suas localizações e dimensões. 
                                Uma vez que Galen perceba que algo está errado, ele relata o erro, faz uma captura de tela e destaca o elemento mal-comportado. 
                                Você também pode executar o teste no Selenium Grid , caso queira cobrir o teste de layout entre navegadores.<br>
                                Caso você não tenha recursos para configurar um Selenium Grid, você também pode executar testes de Galen com o Experitest , o Sauce Labs ou o BrowserStack . Na verdade, com o Experitest, o BrowserStack e o Sauce Labs, você pode até executar seus testes em dispositivos móveis reais, como iPhone ou Android, para não precisar emular o layout de dispositivos móveis redimensionando um navegador.<br>
                                Galen oferece duas maneiras de reportar:<br>
                                Relatórios Html - oferece uma visão geral de todos os conjuntos de testes com relatórios completos, capturas de tela e erros destacados
                                TestNG Reports - pode ser usado para incorporar Galen em uma ferramenta de CI como Jenkins
                                Galen é licenciado com o Apache License, versão 2.0 e é distribuído gratuitamente.</p>
                        <br>
                    </div>
                    <div class="clear"></div>
                    <div class="full-width-content">
                        <div class="wp-caption">
                            <img src="demo-images/react.png" alt="">
                            <p class="wp-caption-text"><a href="https://reactjs.org/">Site Official</a></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="resume-entry-content">
                        <br>
                        <p>O React foi projetado desde o início para adoção gradual, e você pode usar o mínimo do React que precisar. Quer você queira experimentar o React, adicionar alguma interatividade a uma página HTML simples ou iniciar um aplicativo complexo React, os links desta seção ajudarão você a começar.</p>
                        <br>
                        <p>React é uma ferramenta somente para criar componentes. Criada pela equipe do Instagram (isso mesmo, antes do Facebook comprar) entrou para o “guarda chuva” de projetos open-source do Facebook, impulsionando mais ainda sua adoção. O grande “boom” do React é o Virtual-DOM.</p>
                        <br>
                        <p>O React, sozinho, é destinado principalmente ao desenvolvimento de interfaces de páginas web. Em 2015, o Facebook anunciou o módulo React Native, que em conjunto com o React, possibilita o desenvolvimento de aplicativos para Android e iOS utilizando componentes de interface de usuário nativos de ambas plataformas, sem precisar recorrer ao HTML.</p>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="zigzag absolute zigzag1" style="left:-9%; top:8%">
                    <img src="images/zigzag.png" alt="">
                </div>
                <div class="zigzag absolute zigzag2" style="right:-7%; top:20%">
                    <img src="images/zigzag.png" alt="">
                </div>
                <div class="zigzag absolute zigzag3" style="right:20%; top:40%">
                    <img src="images/zigzag.png" alt="">
                </div>
                <div class="zigzag absolute zigzag4" style="left:50%; top:70%">
                    <img src="images/zigzag.png" alt="">
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



        <!--Load JavaScript-->
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
