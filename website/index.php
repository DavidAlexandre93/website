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


    <body class="home blog">
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
                        <li><a href="site.php" class="current">Home</a></li>
                        <li><a href="about3.php">Publicidades</a></li>
                        <li><a href="about2.php">Vídeo-Aulas</a></li>
                        <li><a href="about.php">Tecnologias</a></li>
                        <li><a href="single.php">Galen Framework</a></li>
                        <li><a href="contact.php">Contato</a>
                    
                        </li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="block content-1170 center-relative">
            <div class="blog-holder block center-relative">

               
                    <div class="post-thumb thumb-html one_thumb relative">
                        <script>
                            var slider1_speed = "500";
                            var slider1_auto = "false";
                            var slider1_pagination = "true";
                            var slider1_hover = "false";
                        </script>
                        <div class="image-slider-wrapper">
                            <div class="caroufredsel_wrapper">
                                <ul id="slider1" class="image-slider slides center-text">
                                    <li><img src="demo-images/galen.png" alt=""></li>
                                    <li><img src="demo-images/react.png" alt=""></li>
                                    <li><img src="demo-images/javascript.png" alt=""></li>
                                    <li><img src="demo-images/php7.png" alt=""></li>
                                    <li><img src="demo-images/python.png" alt=""></li>
                                </ul>
                            </div>
                            <div class="slider1_pagination carousel_pagination left"></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                
                    <div class="clear"></div>
        


                <article id="post-2" class="relative blog-item-holder">
                    <div class="only-post-title-holder">
                        <h2 class="entry-title excerpt">
                            <a>
                                O que o React Native faz? Basicamente, ao contrário de aplicações web, 
                                que se utilizam da DOM do navegador para representar os elementos na UI, 
                                ele irá realizar chamadas nativas — Objective-C para dispositivos
                                iOS e JAVA para Android — a fim de renderizar estes elementos.<br>
                                O que é React.Js ? Como definido por seus criadores, React é “uma biblioteca 
                                JavaScript declarativa, eficiente e flexível para a criação de interfaces de usuário (UI)”.
                                Essa biblioteca surgiu em 2011, no Facebook, e passou a ser utilizada na interface do mural 
                                de notícias da rede social.

                            </a>
                        </h2>
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="single.html">Saiba mais aqui.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="zigzag absolute" style="bottom: 30px; left: -90px;">
                        <img src="images/zigzag.png" alt="">
                    </div>
                </article>


                <article id="post-3" class="relative blog-item-holder">
                    <div class="post-thumb thumb-image two_third_thumb left">
                        <img src="demo-images/cubo.png" alt="">
                    </div>
                    <div class="post-title-holder one_third_title right">
                        <h2 class="entry-title">
                            <a>Começe a jogar cubo mágico,<br>
                                desvendando agora virtualmente.</a>
                        </h2>
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="" id="clickcubo">Jogar!</a>
                                    <script>
                                    var clickButton = document.querySelector("#clickcubo");
                                    clickButton.addEventListener('click', displayDialog, false);
                                    function displayDialog(e) {
                                    window.open('jogos/cubo/index.html');   
                                    }
                                    </script>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="zigzag absolute" style="bottom: 40px; right: 331px;">
                        <img src="images/zigzag.png" alt="">
                    </div>
                </article>


                <article id="post-4" class="relative blog-item-holder">
                    <div class="post-thumb thumb-image two_third_thumb right">
                        <img src="demo-images/dama.png" alt="">
                    </div>
                    <div class="post-title-holder one_third_title left">
                        <h2 class="entry-title">
                            <a>
                                Desafie seus amigos!<br>
                                Se divirta com o jogo de dama virtual
                            </a>
                        </h2>
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="" id="clickdama">Jogar!</a>
                                    <script>
                                    var clickButton = document.querySelector("#clickdama");
                                    clickButton.addEventListener('click', displayDialog, false);
                                    function displayDialog(e) {
                                    window.open('jogos/dama/index.html');   
                                    }
                                    </script>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="zigzag absolute" style="bottom: 110px; left: -83px;">
                        <img src="images/zigzag.png" alt="">
                    </div>
                </article>


                <article id="post-5" class="relative blog-item-holder">
                    <div class="post-thumb thumb-image one_third_thumb left">
                        <img src="demo-images/genius.png" alt="">
                    </div>
                    <div class="post-title-holder two_third_title right">
                        <h2 class="entry-title">
                            <a>
                                Teste de memória.<br>
                                O jogo que nunca sairá de nossas memórias.
                            </a>
                        </h2>
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="" id="clickgenius">Jogar!</a>
                                    <script>
                                    var clickButton = document.querySelector("#clickgenius");
                                    clickButton.addEventListener('click', displayDialog, false);
                                    function displayDialog(e) {
                                    window.open('jogos/genius/index.html');   
                                    }
                                    </script>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="zigzag absolute" style="bottom: 50px; right: -92px;">
                        <img src="images/zigzag.png" alt="">
                    </div>
                </article>


                <article id="post-4" class="relative blog-item-holder">
                        <div class="post-thumb thumb-image two_third_thumb right">
                            <img src="demo-images/pingpong.png" alt="">
                        </div>
                        <div class="post-title-holder one_third_title left">
                            <h2 class="entry-title">
                                <a>
                                    Teste suas habilidades.<br>
                                    Desafie a você mesmo e prova suas habilidades.
                                </a>
                            </h2>
                            <div class="cat-links">
                                <ul>
                                    <li>
                                        <a href="" id="clickping">Jogar!</a>
                                    <script>
                                    var clickButton = document.querySelector("#clickping");
                                    clickButton.addEventListener('click', displayDialog, false);
                                    function displayDialog(e) {
                                    window.open('jogos/ping/index.html');   
                                    }
                                    </script>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="zigzag absolute" style="bottom: 110px; left: -83px;">
                            <img src="images/zigzag.png" alt="">
                        </div>
                    </article>
    


                <article id="post-6" class="relative blog-item-holder">
                    <div class="only-post-title-holder">
                        <h2 class="entry-title excerpt">
                            <a>
                                Atualmente o PHP é uma linguagem de script muito conhecida e usada principalmente 
                                para o desenvolvimento de aplicações web. Como toda linguagem de programação, 
                                com os anos o PHP foi evoluindo e hoje suporta a grande maioria dos conceitos 
                                de orientação a objetos.<br>
                                No começo de dezembro de 2015 foi lançada a versão 7 do PHP que trouxe diversas novidades. 
                            </a>
                        </h2>
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="about.html">Saiba mais aqui.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="zigzag absolute" style="bottom: 25px; left: -80px;">
                        <img src="images/zigzag.png" alt="">
                    </div>
                </article>


                <article id="post-7" class="relative blog-item-holder">
                    <div class="post-thumb thumb-image two_third_thumb right">
                        <img src="demo-images/galeninfo.png" alt="">
                    </div>
                    <div class="post-title-holder one_third_title left">
                        <h2 class="entry-title" style="margin-top: 305px;">
                            <a>O Galen Framework é um framework de teste que foi originalmente 
                                introduzido para testar o layout de aplicações web em um navegador real.
                                Com um sistema rico de relatórios e gerenciamento de testes. 
                            </a>
                        </h2>
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="single.html">Saiba mais aqui.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="zigzag absolute" style="bottom: 120px; left: 310px;">
                        <img src="images/zigzag.png" alt="">
                    </div>
                </article>

            </div>
            <div class="clear"></div>
           <div class="block center-relative center-text">
                <article id="post-5" class="relative blog-item-holder">
                        <div class="post-thumb thumb-image one_third_thumb left">
                            <img src="demo-images/estudante.png" alt="">
                        </div>
                        <div class="post-title-holder two_third_title right">
                            <h2 class="entry-title">
                                <a>
                                    Área do estudante<br>
                                    Acesse para ficar conectado com o mundo da tecnologia.
                                </a>
                            </h2>
                            <div class="cat-links">
                                <ul>
                                    <li>
                                        <a href="social/bookface/index.php" id="clickredesocial">Acessar!</a>
                                        
           <script>
           var clickButton = document.querySelector("#clickredesocial");
           clickButton.addEventListener('click', displayDialog, false);
           function displayDialog(e) {
           window.open('social/bookface/index.php');
           }
           </script>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="zigzag absolute" style="bottom: 50px; right: -92px;">
                            <img src="images/zigzag.png" alt="">
                        </div>
                    </article>
    
               <!--<a class="more-posts">Load more articles</a>-->

                
            </div>
            <div class="clear"></div>
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
