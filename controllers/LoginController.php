<?php
session_start();

include '../models/model.user.php';

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === '' || $password === '') {
        header('Location: ../views/pages/login_page.php?error=Preencha todos os campos');
        exit; // Certifique-se de sair do script após o redirecionamento.
    }

    if (strpos($email, '@') == false) {
        header('Location: ../views/pages/login_page.php?error=Email deve possuir @');
        exit; // Certifique-se de sair do script após o redirecionamento.
    }

    $emailFound = false;
    $userId = null;
    $userName = null;

    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $emailFound = true;
            $userId = $user['id'];
            $userName = $user['name'];
            break; // Saia do loop assim que encontrar o email
        }
    }

    if ($emailFound) {
        // Autenticação bem-sucedida, defina uma variável de sessão para marcar o usuário como logado
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_name'] = $userName;
        $_SESSION['logged_in'] = true;
        header('Location: ../views/pages/home_page.php'); // Redireciona para a área protegida
    } else {
        header('Location: ../views/pages/login_page.php?error=Usuário ou senha inválidos');
    }
}

?>