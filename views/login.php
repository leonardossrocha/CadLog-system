<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' media='screen' href="css/login.css">
    <title>Entrar</title>
</head>

<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <!-- Os dados serão enviados para 'index.php' com a ação 'login' -->
    <main class="login-container">
        <form method="post" action="index.php?action=login">
            <section class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required>
            </section>
            <section class="input-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Senha" required>
            </section>
            <button type="submit" class="btn">Login</button>
        </form>
        <!-- Define o destino do link e leva à opção de cadastro -->
        <a href="index.php?action=register">Cadastrar-se</a>
    </main>

</body>

</html>