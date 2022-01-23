<?php
define('HOST', '51.79.35.249');
define('USUARIO', 'davidale_david');
define('SENHA', 'agmtech100r');
define('DB', 'davidale_usuario ');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');