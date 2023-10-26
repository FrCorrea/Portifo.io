<?php
namespace controllers;

require('services/UserService.php');

class UserController {

    public function auth(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           $userService = new \services\UserService();
           $user = $userService->login($_POST['email'], $_POST['password']);
            if($user){
                echo 'logado';
            }
            else{
                echo "Não logado";
            }
        }
    }

    public function init(){
            $caminho =  '../views/pages/login_page.php';
            header('Location: ' . $caminho);
    }

}
