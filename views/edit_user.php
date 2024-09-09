<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>

<body>
    <form method="post" action="index.php?action=edit&id=<?= $user['id'] ?>">
        <!-- Campo de texto para o nome do usuário, com o valor preenchido a partir da variável $user -->
        <input type="text" name="nome" value="<?= $user['nome'] ?>" required><br>

        <!-- Campo de e-mail do usuário , com o valor preenchido a partir da variável $user -->
        <input type="email" name="email" value="<?= $user['email'] ?>" required><br>

        <!-- Menu suspenso para selecionar o perfil do usuário -->
        <select name="perfil">
            <!-- Opção para 'admin', selecionada se o perfil do usuário for 'admin' -->
            <option value="admin" <?= $user['perfil'] == 'admin' ? 'selected' : '' ?>>Admin</option>

            <!-- Opção para 'gestor', selecionada se o perfil do usuário for 'gestor' -->
            <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : '' ?>>Gestor</option>

            <!-- Opção para 'colaborador', selecionada se o perfil do usuário for 'colaborador' -->
            <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?>>Colaborador</option>
        </select><br>

        <button type="submit">Salvar</button>
    </form>

    <!-- Link para voltar à lista de usuários -->
    <a href="index.php?action=list">Voltar</a>

</body>

</html>