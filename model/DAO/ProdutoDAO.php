<?php

include "Conexao.php";
require_once "../model/DTO/ProdutoDTO.php";

class ProdutoDAO
{

    public $pdo = null;
    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    
    public function cadastrarProduto(ProdutoDTO $produtoDTO)
    {
       
        try {
            $sql = "INSERT INTO produto (nomeProd,precoProd,qtdProd,imagem) 
            VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);

            $nomeProd = $produtoDTO->getNomeProd();
            $precoProd  = $produtoDTO->getPrecoProd();
            $qtdProd  = $produtoDTO->getQtdProd();
            $imagem = $produtoDTO->getImagem();
            
            $stmt->bindValue(1, $nomeProd);
            $stmt->bindValue(2, $precoProd);
            $stmt->bindValue(3, $qtdProd);
            $stmt->bindValue(4, $imagem);


            $retorno = $stmt->execute();
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarProdutos()
    {
        try {
            $sql = "SELECT * FROM produto ";
            $stmt = $this->pdo->prepare($sql);
            

            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

 public function pesquisarProdutoPorId($idProduto) {
    try {

        $sql = "SELECT * FROM produto WHERE idProd = '{$idProduto}'; ";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute();
          $retorno = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $retorno;
     } catch (PDOException $exc) {
        echo $exc->getMessage();  
     }
  }
}