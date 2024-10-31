<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Cadastrar Usuário</h1>

    <form action="../control/cadastrarUsuarioController.php" method="post">
        <div class="form-group">
            <label for="nomeUsu">Nome:</label>
            <input type="text" class="form-control" id="nomeUsu" name="nomeUsu" required>
        </div>
        <div class="form-group">
            <label for="dtNascimentoUsu">Data de Nascimento:</label>
            <input type="date" class="form-control" id="dtNascimentoUsu" name="dtNascimentoUsu" required>
        </div>
        <div class="form-group">
            <label for="emailUsu">E-mail:</label>
            <input type="email" class="form-control" id="emailUsu" name="emailUsu" required>
        </div>
        <div class="form-group">
            <label for="senhaUsu">Senha:</label>
            <input type="password" class="form-control" id="senhaUsu" name="senhaUsu" required>
        </div>
        <input type="hidden" name="perfilUsu" value="Cliente">
        <input type="hidden" name="situacaoUsu" value="Ativo">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
