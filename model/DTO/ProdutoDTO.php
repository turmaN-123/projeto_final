<?php
//data transfer object - transferencia dos dados do formulario (view)
class ProdutoDTO{
    private $idProd;
    private $nomeProd;
    private $precoProd;
    private $qtdProd;

    public function setIdProd($idProd){
        $this->idProd = $idProd;

    }
    public function getIdProd(){
        return $this->idProd;
    }
    public function setNomeProd($nomeProd){
        $this->nomeProd = $nomeProd;

    }
    public function getNomeProd(){
        return $this->nomeProd;
    }
    public function setPrecoProd($precoProd){
        $this->precoProd = $precoProd;

    }
    public function getPrecoProd(){
        return $this->precoProd;
    }

    public function setQtdProd($qtdProd){
        $this->qtdProd = $qtdProd;

    }
    public function getQtdProd(){
        return $this->qtdProd;
    }


}