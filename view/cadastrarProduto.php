<?php

session_start();
$idUsu = $_SESSION["idUsu"];
$nomeUsu = $_SESSION["nomeUsu"];

//var_dump($nomeUsu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bem vindo, <?php echo "{$nomeUsu}" ?></p>

    <h1>Cadastrar produtos</h1>

    <form action="../control/cadastrarProdutoController.php" method="post">
        Nome: <input type="text" name="nomeProd"><hr>
        Preco: <input type="text" name="precoProd"> <hr>
        Quantidade: <input type="text" name="qtdProd"><hr>
        <input type="submit" value="Salvar">
    </form>
    
</body>
</html>