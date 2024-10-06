<?php

    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';

 
      $nomeProd = strip_tags($_POST["nomeProd"]);
      $precoProd = ($_POST["precoProd"]);  
      $qtdProd= strip_tags($_POST["qtdProd"]); 


      echo "{$nomeProd}";
      echo "{$precoProd}";
      echo "{$qtdProd}";

      $produtoDTO = new ProdutoDTO();
      $produtoDTO->setNomeProd($nomeProd);
      $produtoDTO->setPrecoProd($precoProd);
      $produtoDTO->setQtdProd($qtdProd);

      echo "<pre>";
      var_dump($produtoDTO);

      //echo "{$usuarioDTO->getDtNascimentoUsu()}";
      $produtoDAO = new ProdutoDAO();
            
      $sucesso = $produtoDAO->cadastrarProduto($produtoDTO);

 
    
      if($sucesso){
        $msg = "Usuário cadastrado com sucesso!";
       // echo "<script>alert('Produto cadastrado com sucesso!');</script>";
        header("Location: ../view/cadastrarProduto.php");
      } else {
        $msg = "Aconteceu um problema no cadastramento<br>".$sucesso;
        echo "<script>alert('$msg');</script>";
    
      }
     // header("Location: ../view/cadastrarProduto.php");
   

?>