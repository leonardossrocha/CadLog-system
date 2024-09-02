<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>

<body>
    <form method="post" action="index.php?action=edit&id=<?= $user['id'] ?>">
        <input type="text" name="nome" value="<?= $user['nome'] ?>" required><br>
        <input type="email" name="email" value="<?= $user['email'] ?>" required><br> <select name="perfil">
            <option value="admin" <?= $user['perfil'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : '' ?>>Gestor</option>
            <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?>>Colaborador</option>
        </select><br> <button type="submit">Salvar</button>

    </form>
    <a href="index.php?action=list">Voltar</a>

</body>

</html>