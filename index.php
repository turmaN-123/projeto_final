<?php
session_start();

// Verifica se o usuário está logado
$usuarioLogado = isset($_SESSION['usuario_logado']) ? $_SESSION['usuario_logado'] : false;

if ($usuarioLogado) {
    
    header('Location: view/index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Página de Índices</title>
    <style>
        .nav-links {
            flex-grow: 1;
            justify-content: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="nav-links d-flex">
            <a class="nav-item nav-link" href="#">Home</a>
            <a class="nav-item nav-link" href="#">Cozinha</a>
            <a class="nav-item nav-link" href="#">Cama</a>
            <a class="nav-item nav-link" href="#">Ferramentas</a>
            <a class="nav-item nav-link" href="#">Games</a>
            <a class="nav-item nav-link" href="#">Eletrônicos</a>
        </div>
        <div class="ml-auto">
            <a class="btn btn-outline-primary" href="./view/cadastrarUsuario.php">Cadastre-se</a>
            <a class="btn btn-outline-secondary" href="./view/login.php">Entrar</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1>Bem-vindo à nossa loja!</h1>
    <p>Aqui você encontra os melhores produtos.</p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
