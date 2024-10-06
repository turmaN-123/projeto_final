<?php


include_once '../model/DTO/UsuarioDTO.php';
include_once '../model/DTO/ProdutoDTO.php';
include_once '../model/DTO/Carrinho.php'; 
include_once '../model/DTO/ItemCarrinho.php';

session_start();
$carrinho = $_SESSION['carrinho'];
$idProd = $_GET["idProd"];

if(isset($_GET['acao']) && $_GET['acao'] == 'remover') {
    //remover item
    echo "entro";
    var_dump($carrinho->getItemCarrinhoByIdProd($idProd));
        if( $carrinho->getItemCarrinhoByIdProd($idProd)->getQtdProd() > 1){
            $carrinho->getItemCarrinhoByIdProd($idProd)->removerItem();
        }else{
            $produto = new ProdutoDTO();
            $produto->setIdProd($idProd);
            $carrinho->removerItem($produto);
        }
    echo "<pre>";
    var_dump($carrinho);

}

if(isset($_GET['acao']) && $_GET['acao'] == 'adicionar') {

    //adicionar ao carrinho

    $produto = new ProdutoDTO();    
    $produto->setIdProd($idProd);

    $carrinho->addItem($produto);

    echo '<pre>';
    var_dump($carrinho);
}

$_SESSION['carrinho'] = $carrinho ;


header("Location: ../view/mostraCarrinho.php");

?>