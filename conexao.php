<?php
    //este arquivo conecta com bd mysql
    //definir as variaveis
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $bd="empresa";
    //charmar o comando para conectar
    $conexao=mysqli_connect($servidor,$usuario,$senha,$bd);
    if ($conexao){
        echo "Conexao realizada com sucesso";
    }
    else{
        echo mysqli_error($conexao);
    }