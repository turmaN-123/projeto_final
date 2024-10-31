<?php

    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';

    $imgName=$_FILES["imagemProd"]["name"];
    
      $target_file = "../view/img/".$_POST['categoriaProd']."/".$imgName;
      if (!move_uploaded_file($_FILES["imagemProd"]["tmp_name"], $target_file)) {
        echo "Erro ao carregar a imagem do produto.";
      }
       
      $nomeProd = strip_tags($_POST["nomeProd"]);
      $precoProd = ($_POST["precoProd"]);  
      $qtdProd= strip_tags($_POST["qtdProd"]);

      echo "{$nomeProd}";
      echo "{$precoProd}";
      echo "{$qtdProd}";
      echo "{$imgName}";

      $produtoDTO = new ProdutoDTO();
      $produtoDTO->setNomeProd($nomeProd);
      $produtoDTO->setPrecoProd($precoProd);
      $produtoDTO->setQtdProd($qtdProd);
      $produtoDTO->setImagem($imgName);

      echo "<pre>";
      var_dump($produtoDTO);

      $produtoDAO = new ProdutoDAO();
            
      $sucesso = $produtoDAO->cadastrarProduto($produtoDTO); 
    
      if($sucesso){
        $msg = "Usuário cadastrado com sucesso!";
      
        header("Location: ../view/cadastrarProduto.php");
      } else {
        $msg = "Aconteceu um problema no cadastramento<br>".$sucesso;
        echo "<script>alert('$msg');</script>";
    
      }   

?>