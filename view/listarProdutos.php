<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuarioTipo'])) {
    
    $_SESSION['usuarioTipo'] = 'guest'; 
}

$usuarioTipo = $_SESSION['usuarioTipo']; 

$categorias = [
    'cozinha' => 'Cozinha',
    'cama' => 'Cama',
    'ferramentas' => 'Ferramentas',
    'games' => 'Games',
    'eletronicos' => 'Eletrônicos',
];

require_once '../control/listarProdutoController.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <?php if ($usuarioTipo === 'admin' || $usuarioTipo === 'vendedor') { ?>
            <h1 class="mb-4">Cadastrar Produtos</h1>
            <p>Selecione a categoria do produto:</p>
            <ul class="list-group mb-4">
                <?php foreach ($categorias as $key => $categoria) { ?>
                    <li class="list-group-item">
                        <a href="cadastrarProduto.php?categoria=<?php echo $key; ?>" class="btn btn-primary"><?php echo $categoria; ?></a>
                    </li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <a href="cadastrarProduto.php" class="btn btn-primary mb-3">Cadastrar Produtos</a>          
            <div class="list-group">
                <?php foreach ($todos as $t) { ?>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <?php 
                                // Verificar a imagem 
                                $imagemPath = "./img/cozinha/" . $t['imagem'];
                                if ($t['imagem'] && file_exists($imagemPath)) {
                                    echo '<img src="' . $imagemPath . '" alt="' . htmlspecialchars($t['nomeProd']) . '" style="width: 200px; height: 200px; margin-right: 20px;">';
                                } else {
                                    echo '<img src="./img/produtoSemFoto.png" alt="Imagem não disponível" style="width: 200px; height: 200px; margin-right: 20px;">';
                                }
                            ?>
                            <div>
                                <h5><?php echo htmlspecialchars($t['nomeProd']); ?></h5>
                                <p class="mb-1">R$ <?php echo number_format($t['precoProd'], 2, ',', '.'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
