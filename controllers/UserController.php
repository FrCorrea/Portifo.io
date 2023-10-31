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
                $_SESSION['user'] = $user[0]['id'];
                $_SESSION['user_name'] = $user[0]['name'];
                $_SESSION['user_email'] = $user[0]['email'];
                $projectService = new \services\ProjectService();
                $userProjects = json_encode($projectService->getProjectByUserId());
                require ('./views/pages/home_page.php');
            }
            else{
                echo "Não logado";
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

    public function index(){
        require './views/pages/welcome_page.php' ;
    }

}
