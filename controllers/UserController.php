<?php
session_start();

class UserController
{
    public function login()
    {
        $caminho =  '../views/pages/login_page.php';
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

    function verifyPassword($password)
    {
        return strlen($password) < 6 || !preg_match("/[0-9]/", $password);
    }

    public function register()
    {
        $caminho =  './views/pages/register_page.php';
        header('Location: ' . $caminho);
        // global $users;

        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $name = $_POST['name'];
        //     $email = $_POST['email'];
        //     $password = $_POST['password'];

        //     if ($name === '' || $email === '' || $password === '') {
        //         header('Location: /Portifo.io/views/pages/register_page.php?error=Preencha todos os campos');
        //         exit; // Certifique-se de sair do script após o redirecionamento.
        //     }
        //     if (strlen($name) < 3) {
        //         header('Location: /Portifo.io/views/pages/register_page.php?error=Nome deve possuir pelo menos 3 caracteres');
        //         exit; // Certifique-se de sair do script após o redirecionamento.
        //     }

        //     if (verifyPassword($password)) {
        //         header('Location: /Portifo.io/views/pages/register_page.php?error=Email deve possuir @');
        //         exit; // Certifique-se de sair do script após o redirecionamento.
        //     }

        //     if (strlen($password) < 6) {
        //         header('Location: /Portifo.io/views/pages/register_page.php?error=Senha não segue os parâmetros');
        //         exit; // Certifique-se de sair do script após o redirecionamento.
        //     }

        //     $userName = null;
        //     foreach ($users as $user) {
        //         if ($user['email'] === $email) {
        //             header('Location: /Portifo.io/views/pages/register_page.php?error=Usuário já cadastrado');
        //             exit;
        //         }
        //     }

        //     array_push($users, [
        //         'id' => count($users) + 1,
        //         'name' => $name,
        //         'email' => $email,
        //         'password' => $password,
        //         'projects' => []
        //     ]);
        //     header('Location: /Portifo.io/?success=Usuário cadastrado com sucesso');
        // }
    }

    public function auth()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            
            //$path = system('pwd');
            $caminho = '../views/pages/home_page.php';
            header('Location: ' . $caminho);
        }
    }

    public function loginUser($email)
    {
        $caminho = '/Portifo.io/views/pages/home_page.php';
        header('Location: ' . $caminho);

        // global $users;
        // $raiz = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR;

        // if ($email === '') {
        //     $caminho =  '/Portifo.io/views/pages/login_page.php?error=Preencha todos os campos';
        //     header('Location: ' . $caminho);
        //     exit;
        // }

        // if (strpos($email, '@') == false) {
        //     $caminho = '/Portifo.io/views/pages/login_page.php?error=Email inválido';
        //     header('Location: ' . $caminho);
        //     $_COOKIE['contadorEntradas'] += 1;
        //     exit;
        // }

        // $emailFound = false;
        // $userId = null;
        // $userName = null;
        // $userEmail = null;

        // foreach ($users as $user) {
        //     if ($user['email'] === $email) {
        //         $emailFound = true;
        //         $userId = $user['id'];
        //         $userName = $user['name'];
        //         $userEmail = $user['email'];
        //         break;
        //     }
        // }

        // if ($emailFound) {
        //     $_SESSION['user_id'] = $userId;
        //     $_SESSION['user_name'] = $userName;
        //     $_SESSION['user_email'] = $userEmail;
        //     $_SESSION['logged_in'] = true;
        //     $caminho =  '/Portifo.io/views/pages/home_page.php';
        //     header('Location: ' . $caminho);
        // } else {
        //     $caminho =  '/Portifo.io/?error=Email ou senha inválidos';
        //     header('Location: ' . $caminho);
        // }
    }
}
