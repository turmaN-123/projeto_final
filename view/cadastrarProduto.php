<?php
session_start();

if (!isset($_SESSION["idUsu"]) || !isset($_SESSION["nomeUsu"])) {
    header("Location: login.php"); 
    exit();
}

$idUsu = $_SESSION["idUsu"];
$nomeUsu = $_SESSION["nomeUsu"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-file-upload {
            cursor: pointer;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 6px 12px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Cadastrar Produtos</h1>
        <p>Logado como: <?php echo htmlspecialchars($nomeUsu); ?></p>
        <form action="../control/cadastrarProdutoController.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomeProd">Nome:</label>
                <input type="text" class="form-control" id="nomeProd" name="nomeProd" required>
            </div>
            <div class="form-group">
                <label for="precoProd">Preço:</label>
                <input type="number" class="form-control" id="precoProd" name="precoProd" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="qtdProd">Quantidade:</label>
                <input type="number" class="form-control" id="qtdProd" name="qtdProd" required min="1">
            </div>
            <div class="form-group">
                <label for="categoriaProd">Categoria:</label>
                <select class="form-control" id="categoriaProd" name="categoriaProd" required>
                    <option value="">Selecione uma categoria</option>
                    <option value="cozinha">Cozinha</option>
                    <option value="cama">Cama, Mesa e Banho</option>
                    <option value="ferramentas">Ferramentas</option>
                    <option value="games">Games</option>
                    <option value="eletronicos">Eletrônicos</option>
                </select>
            </div>
            <div class="form-group">
                <label class="custom-file-upload">
                    Selecione a Imagem
                    <input type="file" name="imagemProd" id="imagemProd" accept="image/*" required style="display: none;" onchange="updateFileName(this)">
                </label>
                <span id="file-name"></span>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.2.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function updateFileName(input) {
            const fileName = input.files[0] ? input.files[0].name : '';
            document.getElementById('file-name').textContent = fileName;
        }
    </script>
</body>
</html>
