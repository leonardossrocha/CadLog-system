<?php
class UserController
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                'perfil' => $_POST['perfil']
            ];
            User::create($data);
            header('Location: index.php');
        } else {
            include 'views/register.php';
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'perfil' => $_POST['perfil']
            ];
            User::update($id, $data);
            header('Location: index.php?action=list');
        } else {
            include 'views/edit_user.php';
        }
    }

    public function delete($id)
    {
        User::delete($id);
        header('Location: index.php?action=list');
    }

    public function list()
    {
        $users = User::all();
        include 'views/list_users.php';
    }
}
