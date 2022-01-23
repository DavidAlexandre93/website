<?php 

session_start();
include('conexaologin.php');

if($login != $login) {
    header("Location:nao-logado.php");
}

?>

