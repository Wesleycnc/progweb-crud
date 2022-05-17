<?php

// Parâmetros de servidor de BD
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas_wesley";

// Conectar ao servidor
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Habilitar o suporte ao charset utf8
mysqli_set_charset($conexao, "utf8");

// Teste (provisório)
/* if($conexao){
    echo "tudo ok!";
} */