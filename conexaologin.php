<?php
    $servidor = "192.185.176.163";
    $usuario = "zerore14_david93";
    $senha = "agmtech100r";
    $dbname = "zerore14_website";
    
    //Criar a conexao
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conexao){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
?> 