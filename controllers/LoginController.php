<?php
echo 'chegou no controller';

session_start();

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Verifica as credenciais (substitua por sua lógica de autenticação)
    if ($email === 'email@teste.com' && $password === '12345') {
        // Autenticação bem-sucedida, defina uma variável de sessão para marcar o usuário como logado
        $_SESSION['logged_in'] = true;
        header('Location: ../views/pages/home_page.php'); // Redireciona para a área protegida
    } else {
        header('Location: ../views/pages/login_page.php?error=invalid_credentials');
    }
}

?>