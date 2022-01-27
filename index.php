<?php 
/*$msg=0;
$msg = $_REQUEST['msg'];*/
?>
<!-- INICIO DO CÓDIGO -->
<!DOCTYPE html>
<html class="no-js">

<!-- INICIO DO HEAD -->
<head>
    <!-- LINKS META -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="pt-br, en-gb, fr, it, en-us, de, es, ru, zh, ja, po ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- LINKS -->
    <title>David Alexandre Fernandes</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/fundodetela.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- SCRIPTS -->  
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <!-- ICONES -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <!-- CÓDIGO TESTE PARA CONTABILIZAR VISITAS NO SITE -->
   <!-- <script language="javascript"> 
      function setCookie(nome, valor, dias){ 
      diasms = (new Date()) .getTime() + 1000 * 3600 * 24 * dias; 
      dias = new Date(diasms); 
      expires = dias.toGMTString(); 
      document.cookie = escape(nome) + "=" + escape(valor) + "; expires=" + expires; 
      } 
     if (!document.cookie){
        setCookie("cookie", "1", 365);
        document.write("<font face='verdana' size='1'>Visitas : 1</font>");
     } else {
     var cont = document.cookie;
     var dividindo = cont.split("=");
     //document.write(dividindo[1]);
     var numero = parseInt(dividindo[1]);
     var soma = numero + 0;
     document.write("<font face='verdana' size='2'>Visitas : " + soma + "</font>");
     setCookie("cookie", soma, 365);
    }
    </script> -->
<!-- FIM DO CÓDIGO TESTE -->

<!-- INICIO CSS DO MENU FIXO -->    
<style type="text/css">
   #menuFixo {
    position: fixed;
    right: 0;
    top: 50%;
    width: 8em;
    margin: -2.5em 0 0 0;
    z-index: 5;
    background: hsla(80, 90%, 40%, 0.7);
    color: white;
    font-weight: bold;
    font-size: large;
    text-align: left;
    border: solid hsla(80, 90%, 40%, 0.5);
    border-right: none;
    padding: 0.5em 0.5em 0.5em 2.5em;
    box-shadow: 0 1px 3px black;
    border-radius: 3em 0.5em 0.5em 3em;
}
</style>
<!-- FIM CSS DO MENU FIXO -->

</head>
<!-- FIM DO HEAD -->
    
    <!-- ALTERAÇÃO DO MENU PARA DISPOSITIVO MOBILE -->
     <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
     </div>
    <!-- FIM DO MENU PARA DISPOSITIVO MOBILE -->
      
<!-- INICIO DA HEADER OU NAV -->      
    <header>
    
    <!-- INICIO DO MENU PARA WEB E MOBILE -->
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        
        <ul id="menu" class="shadow">
            <li>
                <a href="#about">Sobre</a>
            </li>
            <li>
                <a href="#experience">Experiência</a>
            </li>
            <li>
                <a href="#education">Formação</a>
            </li>
            <li>
                <a href="#projects">Projetos</a>
            </li>
            <li>
                <a href="#skills">Habilidades</a>
            </li>
            <li>
                <a href="#contact">Contato</a>
            </li>
            <li> 
                <a id="clickcoters" href="">Coters</a>
            </li>
            <script>
            var clickButton = document.querySelector("#clickcoters");
            clickButton.addEventListener('click', displayDialog, false);
            function displayDialog(e) {
            //window.alert("You clicked me!");
            window.open('https://www.linkedin.com/feed/update/urn:li:activity:6422814925667737600/');   
            }
            </script>
        </ul>
    <!-- FIM DO MENU PARA WEB E MOBILE -->
    </header>
    <!-- FIM DA HEADER OU NAV -->
    
    <!-- INICIO DO BODY -->
    <body>
        <!-- INICIO DO SCRIPT PARA ABRIR TELA DE LOGIN -->
           <script>
           var clickButton = document.querySelector("#clickevent");
           clickButton.addEventListener('click', displayDialog, false);
           function displayDialog(e) {
           window.open('telalogin.php');
           }
           </script>
        <!-- FIM DO SCRIPT PARA ABRIR TELA DE LOGIN -->
           
   <!-- INICIO DO MENU FIXO -->        
   <ul id=menuFixo>
     <li><a href="tela-login-cadastro.php"<b>Page I.T</b></a>
     <li><a id="clickcotersFixo" href="">Coters</a>
          
     <script>
            var clickButton = document.querySelector("#clickcotersFixo");
            clickButton.addEventListener('click', displayDialog, false);
            function displayDialog(e) {
            //window.alert("You clicked me!");
            window.open('https://www.linkedin.com/feed/update/urn:li:activity:6422814925667737600/');   
            }
     </script>
   </ul>
   <!-- FIM DO MENU FIXO -->  
   
   <!-- INICIO DA ESTRUTURAÇÃO BOOTSTRAP "LEAD-CONTENT"-->
    <div id="lead">
        <!-- INICIO DO CÓDIGO PARA FOTO DE PERFIL-->
        <div id="lead-content" style="border-radius:50%;">
        <img class="circle" style="margin-bottom:429%;border-radius: 50%;border: 6px solid white;width: 120px;height: 120px" />
        </div>
        <!-- FIM DO CÓDIGO PARA FOTO DE PERFIL-->
        
        <div id="lead-content" class="selecao-details  col-lg-10 col-md-6 col-sm-12 col-xs-12">
            
          <!-- INICIO DO SUBTITULO DA FOTO DO PERFIL E LINKS DE CURRÍCULO -->
            <h1>David Alexandre Fernandes</h1>
            <h2>Fullstack Developer | Software Quality</h2><h2>Download Currículo</h2>
            
            <a href="https://onedrive.live.com/embed?cid=6D3C8BF67AB3908F&resid=6D3C8BF67AB3908F%2119091&authkey=AGZLjqlovcjHvuQ&em=2"><img src="images/brasil.png" alt=""></a>
            
             <a href="https://onedrive.live.com/embed?cid=6D3C8BF67AB3908F&resid=6D3C8BF67AB3908F%2119054&authkey=AEvWwS2MJ3wij7I&em=2"><img src="images/eua.png" alt=""></a>
             
             <br><br><br>
            <a href="tela-login-cadastro.php" id="clickevent" class="btn-rounded-white shadow-large"><b>Page I.T</b></a>
          <!-- FIM DO SUBTITULO DA FOTO DO PERFIL E LINKS DE CURRÍCULO -->
        </div>
       <!-- FIM DA ESTRUTURAÇÃO BOOTSTRAP "LEAD-CONTENT"-->
      
       <!-- INICIO SETA DA "MAO" PARA DESCER "LEAD-DOWN" -->
        <div id="lead-down" style="font-size: 35px">
            <span>
                <a href=""><i class="fa fa-hand-o-down" aria-hidden="true"></i></a>
            </span>
        </div>
      <!-- FIM DA SETA DA "MAO" PARA DESCER "LEAD-DOWN" -->
       

<!-- INICIO DO CODIGO PARA ROBO NA TELA -->
    <div class="message">
    </div>
    <div class="sand"></div>
    <div class="bb8">
    <div class="antennas">
    <div class="antenna short"></div>
    <div class="antenna long"></div>
    </div>
    <div class="head">
    <div class="stripe one"></div>
    <div class="stripe two"></div>
    <div class="eyes">
    <div class="eye one"></div>
    <div class="eye two"></div>
    </div> 
    <div class="stripe three"></div>
    </div>
    <div class="ball">
    <div class="lines one"></div>
    <div class="lines two"></div>
    <div class="ring one"></div>
    <div class="ring two"></div>
    <div class="ring three"></div>
    </div>
    <div class="shadow2"></div>
    </div>
    <div class="shameless">
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
<!-- FIM DO CODIGO PARA ROBO NA TELA -->
        
    </div>
    <!-- FIM DO CODIGO "LEAD" -->

<!-- INICIO DO CODIGO "SOBRE-MIM" -->
    <div id="about">
    
        <div class="container">
            <div class="row">
               <div class="row col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2 class="heading">Sobre mim</h2>
                    </div>
               
                <div class="col-md-10">
                    <p>      
                             <br>
                             27 anos, natural do estado do Mato Grosso e atualmente residindo na região metropolitana de São Paulo, formado em técnico eletrônico e técnico em informática pela instituição ETEC, atualmente cursando Ciência da Computação no Centro Universitário UNASP, realizando inúmeros cursos de especialização relacionados a diversas tecnologias; entusiasta da tecnologia da informação, focado e detalhista.
                             Carreira iniciada na área da engenharia eletrônica com mais de 6 anos de experiência, migrando para área de tecnologia, experiências com a função de automação de testes e também desenvolvimento fullstack. 
                            <br>
                            Admirador de tecnologia da informação, sempre atualizado com novas tecnologias.  
                            <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DO CODIGO "SOBRE-MIM" -->

    <!-- INICIO DO CODIGO "EXPERIENCIA" -->
    <div id="experience" class="background-alt">
        <h2 class="heading">Experiência</h2>
        <div id="experience-timeline">

        <div class="shadow-large" data-date="Novembro 2018 – Atual">
              <h3>Cognizant Technology Solutions</h3>
              <h4>Test Automation Engineer</h4>
              <p>Teste</p>
        </div>
        
            <div class="shadow-large" data-date="Novembro 2018 – Atual">
                <h3>Cognizant Technology Solutions</h3>
                <h4>Test Automation Engineer</h4>
                <p>
                Realizando análise de modelagem de testes na ferramenta JIRA, construindo métodos de teste para automatização e atribuindo novas metodologias e tecnologias para a automação de teste como o Galen Framework implementado e apresentado por mim para a empresa como uma solução para teste de regressão visual em layout de website e app. Utilizando linguagem Java e JavaScript integrando com metodologias BDD e TDD. trabalhando com tecnologias como GIT, Maven, Cucumber, JUnit. Utilizando IDE como Katalon, Eclipse, Appium.
                </p>
            </div>

            <div class="shadow-large" data-date="Março 2018 – Novembro 2018">
            <h3>Tech Mahindra IT Services, Outsourcing & IT Consulting</h3>
                <h4>Software Quality Assurance Tester</h4>
                <p>
                Executar o planos e casos de testes de ponta a ponta juntamente com gerenciamento de defeitos na aplicação ALM (Application lifecycle management). Utilizando banco de dados SQLDeveloper para consultar, alterar e inserir dados nas tabelas na base de dados e codificação em Unix no Putty para realização de testes integrados com acesso a máquinas do servidor. Aplicando testes massivos utilizando API com SOPUI e Jmeter na utilização de códigos XML. Atendendo a projetos na área de Telecom para empresa Telefônica Vivo. 
                </p>
            </div>

            <div class="shadow-large" data-date="Março 2015 – Fevereiro 2018">
                <h3>Chrompack Instrumentos Científicos EPP</h3>
                <h4>Electronic Engineering</h4>
                <p>
                Avaliações no departamento técnico na área de metrologia, realizando calibração e reparos em equipamentos de segurança no trabalho deixando-os aptos para o uso em campo de trabalho, elaborando o certificado acreditado pelo INMETRO (RBC e RBLE) com assinatura própria, observando os resultados obtidos da calibração, prestando treinamentos ao cliente para novos equipamentos adquiridos e suporte para manuseio.
                </p>
            </div>

            <div class="shadow-large" data-date="Março 2011 – Maio 2014">
                <h3>Eurotronics Montagens Eletrônicas Ltda</h3>
                <h4>Electronic Engineering</h4>
                <p>
                Realizando leitura de esquemas eletrônicos e através disto fazendo a manutenção nas placas eletrônicas com componentes SMT (Surface Mount Technology) e PTH (Pin Through Hole), testando-as através do sistema de gigas ou (In-Circuit-Tester), compilando programas através de gravações em microcontroladores PIC (Peripherical Interface Controller) no MPLAB IDE. 
                </p>
            </div>
        </div>
    </div>
   <!-- FIM DO CODIGO "EXPERIENCIA" -->

   <!-- INICIO DO CODIGO "EDUCAÇÃO" -->
    <div id="education" class="background-alt">
       
        <h2 class="heading">Formação</h2>
        <div class="education-block shadow-large">
            <h3>Centro Estadual de Educação Tecnológica Paula Souza</h3>
            <span class="education-date">Fevereiro 2011 - Dezembro 2013</span>
            <h4>Técnico em Eletrônica</h4>
            <ul>
                <li>
                    Elaborando projetos, montagem, instalação e realizando manutenção corretiva e preventiva em equipamentos eletrônicos, desenvolve dispositivos de circuitos e sugerindo mudanças no processo de produção, criação e implementação dos sistemas de automação.
                </li>
                <li>
                    Formado com CREA habilitação registrado pelo CONFEA.
                </li>
            </ul>
        </div>
        
        <div class="education-block shadow-large">
            <h3>Centro Estadual de Educação Tecnológica Paula Souza</h3>
            <span class="education-date">Fevereiro 2017 - Julho 2018</span>
            <h4>Técnico em Informática(Desenvolvimento de sistemas)</h4>
            <ul>
                <li>
                    Responsável pela montagem e manutenção de computadores, detecção e correção de problemas nos computadores, instalação e configuração de redes e softwares.
                </li>
                <li>
                    Desenvolvimento de sistemas e websites. Realizando em grande parte programação.
                </li>
            </ul>
        </div>
      
        <div Class="education-block shadow-large">
            <h3>Universidade Nove de Julho-UNINOVE</h3>
            <span class="education-date">Agosto 2018 - Atual</span>
            <h4>Ciência da Computação</h4>
            <ul>
                <li>
                    O bacharel da Ciência da Computação trabalha, fundamentalmente, na elaboração de programas de informática, para computadores ou dispositivos móveis, como celulares e tablets.        
                </li>
                <li>
                    Analisa as necessidades dos usuários, desenvolve softwares e aplicativos, gerencia equipes de criação e instala sistemas de computação. Cria ferramentas de informática, dos softwares mais básicos, como os usados para controle de estoques, até os mais complexos sistemas de processamento de informações.
                </li>
                <li>
                    Também dá assistência aos usuários, manutenção a redes de computadores e a conexões com a internet. Pode, ainda, implantar e gerenciar bancos de dados e instalar sistemas de segurança para as operações de compra e venda pela rede.
                </li>
            </ul>
        </div>
  
      <div class="education-block shadow-large">
            <h3>Cultura Inglesa</h3>
            <span class="education-date">Dezembro 2019 - Atual</span>
            <h4>Especialização em Inglês</h4>
            <ul>
                <li>
                   
                    Escola especializada em inglês com cultura, tecnologia e excelência acadêmica. 
                </li>
            </ul>
        </div>
         
        <div class="education-block shadow-large">
            <h3>Impacta Treinamentos</h3>
            <span class="education-date">Julho 2019 - Atual</span>
            <h4>Formação em Desenvolvimento de Componentes Web e Mobile com ReactJS, Redux e React Native</h4>
            <ul>
                <li>
                    Escola e Faculdade especializada em treinamentos voltada para tecnologias, com maior excelência no quesito. 
                </li>
            </ul>
        </div>
        <!-- End. education-block -->
        
        <!--<div class="education-block shadow-large">
            <h3>Impacta Treinamentos</h3>
            <span class="education-date">Julho 2019 - Atual</span>
            <h4>Curso de Desenvolvimento Web com MEAN Stack</h4>
            <ul>
                <li>
                    Escola e Faculdade especializada em treinamentos para tecnologias em desenvolvimento de sistemas, com maior excelencia no quesito. 
                </li>
            </ul>
        </div>-->
      </div>    
    <!-- FIM DO CODIGO "EDUCAÇÃO" -->
    
    <!-- INICIO DO CODIGO "PROJETOS" -->
    <div id="projects" class="background-alt">
         
        <h2 class="heading">Projetos</h2>
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/hortelan.jpg" />
                    </div>
                    
                    <div class="project-info">
                        <h3>Projeto Hortelan</h3>
                        <p>
                            Projeto Hortelan  é uma horta na rede para acesso via website, assim podendo ter todos os dados mostrados como status do solo, nível de bateria, nível de água, umidade relativa do ar e temperatura, umidade do solo e última rega atualizada. Com sua bateria sendo alimentada por placa solar para reutilização de energia renovável. 
                        </p>
                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6422814925667737600">Publicação</a>
                    </div>
                </div>
              
                 <div class="project shadow-large">
                    <div class="project-image">
                 <div class="project-image">
                        <img src="images/hotelanproject.png" />
                    </div>
                    <div class="project-info">
                        <h3>Sistema Hortelan</h3>
                        <p>
                      Com três tipos de “flag” para o sistema, ou seja, com rega manual, rega automática e desligamento do sistema, com rega manual podendo clicar no botão de "regar agora" toda a vez que desejar regar sua horta e com rega automática pode ser escolhido o nível de umidade do solo em três níveis com baixo, médio e alto e o próprio sistema irá fazer esta rega automática observando o nível de umidade do solo que foi estabelecido.
                        </p>
                    </div>
                    </div>
                    </div>

                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/galen.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Galen Framework</h3>
                        <p>
                            Especialista em automatização de testes para layout de websites responsivos para todos os tipos de dispositivos com a ferramenta Galen Framework juntamente com javascript, java, selenium webdriver, junit.
                        </p>
                        <a href="http://galenframework.com/">Saiba mais sobre Galen-Framewok</a>
                    </div>
                </div>
                
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/equipe.jpg" />
                    </div>
                    
                    <div class="project-info">
                        <h3>Hackathon CodeStage Sony Music</h3>
                        <p>
                            Participei como desenvolvedor de uma hackathon realizada pela Sony Music e organizada pela Shawee, para realizar um projeto que atendesse uma necessidade, onde criamos uma ideia e um prototipo de sistema web para aumentar o número de mulheres no mundo musical em sua diversas áreas. Criamos um projeto chamado Donas do Som com licença pertencente á Sony Music.<br> Equipe composta por:<br> David(Desenvolvedor) | Tay(Desgine|UX) | Rodrigo(Desenvolvedor) | Willian(Business|Marketing)
                        </p>
                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6516073106350620673/">Postagem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DO CODIGO "PROJETOS" -->

    <!-- INICIO DO CODIGO "HABILIDADES" -->
    <div id="skills" style="background-color:white">
        
        <h2 class="heading">Habilidades</h2>
        <ul>
            <li class="shadow-large">Gulp</li>
            <li class="shadow-large">Webpack</li>
            <li class="shadow-large">JavaScript</li>
            <li class="shadow-large">NodeJS</li>
            <li class="shadow-large">MySQL</li>
            <li class="shadow-large">MongoDB</li>
            <li class="shadow-large">NoSQL</li>
            <li class="shadow-large">ReactJS</li>
            <li class="shadow-large">VueJS</li>
            <li class="shadow-large">Bootstrap 4</li>
            <li class="shadow-large">JQuery</li>
            <li class="shadow-large">ECMAScript 6,7,8</li>
            <li class="shadow-large">CSS3</li>
            <li class="shadow-large">HTML5</li>
            <li class="shadow-large">ExpressJS</li>
            <li class="shadow-large">AJAX</li>
            <li class="shadow-large">PHP7</li>
            <li class="shadow-large">Python</li>
            <li class="shadow-large">Django</li>
            <li class="shadow-large">Git</li>
            <li class="shadow-large">XML</li>
            <li class="shadow-large">JSON</li>
            <li class="shadow-large">Firebase</li>
            <li class="shadow-large">SQLServer</li>
            <li class="shadow-large">Laravel</li>
            <li class="shadow-large">Java</li>
            <li class="shadow-large">Device Farm</li>
            <li class="shadow-large">SpringMVC</li>
            <li class="shadow-large">MEAN Stack</li>
            <li class="shadow-large">Heroku</li>
            <li class="shadow-large">AngularJS</li>
            <li class="shadow-large">Angular4</li>
            <li class="shadow-large">POO</li>
            <li class="shadow-large">React Native</li>
            <li class="shadow-large">Redux</li>
            <li class="shadow-large">BDD</li>
            <li class="shadow-large">TDD</li>
            <li class="shadow-large">Cucumber</li>
            <li class="shadow-large">Galen Framework</li>
            <li class="shadow-large">Selenium WebDriver</li>
            <li class="shadow-large">Automação de testes em Java</li>
            <li class="shadow-large">Maven</li>
            <li class="shadow-large">Junit</li>
            <li class="shadow-large">Mockito</li>
            <li class="shadow-large">Capybara</li>
            <li class="shadow-large">Appium</li>
            <li class="shadow-large">Android Studio</li>
            <li class="shadow-large">XCode</li>
        </ul>
    </div>
    <!-- FIM DO CODIGO "HABILIDADES" -->
    
   <!-- INICIO DO CODIGO "CONTATO" -->
    <div id="contact">
    
    <!-- INICIO DO CODIGO PARA ALTERNAR CORES -->
	   <div style="width:100%;height:100%">
		 <span></span>
		 <span></span>
		 <span></span>
		 <span></span>
		 <span></span>
		 <span></span>
		 <span></span>
		 <span></span>
		 <span></span>
		 <span></span>
	  </div>
    <!-- FIM DO CODIGO PARA ALTERNAR CORES -->
        
    <!-- INICIO DO CODIGO DE FORMULARIO PARA "CONTATO" -->
        <h2 class="heading" style="color:white">Contato</h2>
        <div id="contact-form">
                <form class="form-horizontal" method="POST" action="envia.php" enctype="multipart/form-data">
                    
                    <!-- Campo: Nome -->
                    <div class="form-group"> 
                        <input id="nome" name="nome" font style='font-style:italic' placeholder="Informe seu nome" class="form-control input-md" required="" type="text">
                    </div>

                    <!-- Campo: Email -->
                    <div class="form-group"> 
                        <input id="replyto" name="replyto" font style='font-style:italic' placeholder="Informe seu email" class="form-control input-md" required="" type="text">
                    </div>

                    <!-- Campo: Assunto -->
                    <div class="form-group">
                        <input id="assunto" name="assunto" font style='font-style:italic' placeholder="Informe o assunto da mensagem" class="form-control input-md" required="" type="text">
                    </div>

                    <!-- Campo: anexo --> 
                    <div class="form-group">
                        <label for="arquivo" style="color:white">Envie seu currículo para indicação</label>
                        <input id="arquivo" name="arquivo" class="input-file" type="file">
                        <span class="help-block" style="color:white">No máximo 2MB por anexo</span>
                    </div>

                    <!-- Campo: Mensagem -->
                    <div class="form-group">              
                        <textarea class="form-control" id="mensagem" name="mensagem" font style='font-style:italic' placeholder="Escreva sua mensagem"></textarea>
                    </div>
        
                    <!-- Botão Enviar -->
                    <center>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <button type="submit" class="btn btn-inverse">Enviar</button>
                    </div> 
                        </form>
        
        <!-- INICIO DO CODIGO TESTE -->
            <!--<form method="POST" action="https://formspree.io/davidalexandrefernandes@outlook.com">
                <input type="hidden" name="_subject" value="Contact request from personal website" />
                <input type="email" name="_replyto" placeholder="Seu email" required>
                <textarea name="message" placeholder="Sua messagem" required></textarea>

                <div class="form-group">
                <label for="exampleFormControlFile1" style="color:#3498db">Envie seu currículo para indicação</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit">Enviar</button>
            </form>-->
       <!-- FIM DO CODIGO TESTE -->

        </div>
        </div>
        <!-- FIM DO CODIGO DE FORMULARIO PARA "CONTATO" -->
    </div>
     <!-- FIM DO CODIGO "CONTATO" -->


     <!-- INICIO BARRA INFERIOR "FOOTER" -->
    <footer style="background-color:#F0F8FF">

        <!--Icone e-mail-->
    <!-- <p><a style="margin-left:40px; margin-bottom:35px" href="mailto:davidalexandrefernandes@outlook.com?subject=Hello%20again"><b>davidalexandrefernandes@outlook.com</b></a>
          <button style="margin-left:10px; margin-bottom:35px" type="button" class="fa fa-envelope" aria-hidden="true">
            </button></p>-->
             
     <!--Icone Telefone-->
     <!--<p><a style="margin-left:195px" href="+5511959364795"><b>(+55)11 9 5936 4795</b></a><br>
            <button style="margin-left:10px" type="button" class="fa fa-whatsapp" aria-hidden="true">
            </button></p>-->
     
     <!-- INICIO DO CODIGO PARA ICONES -->
        <div class="container">
            <div class="row">
                <div class="col-sm-5 copyright">
                    <p>
                        Copyright &copy; 2019 David Alexandre Fernandes
                    </p>
                </div>
                <div class="col-sm-2 top" style="font-size: 35px;">
                    <span id="to-top">
                        <a href=""><i  class="fa fa-hand-o-up" aria-hidden="true"></i></a>
                    </span>
                </div>
                <div class="col-sm-5 social">
                    <ul>
                        <li>
                            <a href="https://github.com/DavidAlexandre93" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <!--<li>
                            <a href="https://stackoverflow.com/" target="_blank"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                        </li>-->
                        <li>
                            <a href="https://www.linkedin.com/in/david-alexandre-fernandes-08b005b4/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://web.facebook.com/davidalexandrefernandes1993" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/DavidAl99636957" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="mailto:davidalexandrefernandes@outlook.com?subject=Hello%20again" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </li>
                        <li>
                          <a href="https://api.whatsapp.com/send?phone=5511959364795&text=Ol%C3%A1%20Amigo!%20sou%20visitante%20do%20seu%20website." target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- FIM DO CODIGO PARA ICONES -->
    </footer>
    <!-- FIM BARRA INFERIOR "FOOTER" -->
    
    <!-- SCRIPT PARA CODIGO JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>
 
</body>
<!-- FIM DO BODY -->

</html>
<!-- INICIO DO CÓDIGO -->
