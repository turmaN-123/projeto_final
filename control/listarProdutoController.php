<?php

session_start();

//var_dump($_SESSION);

    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    
      $produtoDAO = new ProdutoDAO();
            
      $todos = $produtoDAO->listarProdutos();

    // echo '<pre>';
    // var_dump($todos);



?>