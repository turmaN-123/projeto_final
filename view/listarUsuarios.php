<?php
require_once '../control/listarUsuariosController.php';
require_once '../control/excluirUsuarioController.php';
require_once '../control/alterarUsuarioController.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Usuários Cadastrados</h1>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>                  
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todos as $t) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($t['nomeUsu']); ?></td>
                        <td><?php echo htmlspecialchars($t['emailUsu']); ?></td>
                        <td><?php echo htmlspecialchars($t['perfilUsu']); ?></td>                        
                        <td>
                            <a href="alterarUsuario.php?idUsu=<?php echo $t['idUsu']; ?>" class="btn btn-warning btn-sm">&#9998; Editar</a>
                            <a href="../control/excluirUsuarioController.php?idUsu=<?php echo $t['idUsu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este usuário?');">&#10008; Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        
        <a href="http://localhost/projeto_final_dezembro/view/gerarPdf.php" class="btn btn-primary">Gerar PDF</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
