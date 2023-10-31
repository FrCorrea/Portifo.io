<?php

require_once('services/ProjectsService.php');
require_once('services/UserService.php');

class ProjectsController
{
    public function showProjects()
    {
        require('./views/pages/home_page.php');       
    }

    public function addProjects()
    {
        session_start();
        $user_service = new \services\UserService();
        $user = json_encode($user_service->getUserById($_SESSION['user']));
        require('./views/pages/add_project_page.php');
    }

    public function addNewProject($user) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $projectService = new \services\ProjectService();
            $project = $projectService->addProject($_POST['name'], $_POST['type'], "public", $_POST['description'], $user);

            if($project){
                session_start();
                $response = "Projeto adicionado com sucesso";
                header ('Location: /user-projects');
            }
            else{
                $response = "Erro ao adicionar projeto";
                header ('Location: /add-project');
            }
        }
    }

    public function editProjects(){
        require('./views/pages/edit_project_page.php');
    }

    public function getProjectsByUserIdAndType(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            session_start();
            $projectService = new \services\ProjectService();
            $userProjects = json_encode($projectService->getProjectsByUserIdAndType($_SESSION['user'], $_POST['type']));
            echo $_POST['type'];
            $user_service = new \services\UserService();
            $user = json_encode($user_service->getUserById($_SESSION['user']));
            require('./views/pages/home_page.php');
        }
        else { echo 'Erro ao carregar projetos';}

        
    }

    public function editSelectedProject($projectId) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $projectService = new \services\ProjectService();
            $project = $projectService->editProject($projectId, $_POST['name'], $_POST['type'], $_POST['description']);
            if($project){
               $response = "Projeto editado com sucesso";
               header ('Location: /user-projects');
               echo $response;
            }
            else{
                $response = "Erro ao editar projeto";
                header ('Location: /edit-project');
                echo $response;
            }
        }
    }

    public function publicProjects() {
        $projectService = new \services\ProjectService();
        $projects = json_encode($projectService->getPublicProjects());
        require ('./views/pages/public_projects_page.php');
    }

    public function userProjects() {
        session_start();
        $projectService = new \services\ProjectService();
        $userProjects = json_encode($projectService->getProjectByUserId());
        $user_service = new \services\UserService();
        $user = json_encode($user_service->getUserById($_SESSION['user']));
        require ('./views/pages/home_page.php');
     }

    public function search(){
        $projectService = new \services\ProjectService();
        if($_POST['name'] == ""){
            $projects = json_encode($projectService->getPublicProjects());
        }
        else{
            $projects = json_encode($projectService->getProjectByName($_POST['name']));
        }
        require ('./views/pages/public_projects_page.php');
    }

    public function deleteProject($projectId) {
        $projectService = new \services\ProjectService();
        $deletedProject = json_encode($projectService->deleteProject($projectId));
        if($deletedProject){
            $response = "Projeto excluído com sucesso";
            header ('Location: /home');
            echo $response;
         }
         else{
             $response = "Erro ao excluir projeto";
             header ('Location: /edit-project');
             echo $response;
         }
    }
}
