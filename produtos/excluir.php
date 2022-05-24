<?php 
require "../includes/funcoes-produto.php";
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
excluirProduto($conexao, $id);
header("location:listar.php");