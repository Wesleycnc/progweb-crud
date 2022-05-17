<?php

require "conecta.php";

function lerFabricantes($conexao){
    // 1) Montar a string do comando SQL
    $sql="SELECT id, nome FROM fabricantes";

    // 2) Executar o comando
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // 3) Criar um array vazio para receber os resultados
    $fabricantes = [];

    // 4) Loop iterando em cada resultado, e a cada fabricante  que for localizado, ele é acrescentado ao array fabricantes.
    
    while($fabricante = mysqli_fetch_assoc($resultado) ){
        // array_push(nome do array principal, nome do array individual)
        array_push($fabricantes, $fabricante);
    }

    //5) retornando para fora da função os fabricantes localizados
    return $fabricantes; // Lista de fabricantes (Matrix)

}
/* var_dump(lerFabricantes($conexao)); //teste */

function insetirFabricante($conexao, $nome){
    $sql = "INSERT INTO fabricantes(nome) VALUES('$nome')";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

}