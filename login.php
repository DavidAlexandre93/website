<?php
session_start();
include('conexaologin.php');

$login = mysqli_real_escape_string($conexao, trim($_POST['login']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$senha = md5($senha);

$sql = "select count(*) as totallogin from usuario where login = '{$login}' && senha = '$senha'";

$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['totallogin'] == 0) {

$_SESSION['login'] = $usuario_bd['login'];

echo"<script language='javascript' type='text/javascript'>alert('BEM VINDO!'+  '$login');window.location.href='website/site.php'</script>";

header('Location: painel.php');
exit;
	
}else{

echo"<script language='javascript' type='text/javascript'>alert('Usuário/Senha incorretos!');window.location.href='tela-login-cadastro.php'</script>";

exit();

}

$conexao->close();
exit;


?>