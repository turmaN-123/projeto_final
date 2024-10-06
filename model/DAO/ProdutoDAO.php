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
    // INSERT
    public function cadastrarProduto(ProdutoDTO $produtoDTO)
    {
        //echo "{$usuarioDTO->getDtNascimentoUsu()}";
       
        try {
            $sql = "INSERT INTO produto (nomeProd,precoProd,qtdProd) 
            VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);

            $nomeProd = $produtoDTO->getNomeProd();
            $precoProd  = $produtoDTO->getPrecoProd();
            $qtdProd  = $produtoDTO->getQtdProd();

            
            //var_dump($dtNascimentoUsu);

            $stmt->bindValue(1, $nomeProd);
            $stmt->bindValue(2, $precoProd);
            $stmt->bindValue(3, $qtdProd);


            $retorno = $stmt->execute();
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    //LISTAR USUÁRIOS
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

         //PesquisarProdutoPorId
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