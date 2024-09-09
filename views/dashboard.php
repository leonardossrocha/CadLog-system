<?php
// Exibe uma mensagem de boas-vindas ao usuário, incluindo seu perfil
// O perfil é obtido da sessão iniciada (ex: 'admin', 'gestor', 'colaborador')
echo "Bem-vindo, " . $_SESSION['perfil'] . "!<br>";

// Verifica o perfil do usuário armazenado na sessão para determinar o que exibir
if ($_SESSION['perfil'] == 'admin') {
    // Se o perfil for 'admin', exibe um link para gerenciar usuários
    echo "<a href='index.php?action=list'>Gerenciar Usuários</a>";
} elseif ($_SESSION['perfil'] == 'gestor') {
    // Se o perfil for 'gestor', exibe uma mensagem específica para a área do gestor
    echo "Área do gestor.";
} else {
    // Caso contrário (presumindo que o perfil é 'colaborador'), exibe uma mensagem específica para a área do colaborador
    echo "Área do colaborador.";
}
?>

<!-- Exibe um link para fazer logout -->
<a href="index.php?action=logout">Logout</a>
