<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>

<body>
    <h2>Lista de Usuários</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Perfil</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <!-- Início do loop para iterar sobre a lista de usuários -->
            <tr>
                <!-- Exibe o ID do usuário -->
                <td><?= $user['id'] ?></td>
                <!-- Exibe o nome do usuário -->
                <td><?= $user['nome'] ?></td>
                <!-- Exibe o e-mail do usuário -->
                <td><?= $user['email'] ?></td>
                <!-- Exibe o perfil do usuário -->
                <td><?= $user['perfil'] ?></td>
                <td>
                    <!-- Link para editar o usuário, passando o ID do usuário na URL -->
                    <a href="index.php?action=edit&id=<?= $user['id'] ?>">Editar</a>
                    <!-- Link para excluir o usuário, passando o ID do usuário na URL -->
                    <!-- O link exibe uma caixa de confirmação antes de prosseguir com a exclusão -->
                    <a href="index.php?action=delete&id=<?= $user['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <!-- Link para retornar ao Dashboard -->
    <a href="index.php?action=dashboard">Voltar ao Dashboard</a>

</body>

</html>