<?php
    include '../models/model.user.php';

    function verifyPassword($password){
        return strlen($password) < 6 || !preg_match("/[0-9]/", $password);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($name === '' || $email === '' || $password === '') {
            header('Location: ../views/pages/register_page.php?error=Preencha todos os campos');
            exit; // Certifique-se de sair do script após o redirecionamento.
        }
        if (strlen($name) < 3) {
            header('Location: ../views/pages/register_page.php?error=Nome deve possuir pelo menos 3 caracteres');
            exit; // Certifique-se de sair do script após o redirecionamento.
        }

        if (verifyPassword($password)) {
            header('Location: ../views/pages/register_page.php?error=Email deve possuir @');
            exit; // Certifique-se de sair do script após o redirecionamento.
        }

        if (strlen($password) < 6) {
            header('Location: ../views/pages/register_page.php?error=Senha não segue os parâmetros');
            exit; // Certifique-se de sair do script após o redirecionamento.
        }

        $userName = null;
        foreach ($users as $user) {
            if ($user['email'] === $email) {
                header('Location: ../views/pages/register_page.php?error=Usuário já cadastrado');
                exit;
            }
        }

        array_push($users, [
            'id' => count($users) + 1,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'projects' => []
        ]);
        header('Location: ../views/pages/login_page.php?success=Usuário cadastrado com sucesso');
    }
?>