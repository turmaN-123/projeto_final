<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Entrar no Sistema</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Entrar no Sistema</h2>
    
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <form action="../control/loginController.php" method="POST">
        <div class="form-group">
            <label for="emailUsu">E-mail</label>
            <input type="email" class="form-control" id="emailUsu" name="emailUsu" required>
        </div>
        <div class="form-group">
            <label for="senhaUsu">Senha</label>
            <input type="password" class="form-control" id="senhaUsu" name="senhaUsu" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </form>
    
    <div class="text-center mt-3">
        <a href="#" class="text-muted">Esqueceu a senha?</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
