<?php
// Definição da classe UserController, responsável por gerenciar as ações relacionadas aos usuários
class UserController
{
    // Função para registrar um novo usuário
    public function register()
    {
        // Verifica se a requisição HTTP é do tipo POST (se o formulário foi enviado)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Coleta os dados enviados pelo formulário e organiza em um array
            $data = [
                'nome' => $_POST['nome'], // Nome do usuário
                'email' => $_POST['email'], // E-mail do usuário
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), // Criptografa a senha
                'perfil' => $_POST['perfil'] // Perfil do usuário (admin, gestor, colaborador)
            ];
            // Chama o método create do Model User para criar o novo usuário no banco de dados
            User::create($data);
            // Após o registro, redireciona o usuário para a página inicial
            header('Location: index.php');
        } else {
            // Se a requisição não for POST (por exemplo, GET), carrega a página de registro
            include 'views/register.php';
        }
    }

    // Função para editar os dados de um usuário existente
    public function edit($id)
    {
        // Chama o método find do Model User para encontrar o usuário pelo ID
        $user = User::find($id);

        // Verifica se a requisição HTTP é do tipo POST (se o formulário foi enviado)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Coleta os novos dados enviados pelo formulário e organiza em um array
            $data = [
                'nome' => $_POST['nome'], // Nome do usuário
                'email' => $_POST['email'], // E-mail do usuário
                'perfil' => $_POST['perfil'] // Perfil do usuário
            ];
            // Chama o método update do Model User para atualizar os dados do usuário no banco de dados
            User::update($id, $data);
            // Após a edição, redireciona o usuário para a lista de usuários
            header('Location: index.php?action=list');
        } else {
            // Se a requisição não for POST, carrega a página de edição de usuário
            include 'views/edit_user.php';
        }
    }

    // Função para excluir um usuário
    public function delete($id)
    {
        // Chama o método delete do Model User para remover o usuário pelo ID
        User::delete($id);
        // Após a exclusão, redireciona para a lista de usuários
        header('Location: index.php?action=list');
    }

    // Função para listar todos os usuários
    public function list()
    {
        // Chama o método all do Model User para obter todos os usuários do banco de dados
        $users = User::all();
        // Inclui a View que exibe a lista de usuários
        include 'views/list_users.php';
    }
}
