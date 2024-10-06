<?php

    class ItemCarrinho{
        private ProdutoDTO $produto;
        private $quantidade = 1;//adicionar item já adicionado com qtd = 1

    public function setProduto(ProdutoDTO $produto){
        $this->produto = $produto;
    }
    public function getProduto(){
        return $this->produto;
    }
    public function getQtdProd(){
        return $this->quantidade;
    }

    public function addItem(){
        $this->quantidade++;
    }
    public function removerItem(){
        $this->quantidade--;
    }

}

?>