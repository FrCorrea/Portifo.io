<?php
namespace controllers;

require_once('services/UserService.php');
require_once('services/ProjectsService.php');

class UserController {

    public function auth(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           $userService = new \services\UserService();
           $user = $userService->login($_POST['email'], $_POST['password']);
            if($user){
                session_start();
                $_SESSION['user'] = $user[0]['id'];
                header ('Location: /user-projects');
            }
            else{
                $error = "Usuário ou senha incorretos";
                require ('./views/pages/login_page.php');
            }
        }
    }

	 public function login(){
        require('./views/pages/login_page.php');
	 }


     public function register(){
		require('./views/pages/register_page.php');
	 }

     public function registerUser(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $userService = new \services\UserService();
            $user = $userService->register($_POST['name'], $_POST['email'], $_POST['password'], $_POST['linkedln'], $_POST['github']);
            if($user){
               $response = "Cadastrado com sucesso";
               require ('./views/pages/login_page.php');
            }
            else{
                $response = "Erro no cadastro";
                require ('./views/pages/register_page.php');
            }
            
        }
     }
     
    public function logout(){
        session_start();
        session_destroy();
        header ('Location: /');
    }

    public function index(){
        require './views/pages/welcome_page.php' ;
    }
}

