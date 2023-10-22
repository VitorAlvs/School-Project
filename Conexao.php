<?php

$Bco = "bd_escola";
$Usuario = "root";
$Senha = '';

try
{
    $conexao = new PDO("mysql:host=localhost; dbname=$Bco", "$Usuario", "$Senha");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
}
catch (PDOException $Erro)
{
    echo "Erro na conexão com o banco de dados". $Erro->getMessage();
}