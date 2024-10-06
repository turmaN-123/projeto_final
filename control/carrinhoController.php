<?php


include_once '../model/DTO/UsuarioDTO.php';
include_once '../model/DTO/ProdutoDTO.php';
include_once '../model/DTO/Carrinho.php'; 
include_once '../model/DTO/ItemCarrinho.php';

session_start();

if (!isset($_SESSION['carrinho'])) {
    $carrinho = new Carrinho();
    $_SESSION['carrinho'] = $carrinho;
}else{
    $carrinho = $_SESSION['carrinho'];
}

$usuario = new UsuarioDTO();
$usuario->setIdUsu($_SESSION["idUsuario"]);

$idProd = $_GET["idProd"];
$nomeProd = $_GET["nomeProd"];
$precoProd = $_GET["precoProd"];

$produto = new ProdutoDTO();    
$produto->setIdProd($idProd);
$produto->setNomeProd($nomeProd);
$produto->setPrecoProd($precoProd);

$carrinho->setUsuario($usuario);
$carrinho->addItem($produto);

echo '<pre>';
var_dump($carrinho);


header("Location: ../view/listarProdutos.php");

?>

