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

    public function editProjects(){
        require('./views/pages/edit_project_page.php');
    }

    public function publicProjects() {
        $projectService = new \services\ProjectService();
        $projects = json_encode($projectService->getPublicProjects());
        require ('./views/pages/public_projects_page.php');
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

    
}
