<?php
require_once '../control/listarProdutoController.php';

$qtdProdCarrinho = $_SESSION['qtdProdutosCarrinho'];

//var_dump($todos);

//var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <a href="cadastrarProduto.php">Cadastrar Produtos</a>

    <h1>Lista de Produtos</h1>
    <p>Você tem <?php echo $qtdProdCarrinho ?> produtos no carrinho</p>
    <ul>
        <?php foreach ($todos as $t){ ?>
            <li>
                <?php echo $t['nomeProd']; ?> - R$ <?php echo number_format($t['precoProd'], 2, ',', '.'); ?>
                <a href="../control/carrinhoController.php?idProd=<?php echo $t['idProd']; ?>&nomeProd=<?php echo $t['nomeProd']; ?>&precoProd=<?php echo $t['precoProd']; ?>">Adicionar ao Carrinho</a>

               <!--<input type="number" name="quantity" value="1" min="1">-->
            </li>
        <?php } ?>
    </ul>
    <a href="mostraCarrinho.php">Ver Carrinho</a>


</body>

</html>
