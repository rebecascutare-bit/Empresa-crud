<?php
    //este arquivo conecta com bd mysql
    //definir as variaveis
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $bd="empresa";
    //charmar o comando para conectar
    $result=mysqli_connect($servidor,$usuario,$senha,$bd);
    if ($result){
        echo "Conexao realizada com sucesso";
    }
    else{
        echo mysqli_error($result);
    }