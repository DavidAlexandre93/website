<?php
    $servidor = "177.52.182.44";
    $usuario = "davidale_fernandes";
    $senha = "agmtech100r";
    $dbname = "davidale_website";
    
    //Criar a conexao
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conexao){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
?> 