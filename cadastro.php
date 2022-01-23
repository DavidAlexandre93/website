<?php
session_start();
include("conexaocadastro.php");

$login = mysqli_real_escape_string($conexao, trim($_POST['login']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));

$sql = "select count(*) as total from usuario where login = '$login'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	echo"<script language='javascript' type='text/javascript'>alert('Login já existe!');window.location.href='tela-login-cadastro.php'</script>"; 
	//header('Location: cadastro.php');
	exit;
}else{
$sql = "INSERT INTO usuario (login, senha, email, data_cadastro) VALUES ('{$login}', '{$senha}', '{$email}', NOW())";

echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='tela-login-cadastro.php'</script>"; 

}/*else{
echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastrar.php'</script>";
$conexao->close();
}*/
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

//header('Location: cadastro.php');
exit;

?>