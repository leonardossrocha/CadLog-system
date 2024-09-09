<?php
session_start(); // Inicia uma nova sessão ou retoma a sessão atual. Isso é necessário para acessar variáveis de sessão.

if (!isset($_SESSION['usuario_id'])) { // Verifica se a variável de sessão 'usuario_id' está definida.
    header('Location: index.php?action=login'); // Redireciona o usuário para a página de login se a variável 'usuario_id' não estiver definida.
    exit; // Interrompe a execução do script após o redirecionamento para garantir que o código abaixo não seja executado.
}
?>
