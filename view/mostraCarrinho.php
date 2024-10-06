<?php

require_once '../model/DTO/UsuarioDTO.php';
require_once '../model/DTO/ProdutoDTO.php';
require_once '../model/DAO/ProdutoDAO.php';
require_once '../model/DTO/Carrinho.php'; 
require_once '../model/DTO/ItemCarrinho.php';

session_start();

//print_r($_SESSION);
$nomeUsu = $_SESSION['nomeUsu'];

$carrinho = $_SESSION['carrinho'];


$produto = new ProdutoDAO();
$idProduto = $carrinho->getItemCarrinho();


echo '<pre>';
// print_r($carrinho);

echo "Itens  ". $nomeUsu . ". Produtos no carrinho: <br>"; 

$totalCompra = 0;
$qtdProdutosCarrinho = 0;
$totalItens = 0;
foreach ($carrinho->getItemCarrinho() as $item) {

    echo "<li style=\"border: 1px solid black; list-style-type:none; margin-right: 50%\">";
    echo "ID do Produto: " . $item->getProduto()->getIdProd() . "<br>";
    echo "Nome do Produto: ". $item->getProduto()->getNomeProd() ."<br>";   
    echo "Valor Unitário: " . $item->getProduto()->getPrecoProd() . "<br>";
    echo "Quantidade: " . $item->getQtdProd();
    //adicionar item
    echo ' <a href="../control/totalCarrinhoController.php?acao=adicionar&idProd=' . $item->getProduto()->getIdProd() . '"><button type="button">+</button></a> ';
    //remover item
    echo '<a href="../control/totalCarrinhoController.php?acao=remover&idProd=' . $item->getProduto()->getIdProd() . '"><button type="button">-</button></a>';

    echo "</br>Valor final item: " . $item->getProduto()->getPrecoProd() * $item->getQtdProd() . "<br>";
    echo "</li>";

    $totalCompra +=  $item->getProduto()->getPrecoProd() * $item->getQtdProd();
    $qtdProdutosCarrinho++;
    $totalItens += $item->getQtdProd();

}
echo "<li style=\"border: 1px solid black; list-style-type:none; margin-right: 50%\">";
echo "Valor total da compra: ".$totalCompra ."<br>";
echo "Produtos no carrinho: ".$qtdProdutosCarrinho ."<br>";
echo "Total de itens no carrinho: ".$totalItens ."<br>";
echo '<a href="../view/fecharCompra.php"><button type="button">Finalizar pedido</button></a>';


echo "</li>";


$_SESSION['qtdProdutosCarrinho'] = $qtdProdutosCarrinho;

?>
<a href="listarProdutos.php">Voltar</a>


