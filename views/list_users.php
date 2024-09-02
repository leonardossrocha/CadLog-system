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
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nome'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['perfil'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $user['id'] ?>">Editar</a>
                    <a href="index.php?action=delete&id=<?= $user['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php?action=dashboard">Voltar ao Dashboard</a>
</body>

</html>