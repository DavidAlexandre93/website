
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="pt-br, en-gb, fr, it, en-us, de, es, ru, zh, ja, po ">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>David Alexandre Fernandes</title>
  
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/style1.css">

</head>

<body>

<div class="bg"></div>
<div class="panel">
  <input type="radio" id="switch-open" name="switch"/>
  <input type="radio" id="switch-close" name="switch"/>
  
  <div class="login">
    <h1>Login</h1>
    
    <form  action="login.php" method="POST">
    <div class="group"><i class="fa fa-user" aria-hidden="true"></i>
    <input type="text" name="login" id="login" placeholder="Login" required="required"/>
      <label for="Login"></label>
    </div>
    
    <div class="group"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
      <input type="password" name="senha" id="senha" placeholder="Senha" required="required"/>
      <label for="Password"></label>
    </div>
    
    <input type="submit" name="entrar" value="Acessar"/>
    </form>
  </div>

  
  
  <div class="register">
    <label class="button-open" for="switch-open"></label>
    <label class="button-close" for="switch-close"></label>
    <div class="inner">
      <h1>Register</h1>
      
      <form method="POST" action="cadastro.php">
      <div class="group"><i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" name="login" id="login" placeholder="login" required="required" maxlength="20"/>
        <label for="name"></label>
      </div>
      
      <div class="group"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
        <input type="password" name="senha" id="senha" placeholder="senha" required="required" maxlength="11"/>
        <label for="password"></label>
      </div>
      
     <div class="group"><i class="fa fa-envelope" aria-hidden="true"></i>
        <input type="text" name="email" id="email" placeholder="E-mail" required="required"/>
        <label for="email"></label>
     </div>
     
      <input type="submit" value="Cadastrar" name="cadastrar"/>
     </form>
    </div>
  </div>
</div>
  
  

</body>

</html>
