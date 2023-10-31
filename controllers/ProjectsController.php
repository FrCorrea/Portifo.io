<?php

require_once('services/ProjectsService.php');

class ProjectsController
{
    public function showProjects()
    {
        require('./views/pages/home_page.php');       
    }

    public function addProjects()
    {
        require('./views/pages/add_project_page.php');
    }

    public function addNewProject($user) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $projectService = new \services\ProjectService();
            $project = $projectService->addProject($_POST['name'], $_POST['type'], "public", $_POST['description'], $user);
            if($project){
               $response = "Projeto adicionado com sucesso";
               header ('Location: /home');
               echo $response;
            }
            else{
                $response = "Erro ao adicionar projeto";
                header ('Location: /add-project');
                echo $response;
            }
        }
    }

    public function editProjects(){
        require('./views/pages/edit_project_page.php');
    }

    public function editSelectedProject($projectId) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $projectService = new \services\ProjectService();
            $project = $projectService->editProject($projectId, $_POST['name'], $_POST['type'], "public", $_POST['description']);
            if($project){
               $response = "Projeto adicionado com sucesso";
               header ('Location: /home');
               echo $response;
            }
            else{
                $response = "Erro ao adicionar projeto";
                header ('Location: /add-project');
                echo $response;
            }
        }
    }

    public function publicProjects() {
        $projectService = new \services\ProjectService();
        $projects = json_encode($projectService->getPublicProjects());
        require ('./views/pages/public_projects_page.php');
    }

    // public function userProjects() {
    //     $projectService = new \services\ProjectService();
    //     $userProjects = json_encode($projectService->getProjectByUserId());
    //     require ('./views/pages/public_projects_page.php');
    // }

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

    
}
