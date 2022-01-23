<?php
$admin_password = "agmtech100r"; // senha da área de administração (/admin)
$mysql_hostname = "134.209.75.85"; // servidor MySQL
$mysql_user = "davidale_fernand"; // usuário MySQL
$mysql_password = "agmtech100r"; // senha MySQL
$mysql_database = "davidale_redsocial"; // banco de dados MySQL
$prefix = ""; // prefixo das tabelas (desnecessário)

// não configure aqui
$installed = true; //
$env = $_SERVER['QUERY_STRING'];
$naofaz = Array("order", "concat", "union", "ORDER", "CONCAT", "UNION", "select", "SELECT", "drop", "DROP");
$env = str_replace($naofaz, "%SQLI", $env);
if(strpos($env, "%SQLI")!=false OR @mysql_error()!=null) {
  die('<script> location.href="about:blank"; </script>');
}

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $con) or die("Could not select database");

$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $conn) or die("Could not select database");

$link = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $link) or die("Could not select database");

$db = mysql_select_db($mysql_database) or die("Could not select database");

if($installed==false) {
  die("<script> location.href='install/'; </script>");
}

if(is_dir("install") AND $installed==true) {
  die("Exclua o diretório \"install\" para continuar.");
}
if(!is_writable("uploadedimage")) {
  die("Falta CHMOD 777 em \"uploadedimage\"");
}
?>