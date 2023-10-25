<?php

namespace Portifoio\controllers;

session_start();

class LoginController {
    public function login(){
        echo "ola mundo";

        $caminho =  './views/pages/login_page.php';
        header('Location: ' . $caminho);
        // global $users;
        // $raiz = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR;

        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $email = $_POST['email'];
        //     $password = $_POST['password'];
        
        //     if ($email === '' || $password === '') {
        //         $caminho =  '/Portifo.io/views/pages/login_page.php?error=Preencha todos os campos';
        //         header('Location: ' . $caminho);
        //         exit;
        //     }
        
        //     if (strpos($email, '@') == false) {
        //         $caminho = '/Portifo.io//views/pages/login_page.php?error=Email inválido';
        //         header('Location: ' . $caminho);
        //         $_COOKIE['contadorEntradas'] += 1;
        //         exit;
        //     }
        
        //     $emailFound = false;
        //     $userId = null;
        //     $userName = null;
        //     $userEmail = null;
        
        //     foreach ($users as $user) {
        //         if ($user['email'] === $email && $user['password'] === $password) {
        //             $emailFound = true;
        //             $userId = $user['id'];
        //             $userName = $user['name'];
        //             $userEmail = $user['email'];
        //             break; // Saia do loop assim que encontrar o email
        //         }
        //     }
        
        //     if ($emailFound) {
        //         // Autenticação bem-sucedida, defina uma variável de sessão para marcar o usuário como logado
        //         $_SESSION['user_id'] = $userId;
        //         $_SESSION['user_name'] = $userName;
        //         $_SESSION['user_email'] = $userEmail;
        //         $_SESSION['logged_in'] = true;
        //         $caminho =  '/Portifo.io/views/pages/home_page.php';
        //         header('Location: ' . $caminho);
        //     } else {
        //         $caminho =  '/Portifo.io/?error=Email ou senha inválidos';
        //         header('Location: ' . $caminho);
        //     }
        // }
    }
}
