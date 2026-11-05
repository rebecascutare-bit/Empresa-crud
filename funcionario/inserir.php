<?php
$nome="Rebeca de OLiveira Scutare";
$email="rebecascutare@gmail.com";
$cargo="empresa";
$salario=20.000;
$admisaao="2026-11-05";

//criar a intrução SQL

$SQL="insert into funcionario (nome,email,cargo,salario,data_admessao) values('$nome','$email','$cargo','$salario','$admassao')";

require_once("../conexao.PHP");
$resposta=mysqli_querye($conexao,$SQL);

IF ($resposta==true)
    {
        header("location:listar.PHP");
    }
    
    

