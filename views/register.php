<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>
<body>
<form method="post" action="index.php?action=register">
    <input type="text" name="nome" placeholder="Nome" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <select name="perfil">
        <option value="admin">Admin</option>
        <option value="gestor">Gestor</option>
        <option value="colaborador">Colaborador</option>
    </select><br>
    <button type="submit">Cadastrar</button>
</form>
<a href="index.php">Voltar ao login</a>
</body>
</html>
