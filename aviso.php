
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Language" content="pt-br, en-gb, fr, it, en-us, de, es, ru, zh, ja, po ">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login para área de estudos</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link href="css/StyleLogin.css" rel="stylesheet">
<link href="css/fundodetela.css" rel="stylesheet">
</head>

<body>
    
 <div>
    <section style="margin:0px;padding:0px">
	   <div class="bgPulse" style="margin:0px;padding:0px">
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
     </section>
</div>

<div class="login-form">

<form>
		<div class="avatar">
			<img src="images/triste.png" alt="Avatar">
    </div>
        <h2 class="text-center">Acesso controlado</h2>   
        <div class="form-group">
          
        
        <?php
          $login_cookie = $_COOKIE['Login'];
          if(isset($login_cookie)){
          echo"Bem-vindo! $login_cookie<br>";
          echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você.";
          }else{
          echo"Bem-vindo convidado!<br><br>";
          echo"<font color='green'>Sua primeira vez por aqui?</font><br>Essas informações requer um cadastro básico e rápido para controle de acesso ao contéudo.<br><br>";
          echo"<br><a href='telalogin.php'><font color='red'>Clique aqui e faça Login</font></a> para ter acesso.";
        }
        ?>
        </div>  
		
    </form>
    
</div>
</body>
</html>                   