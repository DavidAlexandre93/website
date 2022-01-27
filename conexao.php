<?php
define('HOST', '192.185.176.163');
define('USUARIO', 'zerore14_david93');
define('SENHA', 'agmtech100r');
define('DB', 'zerore14_website');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');