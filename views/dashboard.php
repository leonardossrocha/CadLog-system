<?php
echo "Bem-vindo, " . $_SESSION['perfil'] . "!<br>";

if ($_SESSION['perfil'] == 'admin') {
    echo "<a href='index.php?action=list'>Gerenciar Usuários</a>";
} elseif ($_SESSION['perfil'] == 'gestor') {
    echo "Área do gestor.";
} else {
    echo "Área do colaborador.";
}
?>

<a href="index.php?action=logout">Logout</a>