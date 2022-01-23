<?php
$admin_password = "agmtech100r"; // senha da área de administração (/admin)
$mysqli_hostname = "134.209.75.85"; // servidor MySQL
$mysqli_user = "davidale_fernand"; // usuário MySQL
$mysqli_password = "agmtech100r"; // senha MySQL
$mysqli_database = "davidale_redsocial"; // banco de dados MySQL
$prefix = ""; // prefixo das tabelas (desnecessário)

// não configure aqui
$installed = false;
$env = $_SERVER['QUERY_STRING'];
$naofaz = Array("order", "concat", "union", "ORDER", "CONCAT", "UNION", "select", "SELECT", "drop", "DROP");
$env = str_replace($naofaz, "%SQLI", $env);
if(strpos($env, "%SQLI")!=false OR @mysqli_error()!=null) {
  die('<script> location.href="about:blank"; </script>');
}

$bd = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password) or die("Could not connect database");
mysqli_select_db($mysqli_database, $bd) or die("Could not select database");

$con = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password) or die("Could not connect database");
mysqli_select_db($mysqli_database, $con) or die("Could not select database");

$conn = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password) or die("Could not connect database");
mysqli_select_db($mysqli_database, $conn) or die("Could not select database");

$link = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password) or die("Could not connect database");
mysqli_select_db($mysqli_database, $link) or die("Could not select database");

$db = mysqli_select_db($mysqli_database) or die("Could not select database");

if($installed==false) {
  die("<script> location.href='install/'; </script>");
}

if(is_dir("install") AND $installed==true) {
  die("Exclua o diretório \"install\" para continuar.");
}
if(!is_writable("uploadedimage")) {
  die("Falta CHMOD 777 em \"uploadedimage\");
}
?>