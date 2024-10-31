<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once '../model/DTO/ProdutoDTO.php';
require_once '../model/DAO/ProdutoDAO.php';

$produtoDAO = new ProdutoDAO();

$todos = $produtoDAO->listarProdutos();

?>
